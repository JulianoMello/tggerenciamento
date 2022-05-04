@extends('oneuitemplate.layouts.app')

@section('title', 'Contas')

@section('page', 'Contas')

@section('sub-page', 'Listar Contas')

@section('link')
    <a class="btn btn-primary px-4 py-2" href="{{ route('account.create') }}">
        <i class="fa fa-plus mr-1"></i> Adicionar Contas
    </a>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p class="mb-0">Edição de Carteira feito com sucesso!</p>
        </div>
    @endif
    @if(session('delete'))
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p class="mb-0">Exclusão de Carteira feito com sucesso!</p>
        </div>
    @endif
    <div class="row row-deck">

        <!-- Latest Customers -->
        <div class="col-lg-12">
            <div class="block block-mode-loading-oneui">
                <div class="block-header border-bottom">
                    <h3 class="block-title">Suas Contas Bancárias</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                        <thead class="thead-dark">
                            <tr class="text-uppercase">
                                <th class="font-w700" style="width: 170px;">Nome Carteira</th>
                                <th class="font-w700 text-center" style="width: 118px;">CD Banco</th>
                                <th class="font-w700"style="width: 200px">Nome do Banco</th>
                                <th class="font-w700 text-center" style="width: 150px">Tipo de Conta</th>
                                <th class="font-w700 text-center"style="width: 150px">Abreviação</th>
                                <th class="font-w700 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($accounts as $account)
                                <tr>
                                    <td>
                                        <span class="font-w600">{{ $account->name }}</span>
                                    </td>
                                    <td>
                                        <span class="font-w600">{{ $account->bank->code_bank }}</span>
                                    </td>
                                    <td>
                                        <span class="font-w600">{{ $account->bank->name }}</span>
                                    </td>
                                    <td>
                                        <span class="font-w600">{{ $account->typeAccount->name}}</span>
                                    </td>
                                    <td>
                                        <span class="font-w600">{{ $account->bank->abreviation }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('account.edit', ['account' => $account->id]) }}" data-toggle="tooltip" data-placement="left" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt" style="width: 30px"></i>
                                        </a>
                                        <a href="{{ route('account.destroy', ['account' => $account->id]) }}" data-toggle="tooltip" data-placement="right" title="Remove" onclick="return confirm('Tem certeza que deseja excluir?')">
                                            <i class="fa fa-fw fa-trash-alt"  style="width: 30px"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop
