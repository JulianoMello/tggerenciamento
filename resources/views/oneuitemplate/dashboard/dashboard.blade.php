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
    <div class="row">
      <div class="col-xl-8 col-xxl-9 d-flex flex-column">
        <div class="block block-rounded flex-grow-1 d-flex flex-column">
          <div class="block-header block-header-default">
            <h3 class="block-title">Earnings Summary</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </div>
          </div>
          <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
            <canvas id="js-chartjs-bars"></canvas>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-xxl-3 d-flex flex-column">
        <div class="row items-push flex-grow-1">
          <div class="col-md-6 col-xl-12">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">R$ 570,00</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Saídas</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <canvas id="js-chartjs-saidas" style="max-height: 180px !important;"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-12">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">R$ 5,234.21</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Entradas</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <canvas id="js-chartjs-entradas" style="max-height: 180px !important;"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">R$ 4,664.21</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Resultados</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <canvas id="js-chartjs-resultados" style="max-height: 180px !important;"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

<script>
  const myChartAreaSaida = new Chart(
    document.getElementById('js-chartjs-saidas'), {
      type: 'doughnut',
      data:{
        datasets: [{
            data: [120, 200, 300],
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40"]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Educação',
            'Casa',
            'Alimentação'
        ]
    },
  });
</script>  

<script>
  const myChartAreaEntrada = new Chart(
    document.getElementById('js-chartjs-entradas'), {
      type: 'doughnut',
      data:{
        datasets: [{
            data: [120, 200, 300],
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40"]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Trabalho',
            'Freelancers',
            'Investimentos'
        ]
    },
  });
</script>  
<script>
  const myChartAreaResultado = new Chart(
    document.getElementById('js-chartjs-resultados'), {
      type: 'doughnut',
      data:{
        datasets: [{
            data: [120, 200],
            backgroundColor: ["#0074D9", "#FF4136"]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Dinheiro',
            'Contas Bancarias',
        ]
    },
  });
</script>  
@stop
