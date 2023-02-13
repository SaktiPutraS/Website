@extends('layout.main')
@section('head')
@endsection
@section('main_header')
    CEK STOCK
@endsection
@section('content')
<?php

$hostname = "192.168.101.223/3051:F:\\FINA\FUJI\FUJI2021.FDB";
$user = "SYSDBA";
$password = "masterkey";

$conn = ibase_connect( $hostname, $user, $password ) or die( 'Error: ' . ibase_errmsg() );


$query = "SELECT FIRST 1000 * FROM ARINV ";
$run_query = ibase_query( $query );

// var_dump($TEST);

?>
<div class="card">
    <div class="card-body">
        <table class="table" name="ITEM" id="ITEM">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    {{-- <th>Item No</th> --}}
                    {{-- <th>Description</th> --}}
                    {{-- <th>QTY ALL</th> --}}
                    {{-- <th>SOR</th> --}}
                    <th>INV NO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nom=1;
                    while ( $row = ibase_fetch_assoc( $run_query ) )
{
    // $TEST[] = $row;
    // echo $row['USERNAME'];
    // echo "<tr>";
        // echo "<td>".$nom++."</td>";
        // echo "<td id='itemno'>".$row['ITEMNO']."</td>";
        // echo "<td id='desc'>".$row['ITEMDESCRIPTION']."</td>";
        // echo "<td id='qty'>".$row['QUANTITY']."</td>";
        // echo "<td>".$row['SOR']."</td>";
    // echo "</tr>";
    echo "<tr>";
        echo "<td>".$nom++."</td>";
        echo "<td id='itemno'>".$row['INVOICENO']."</td>";
    echo "</tr>";
};
?>

            </tbody>
        </table>
    </div>
</div>
@endsection
@section('javascript')
<script id="dataTables">
    $(document).ready(function() {
        $('#ITEM').DataTable();
    });
</script>
<script>
//     function runtest()
//     {
//     var jqxhr = $.get( "{{route("sini")}}", function() {
//   alert( "success" );
// })
//   .done(function() {
//     alert( "second success" );
//   })
//   .fail(function() {
//     alert( "error" );
//   })
//   .always(function() {
//     alert( "finished" );
//   });
//     }

    function runtest() {
            let db = document.getElementById("db").value;
            $.get('{{ route('sini') }}', {
                'db': db
            }, function(response) {
                alert(response);
                // $.each($.parseJSON(response), function(key, value) {
                    // $("#itemno").html(value.itemno);
                    // $("#desc").html(value.itemdescription);
                    // $("#qty").html(value.quantity);
                // });
            });
        }
</script>
@endsection
