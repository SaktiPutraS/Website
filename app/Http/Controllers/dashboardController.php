<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class dashboardController extends Controller
{
    public function index(){
        $hard_req_done=DB::table('hard_req')->where('hard_req_status','Selesai')->count();
        $hard_req_total=DB::table('hard_req')->count();

        $hard_fix_done=DB::table('hard_fix_general')->where('hard_fix_status','Selesai')->count();
        $hard_fix_total=DB::table('hard_fix_general')->count();

        $soft_req_done=DB::table('soft_req')->where('soft_req_status','Selesai')->count();
        $soft_req_total=DB::table('soft_req')->count();
        // Status
        $arra=DB::table('ticketing')->select(DB::raw('ticket_status'), DB::raw('COUNT(*) as jumlah'))
        ->groupBy('ticket_status')
        ->pluck('jumlah', 'ticket_status');
        // ->get();
        $label = $arra->keys();
        $val = $arra->values();

        $daily=DB::table('ticketing')->select(DB::raw('count(*) as jumlah'),DB::raw('date(created_at) as tanggal'))
        ->orderBy('id','desc')
        ->latest()
        ->take(7)
        ->groupBy('tanggal')
        ->pluck('jumlah','tanggal');
        $dailylabel = $daily->keys();
        $dailyval = $daily->values();

        // Top Solver
        $solver=DB::table('ticketing')->select(DB::raw('ticket_solver'), DB::raw('COUNT(*) as jumlah'))
        ->whereNotNull('ticket_solver')
        ->groupBy('ticket_solver')
        ->pluck('jumlah', 'ticket_solver');
        $solverlabel = $solver->keys();
        $solverval = $solver->values();

        // Jumlah Kategori
        $solver=DB::table('ticketing')->select(DB::raw('ticket_type'), DB::raw('COUNT(*) as jumlah'))
        ->whereNotNull('ticket_type')
        ->orderBy('ticket_type','asc')
        ->groupBy('ticket_type')
        ->pluck('jumlah', 'ticket_type');
        // ->get();
        $typelabel = $solver->keys();
        $typeval = $solver->values();
        $query="WITH get_min AS (
            SELECT
              id,
              TIMESTAMPDIFF(MINUTE, created_at, updated_at) AS menit
            FROM ticketing
            WHERE ticket_status = 'Done'
          ),
          get_hour AS (
              SELECT
                  id,
                  menit,
                 floor(menit/ 60) as jam
              from get_min
          )
          SELECT count(*) as Jumlah,
              CASE WHEN jam < 1 THEN 'Less than an hour'
              WHEN jam >1 and jam < 4 THEN '1 - 4 hours'
              WHEN jam >4 and jam < 8 THEN '4 - 8 hours'
              ELSE 'More than a day'
              END AS Kondisi
          from get_hour
          WHERE menit IS NOT NULL
          GROUP BY Kondisi
        ";
         $durasi = DB::connection()->select($query);
         //Ubah hasil ke array
         $collect=collect($durasi);
         // Ubah hasil ke object
         $durasi=$collect->pluck("Jumlah","Kondisi");
         $durasilabel = $durasi->keys();
         $durasival = $durasi->values();
        // Jaringan

        $query="WITH count_bulan AS(
            SELECT
                COUNT(*) as jumlah,
                DATE_FORMAT(created_at, '%b %Y') as bulan,
                MONTH(created_at) as num_bulan,
                '15' as max_target,
                DATE_FORMAT(created_at,'%b') as say_bulan
            from ticketing
            WHERE
                ticket_type = 'Jaringan'
            GROUP BY bulan, say_bulan, num_bulan
    		ORDER BY num_bulan desc
            ),
            count_percent as(
                    SELECT *,
                    CASE
                        WHEN ((max_target/jumlah)*100) > 100 then '100'
                        ELSE  ((max_target/jumlah)*100)
                    END as percentage
            from count_bulan)
            select *,
                percentage - lead(percentage,1) over (ORDER by num_bulan desc) as different
            from count_percent
            order by num_bulan desc";
        $jar_latest = DB::connection()->select($query);
        $jar_data = DB::connection()->select($query);

        // $jar_target = DB::connection()->select($query);
        // $jar_bulan = DB::connection()->select($query);
         $petugas = DB::table('ticketing')
         ->select('ticket_solver')
         ->distinct()
         ->where('ticket_status','Done')
         ->get();


        // Downtime
        $query="WITH DIFF_SECS AS(
                    SELECT
                        sum(TIMESTAMPDIFF(SECOND, created_at, updated_at)) AS totals,
                        DATE_FORMAT(created_at, '%Y %m') as monthYear
                    FROM ticketing WHERE ticket_type = 'Down'
                    GROUP BY monthYear),
                SHOW_PERCENT AS(
                    SELECT
                        monthYear,
                        ((576000-totals)/576000 * 100) as percen,
                        SEC_TO_TIME(totals) AS TO_SHOW
                    FROM DIFF_SECS
                    ORDER BY monthYear DESC)
                SELECT * FROM SHOW_PERCENT LIMIT 1";
        $downtime = DB::connection()->select($query);
        return view('dashboard')
        ->with(compact('hard_req_done','hard_req_total','hard_fix_done','hard_fix_total','soft_req_done','soft_req_total'))
        ->with(compact('downtime'))
        ->with(compact('label','val'))
        ->with(compact('dailylabel','dailyval'))
        ->with(compact('solverlabel','solverval'))
        ->with(compact('typelabel','typeval'))
        ->with(compact('durasilabel','durasival'))
        ->with(compact('jar_latest','jar_data'))
        ->with(compact('petugas'))
        ;
    }
    public function getDatadaily(request $request){
        if ($request->ajax()) {
            // $output="";
            $data = $request->data;
            if($data=="All"){

                $daily=DB::table('ticketing')->select(DB::raw('count(*) as jumlah'),DB::raw('date(created_at) as tanggal'))
                ->orderBy('id','desc')
                ->latest()
                ->take(7)
                ->groupBy('tanggal')
                ->pluck('jumlah','tanggal');

            }else{

                $daily=DB::table('ticketing')->select(DB::raw('count(*) as jumlah'),DB::raw('date(created_at) as tanggal'))
                ->orderBy('id','desc')
                ->latest()
                ->take(7)
                ->where('ticket_solver',$data)
                ->groupBy('tanggal')
                ->pluck('jumlah','tanggal');
            }

            return response($daily);

        }
    }
    public function getDatakategori(request $request){
        if ($request->ajax()) {
            // $output="";
            $data = $request->data;
            if($data=="All"){
                $typecat =DB::table('ticketing')
                ->select(DB::raw('count(*) as jumlah, ticket_type'))
                ->groupBy('ticket_type')
                // ->get();
                ->pluck('jumlah', 'ticket_type');
            }else{
                $typecat =DB::table('ticketing')
                ->select(DB::raw('count(*) as jumlah, ticket_type'))
                ->where('ticket_solver',$data)
                ->groupBy('ticket_type')
                // ->get();
                ->pluck('jumlah', 'ticket_type');
            }

            return response($typecat);

        }
    }
    public function getDatastatus(request $request){
        if ($request->ajax()) {
            // $output="";
            $data = $request->data;
            if($data=="All"){
                $status=DB::table('ticketing')->select(DB::raw('ticket_status'), DB::raw('COUNT(*) as jumlah'))
                ->groupBy('ticket_status')
                ->pluck('jumlah', 'ticket_status');

            }else{

                $status=DB::table('ticketing')->select(DB::raw('ticket_status'), DB::raw('COUNT(*) as jumlah'))
                ->where('ticket_solver',$data)
                ->orWhere('ticket_user',$data)
                ->groupBy('ticket_status')
                ->pluck('jumlah', 'ticket_status');
            }

            return response($status);
        }
    }
    public function getDataduration(request $request){
        if ($request->ajax()) {
            // $output="";
            $data = $request->data;
            if($data=="All"){
                $query="WITH get_min AS (
                    SELECT
                      id,
                      TIMESTAMPDIFF(MINUTE, created_at, updated_at) AS menit
                    FROM ticketing
                    WHERE ticket_status = 'Done'
                  ),
                  get_hour AS (
                      SELECT
                          id,
                          menit,
                         floor(menit/ 60) as jam
                      from get_min
                  )
                  SELECT count(*) as Jumlah,
                      CASE WHEN jam < 1 THEN 'Less than an hour'
                      WHEN jam >1 and jam < 4 THEN '1 - 4 hours'
                      WHEN jam >4 and jam < 8 THEN '4 - 8 hours'
                      ELSE 'More than a day'
                      END AS Kondisi
                  from get_hour
                  WHERE menit IS NOT NULL
                  GROUP BY Kondisi
                ";

            }else{

                $query="WITH get_min AS (
                    SELECT
                      id,
                      TIMESTAMPDIFF(MINUTE, created_at, updated_at) AS menit
                    FROM ticketing
                    WHERE ticket_status = 'Done' and ticket_solver ='".$data."'
                  ),
                  get_hour AS (
                      SELECT
                          id,
                          menit,
                         floor(menit/ 60) as jam
                      from get_min
                  )
                  SELECT count(*) as Jumlah,
                      CASE WHEN jam < 1 THEN 'Less than an hour'
                      WHEN jam >1 and jam < 4 THEN '1 - 4 hours'
                      WHEN jam >4 and jam < 8 THEN '4 - 8 hours'
                      ELSE 'More than a day'
                      END AS Kondisi
                  from get_hour
                  WHERE menit IS NOT NULL
                  GROUP BY Kondisi
                ";
            }
            $durasi = DB::connection()->select($query);
            //Ubah hasil ke array
            $collect=collect($durasi);
            // Ubah hasil ke object
            $durasi=$collect->pluck("Jumlah","Kondisi");

            return response($durasi);
        }
    }
}
