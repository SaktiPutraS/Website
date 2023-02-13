@extends('layout.main')
@section('head')
@endsection
@section('main_header')
    CEK STOCK
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        {{-- {{dd($arra)}} --}}
        <div>
            <canvas id="myChart"></canvas>
          </div>
    </div>
</div>
@endsection


@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- Tipe Chart donut --}}
    <script>
        var tmp = {!! json_encode($arra->toArray()) !!};
        const datadonut = {
  labels: [
    tmp[0].ticket_status,
    tmp[1].ticket_status,
    tmp[2].ticket_status
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [
        tmp[0].jumlah,
    tmp[1].jumlah,
    tmp[2].jumlah
    ],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};
        const donat = {
            type: 'doughnut',
            data: datadonut,
            };
    </script>
{{-- Run JS Chart --}}
    <script>
        const myChart = new Chart(
        document.getElementById('myChart'),
        donat
        );
</script>
@endsection
