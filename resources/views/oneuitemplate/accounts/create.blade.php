@extends('oneuitemplate.layouts.app')

@section('title', 'Adicionar Contas')

@section('page', 'Contas')

@section('sub-page', 'Adicionar contas')

@section('link')

@stop

@section('content')
    <div class="content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="mb-0">Cadastro de Carteira feito com sucesso!</p>
            </div>
        @endif

        <!-- Inline -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Adicione suas carteiras aqui</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-3">
                        <p class="font-size-sm text-muted">
                            Coloque um título para sua conta e escolha a carteira
                        </p>
                    </div>
                    <div class="col-lg-9">
                        @include('oneuitemplate.accounts.form')
                    </div>
                </div>
            </div>
        </div>
        <!-- END Inline -->
    </div>
@stop
