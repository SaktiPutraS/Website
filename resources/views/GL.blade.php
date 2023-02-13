@extends('layout.main')
@section('head')
@endsection
@section('main_header')
    CEK STOCK
@endsection
@section('content')
<?php

$hostname = "192.168.101.223/3051:F:\\FINA\LG\LG2021.FDB";
$user = "SYSDBA";
$password = "masterkey";

$conn = ibase_connect( $hostname, $user, $password ) or die( 'Error: ' . ibase_errmsg() );

//$Arr_Dados = array();

$query = "SELECT first 1 a.GLHISTID as GL
, a.SEQ
, replace(a.TRANSDATE,'.','/') TRANSDATE

--- Query ambil Modul Transaksi --------------------

, iif (((a.SOURCE = 'AP') and (a.TRANSTYPE = 'INV')), 'Purchase Invoice'
, iif(((a.SOURCE = 'CH') and (a.TRANSTYPE = 'PUR')), 'Cash Purchase'
, iif(((a.SOURCE = 'AP') and (a.TRANSTYPE = 'RCV')), 'Receive Items'
, iif(((a.SOURCE = 'AP') and (a.TRANSTYPE = 'ORD')), 'Purchase Order'
, iif(((a.SOURCE = 'AP') and (a.TRANSTYPE = 'CHQ')), 'Vendor Payment'
, iif(((a.SOURCE = 'AP') and (a.TRANSTYPE = 'RTR')), 'Purchase Return'
, iif(((a.SOURCE = 'AR') and (a.TRANSTYPE = 'INV')), 'Sales Invoice'
, iif(((a.SOURCE = 'CH') and (a.TRANSTYPE = 'SLS')), 'Cash Sales'
, iif(((a.SOURCE = 'AR') and (a.TRANSTYPE = 'DLV')), 'Delivery Order'
, iif(((a.SOURCE = 'AR') and (a.TRANSTYPE = 'ORD')), 'Sales Order'
, iif(((a.SOURCE = 'AR') and (a.TRANSTYPE = 'PMT')), 'Customer Receipt'
, iif(((a.SOURCE = 'AR') and (a.TRANSTYPE = 'RTR')), 'Sales Return'
, iif(((a.SOURCE = 'GL') and (a.TRANSTYPE = 'JV')), 'Journal Voucher'
, iif(((a.SOURCE = 'GL') and (a.TRANSTYPE = 'PMT')), 'Other Payment'
, iif(((a.SOURCE = 'GL') and (a.TRANSTYPE = 'DPT')), 'Other Deposit'
, iif(((a.SOURCE = 'FA') and (a.TRANSTYPE = 'ACQ')), 'FA Acquisition'
, iif(((a.SOURCE = 'FA') and (a.TRANSTYPE = 'DIS')), 'FA Disposed'
, iif(((a.SOURCE = 'IT') and (a.TRANSTYPE = 'ADJ')), 'Inventory Adjustment'
, iif(((a.SOURCE = 'PR') and (a.TRANSTYPE = 'JOB')), 'Job Costing'
, iif(((a.SOURCE = 'PD') and (a.TRANSTYPE = 'MR')), 'Material Release'
, iif(((a.SOURCE = 'PD') and (a.TRANSTYPE = 'RES')), 'Product And Material Result',''))))))))))))))))))))) Transaction_Type

-------------------------------------------------------

,g.SOURCENO

--- Query ambil Type Transaksi --------------------

,iif ( b.ACCOUNTTYPE=7 , 'Cash/Bank'
,iif ( b.ACCOUNTTYPE=8 , 'Account Receivable'
,iif ( b.ACCOUNTTYPE=9 , 'Inventory'
,iif ( b.ACCOUNTTYPE=10 , 'Other Current Asset'
,iif ( b.ACCOUNTTYPE=11 , 'Fixed Asset'
,iif ( b.ACCOUNTTYPE=12 , 'Accumulated Depreciation'
,iif ( b.ACCOUNTTYPE=13 , 'Account Payable'
,iif ( b.ACCOUNTTYPE=14 , 'Other Current Liability'
,iif ( b.ACCOUNTTYPE=15 , 'Long Term Liability'
,iif ( b.ACCOUNTTYPE=16 , 'Equity'
,iif ( b.ACCOUNTTYPE=17 , 'Revenue'
,iif ( b.ACCOUNTTYPE=18 , 'Cost of Goods Sold'
,iif ( b.ACCOUNTTYPE=19 , 'Expense'
,iif ( b.ACCOUNTTYPE=20 , 'Other Expense'
,iif ( b.ACCOUNTTYPE=21 , 'Other Income',''))))))))))))))) Account_Type

-------------------------------------------------------

,a.GLACCOUNT
,b.ACCOUNTNAME
,replace(g.BDEBIT,'.',',') BDEBIT
,replace(g.BCREDIT,'.',',') BCREDIT
,coalesce (X.DEPTNO,'-') DEPTNO
,coalesce (Y.PROJECTNO,'-') PROJECTNO
,coalesce (Y.PROJECTNAME,'-') PROJECTNAME
,replace(replace(a.TRANSDESCRIPTION,'
',' '),'    ',' ') TRANSDESCRIPTION
,replace((coalesce (Y.DESCRIPTION,'-')),'
',' ') despro
, replace((iif (p.PERSONTYPE='0',g.NAME,'-')),'
',' ') Customer
, replace((iif (p.PERSONTYPE='1',g.NAME,'-')),'
',' ') Vendor
,coalesce (g.INVOICENO,'-') No_Invoice
,(select c.COUNTRY from COMPANY c) Db

FROM GLHIST a
INNER JOIN GLACCNT b on b.GLACCOUNT = a.GLACCOUNT
LEFT OUTER JOIN GET_SOURCENO(a.GLHISTID,a.INVOICEID,a.FASSETID,a.TRANSTYPE,a.SOURCE,a.Seq, 1) g on a.GLHISTID=g.GLHISTID
left outer join PERSONDATA p on p.ID = g.PERSONID
left outer join DEPARTMENT X on X.DEPTID=a.DEPTID
left outer join PROJECT Y on Y.PROJECTID=a.PROJECTID

where extract (year from a.TRANSDATE)= '2021'
ORDER BY a.GLACCOUNT, a.TRANSDATE";
// $query = "SELECT * FROM ITEM I inner join
// ITEMBALANCE IB
// ON IB.ITEMNO = I.ITEMNO
// ";
$run_query = ibase_query( $query );

// var_dump($TEST);

?>
<div class="card">
    <div class="card-body">
        <a href="{{route('runres')}}">REPORT GL</a>
        <a href="{{route('ex')}}">RUN EXE</a>
        <table class="table" name="ITEM" id="ITEM">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>GL ID</th>
                    <th>Project No</th>
                    <th>Project Name</th>
                    <th>Customer Name</th>
                    <th>Vendor Name</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $nom=1;
                    while ( $row = ibase_fetch_assoc( $run_query ) )
{
    // $TEST[] = $row;
    // echo $row['USERNAME'];
    echo "<tr>";
        // echo "<td>".$nom++."</td>";
        // echo "<td id='itemno'>".$row['JUMLAH']."</td>";
        // echo "<td id='itemno'>".$row['GL']."</td>";
        // echo "<td id='desc'>".$row['PROJECTNO']."</td>";
        // echo "<td id='qty'>".$row['PROJECTNAME']."</td>";
        // echo "<td>".$row['CUSTOMER']."</td>";
        // echo "<td>".$row['VENDOR']."</td>";
    echo "</tr>";
}
                @endphp

            </tbody>
        </table>
    </div>
</div>
@endsection
@section('javascript')
<script id="dataTables">
    // $(document).ready(function() {
    //     $('#ITEM').DataTable();
    // });
</script>

@endsection
