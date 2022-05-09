@extends('oneuitemplate.layouts.app')

@section('title', 'Editar lançamentos')

@section('page', 'Lançamentos')

@section('sub-page', 'Editar contas')

@section('link')

@stop

@section('content')
    <div class="content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="mb-0">Edição de lançamento com sucesso!</p>
            </div>
        @endif

        <!-- Inline -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Edite seu lancamento aqui aqui</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-3">
                        <p class="font-size-sm text-muted">
                            Coloque um novo título para sua conta e escolha a carteira
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
