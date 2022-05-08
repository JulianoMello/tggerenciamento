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
    /*!
 * OneUI - v4.0.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2018
 */
!function(e){var r={};function t(a){if(r[a])return r[a].exports;var o=r[a]={i:a,l:!1,exports:{}};return e[a].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=r,t.d=function(e,r,a){t.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:a})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,r){if(1&r&&(e=t(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(t.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var o in e)t.d(a,o,function(r){return e[r]}.bind(null,o));return a},t.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(r,"a",r),r},t.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},t.p="",t(t.s=2)}([,,function(e,r,t){e.exports=t(3)},function(e,r){function t(e,r){for(var t=0;t<r.length;t++){var a=r[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}var a=function(){function e(){!function(e,r){if(!(e instanceof r))throw new TypeError("Cannot call a class as a function")}(this,e)}return function(e,r,a){r&&t(e.prototype,r),a&&t(e,a)}(e,null,[{key:"initChartsChartJS",value:function(){Chart.defaults.global.defaultFontColor="#999",Chart.defaults.global.defaultFontStyle="600",Chart.defaults.scale.gridLines.color="rgba(0,0,0,.05)",Chart.defaults.scale.gridLines.zeroLineColor="rgba(0,0,0,.1)",Chart.defaults.scale.ticks.beginAtZero=!0,Chart.defaults.global.elements.line.borderWidth=2,Chart.defaults.global.elements.point.radius=4,Chart.defaults.global.elements.point.hoverRadius=6,Chart.defaults.global.tooltips.cornerRadius=3,Chart.defaults.global.legend.labels.boxWidth=15;var e,r,t=jQuery(".js-chartjs-lines"),a=jQuery(".js-chartjs-bars"),o=jQuery(".js-chartjs-radar"),n=jQuery(".js-chartjs-polar"),l=jQuery(".js-chartjs-pie"),i=jQuery(".js-chartjs-donut");e={labels:["MON","TUE","WED","THU","FRI","SAT","SUN"],datasets:[{label:"This Week",fill:!0,backgroundColor:"rgba(220,220,220,.3)",borderColor:"rgba(220,220,220,1)",pointBackgroundColor:"rgba(220,220,220,1)",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"rgba(220,220,220,1)",data:[30,32,40,45,43,38,55]},{label:"Last Week",fill:!0,backgroundColor:"rgba(171, 227, 125, .3)",borderColor:"rgba(171, 227, 125, 1)",pointBackgroundColor:"rgba(171, 227, 125, 1)",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"rgba(171, 227, 125, 1)",data:[15,16,20,25,23,25,32]}]},r={labels:["Earnings","Sales","Tickets"],datasets:[{data:[48,26,26],backgroundColor:["rgba(171, 227, 125, 1)","rgba(250, 219, 125, 1)","rgba(117, 176, 235, 1)"],hoverBackgroundColor:["rgba(171, 227, 125, .75)","rgba(250, 219, 125, .75)","rgba(117, 176, 235, .75)"]}]},t.length&&new Chart(t,{type:"line",data:e}),a.length&&new Chart(a,{type:"bar",data:e}),o.length&&new Chart(o,{type:"radar",data:e}),n.length&&new Chart(n,{type:"polarArea",data:r}),l.length&&new Chart(l,{type:"pie",data:r}),i.length&&new Chart(i,{type:"doughnut",data:r})}},{key:"initRandomEasyPieChart",value:function(){jQuery(".js-pie-randomize").on("click",function(e){jQuery(e.currentTarget).parents(".block").find(".pie-chart").each(function(e,r){return jQuery(r).data("easyPieChart").update(Math.floor(100*Math.random()+1))})})}},{key:"init",value:function(){this.initChartsChartJS(),this.initRandomEasyPieChart()}}]),e}();jQuery(function(){a.init()})}]);
</script>
<script>One.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);</script>
@stop
