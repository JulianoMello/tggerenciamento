@extends('oneuitemplate.layouts.app')

@section('title', 'Lançamentos')

@section('page', 'Lançamentos')

@section('sub-page', 'Lista de Lançamentos')


@section('link')
    <a class="btn btn-primary px-4 py-2" href="{{ route('launch.create') }}">
        <i class="fa fa-plus mr-1"></i> Fazer Lançamento
    </a>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p class="mb-0">Lançamento feito com sucesso!</p>
        </div>
    @endif
    @if(session('delete'))
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p class="mb-0">Exclusão de lançamento com sucesso!</p>
        </div>
    @endif
    <div class="row row-deck">
        <!-- Latest Customers -->
        <div class="col-lg-4">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content flex-grow-1 d-flex justify-content-between">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">R$ 1,200.25</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">Saidas</dd>
                  </dl>
                </div>
              </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content flex-grow-1 d-flex justify-content-between">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">R$ 5,000.00</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">Entradas</dd>
                  </dl>
                </div>
              </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content flex-grow-1 d-flex justify-content-between">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">R$ 3,999.75</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">Resultados</dd>
                  </dl>
                </div>
              </div>
        </div>

        <!-- Latest Customers -->
        <div class="col-lg-12">
            <div class="block block-mode-loading-oneui">
                <div class="block-header border-bottom">
                    <h3 class="block-title">Seus lançamentos</h3>
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
                                <th class="font-w700" style="width: 170px;">Descrição</th>
                                <th class="font-w700 text-center" style="width: 118px;">Tipo</th>
                                <th class="font-w700"style="width: 200px">Carteira</th>
                                <th class="font-w700 text-center" style="width: 150px">Categoria</th>
                                <th class="font-w700 text-center"style="width: 150px">Valor</th>
                                <th class="font-w700 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Academia ProFit</td>
                                <td><span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-danger">Saida</span></td>
                                <td>Dinheiro</td>
                                <td>Academia</td>
                                <td>80,00</td>
                                <td class="text-center">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt" style="width: 30px"></i>
                                    </a>
                                    <a href="" data-toggle="tooltip" data-placement="right" title="Remove" onclick="return confirm('Tem certeza que deseja excluir?')">
                                        <i class="fa fa-fw fa-trash-alt"  style="width: 30px"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mercado</td>
                                <td><span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-danger">Saida</span></td>
                                <td>Conta Poupança Banco do brasil</td>
                                <td>Mercado</td>
                                <td>1120,25</td>
                                <td class="text-center">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt" style="width: 30px"></i>
                                    </a>
                                    <a href="" data-toggle="tooltip" data-placement="right" title="Remove" onclick="return confirm('Tem certeza que deseja excluir?')">
                                        <i class="fa fa-fw fa-trash-alt"  style="width: 30px"></i>
                                    </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>Resgate investimento</td>
                                <td><span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Entrada</span></td>
                                <td>Conta Poupança Banco do brasil</td>
                                <td>Investimento</td>
                                <td>2000,00</td>
                                <td class="text-center">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt" style="width: 30px"></i>
                                    </a>
                                    <a href="" data-toggle="tooltip" data-placement="right" title="Remove" onclick="return confirm('Tem certeza que deseja excluir?')">
                                        <i class="fa fa-fw fa-trash-alt"  style="width: 30px"></i>
                                    </a>
                                </td>
                            </tr> 
                            <tr>
                                <td>Salário</td>
                                <td><span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Entrada</span></td>
                                <td>Conta Poupança Banco do brasil</td>
                                <td>Investimento</td>
                                <td>3000,00</td>
                                <td class="text-center">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt" style="width: 30px"></i>
                                    </a>
                                    <a href="" data-toggle="tooltip" data-placement="right" title="Remove" onclick="return confirm('Tem certeza que deseja excluir?')">
                                        <i class="fa fa-fw fa-trash-alt"  style="width: 30px"></i>
                                    </a>
                                </td>
                            </tr>     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop

