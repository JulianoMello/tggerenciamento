@extends('oneuitemplate.layouts.app')

@section('title', 'Dashboard')

@section('page', 'Dashboard')

@section('sub-page', 'Página Inicial')

@section('link')
    <a class="btn btn-primary px-4 py-2" href="{{ route('account.create') }}">
        <i class="fa fa-plus mr-1"></i> Adicionar Lançamentos
    </a>
@stop

@section('content')
<!-- Page Content -->
<div class="content">
    <!-- Chart.js Charts are initialized in js/pages/be_comp_charts.min.js which was auto compiled from _es6/pages/be_comp_charts.js -->
    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
    <h2 class="content-heading"></h2>
    <div class="row">

        <div class="col-xl-6">
            <!-- Bars Chart -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Entradas, Saídas e Resultados ao longo dos meses (2022)</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3">
                        <!-- Bars Chart Container -->
                        <canvas id="js-chartjs-bars"></canvas>
                    </div>
                </div>
            </div>
            <!-- END Bars Chart -->
        </div>
    </div>
    <!-- END Chart.js Charts -->
@stop
@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const labels = [
    'JANEIRO',
    'FEVEREIRO',
    'MARÇO',
    'ABRIL',
    'JUNHO',
    'JULHO',
    'AGOSTO',
    'SETEMBRO',
    'OUTUBRO',
    'NOVEMBRO',
    'DEZEMBRO'
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'SAÍDAS',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    },
    {
      label: 'ENTRADAS',
      backgroundColor: 'rgb(000, 000, 255)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    },
    {
      label: 'RESULTADO',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }
    ]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
            y: {
                ticks: {
                    // Include a dollar sign in the ticks
                    callback: function(value, index, ticks) {
                        return 'R$ ' + value;
                    }
                }
            },
            
      },
    }
  };
</script>
<script>
  const myChart = new Chart(
    document.getElementById('js-chartjs-bars'),
    config
  );
</script>
@stop
