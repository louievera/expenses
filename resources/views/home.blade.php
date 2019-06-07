@extends('layouts.app')
@include('includes.sidebar')

@section('content')

<div class="container">
    <div id="canvas-holder" style="width:60%; margin:auto; ">
        <canvas id="chart-area"></canvas>
    </div>
</div>
@endsection



<link rel="stylesheet" type="text/css" href="https://www.chartjs.org/samples/latest/style.css">
    <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 

<script>
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [
                        @foreach($expenses as $expense)
                            {{$expense->amount}} ,
                        @endforeach
                    ],
                    backgroundColor: [
                        window.chartColors.blue,
                        window.chartColors.grey,
                        window.chartColors.red,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    @foreach($expenses as $expense)
                            "{{$expense->category_name}}" ,
                        @endforeach   
                ]
            },
            options: {
                responsive: true
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myPie = new Chart(ctx, config);
        };

       

       

    </script>