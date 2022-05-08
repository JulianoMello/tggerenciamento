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
    <h2 class="content-heading">Chart.js</h2>
    <div class="row">

        <div class="col-xl-6">
            <!-- Bars Chart -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Bars</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3">
                        <!-- Bars Chart Container -->
                        <canvas class="js-chartjs-bars"></canvas>
                    </div>
                </div>
            </div>
            <!-- END Bars Chart -->
        </div>
    </div>
    <!-- END Chart.js Charts -->
@stop
@section('js')
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/plugins/chart.js/chart.min.js"></script>
<script>
</script>
<script>One.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);</script>
@stop
