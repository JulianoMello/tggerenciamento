@extends('oneuitemplate.layouts.app')

@section('title', 'Fazer lancamentos')

@section('page', 'lançamentos')

@section('sub-page', 'Fazer lancamentos')

@section('link')

@stop

@section('content')
    <div class="content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="mb-0">lançamento feito com sucesso!</p>
            </div>
        @endif
        
        
        <!-- Inline -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Adicione seus lançamentos aqui</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-3">
                        <p class="font-size-sm text-muted">
                            Dê uma descrição para seu lançamento e seus devidos valores
                        </p>
                    </div>
                    <div class="col-lg-9">
                        @include('oneuitemplate.launch.form')
                    </div>
                </div>
            </div>
        </div>
        <!-- END Inline -->
    </div>
@stop
