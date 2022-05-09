@extends('oneuitemplate.layouts.app')

@section('title', 'Relatório de lancamentos')

@section('page', 'Relatório')

@section('sub-page', 'Relatório de lancamentos')


@section('link')

@stop

@section('content')
<div class="row row-deck">
    <!-- Latest Customers -->
    <div class="col-lg-12">
        <div class="block block-mode-loading-oneui">
            <div class="block-header border-bottom">
                <h3 class="block-title">Relatório de lançamentos</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-lg-2">
                            <select name="" id="" class="form-control">
                                <option value="">Todos</option>
                                <option value="">Entrada</option>
                                <option value="">Saida</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <input type="date" class="form-control" placeholder="Data inicial" style="width: 200px;">
                        </div>
                        <div class="col-lg-3">
                            <input type="date" class="form-control" placeholder="Data Final" style="width: 200px;">
                        </div>
                        <div class="col-lg-2">
                            <select name="" id="" class="form-control" style="width: 150px;">
                                <option value="">Exportar PDF</option>
                                <option value="">Exportar Excel</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-info">Exportar</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
@stop

