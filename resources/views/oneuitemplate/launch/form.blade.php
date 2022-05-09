<!-- Form Inline - Default Style -->
<form class="form-inline mb-4" action="" method="POST">
    @csrf
    @if(url()->current() != route('account.store'))
        @method('put')
    @endif
    <label class="sr-only" for="example-if-email">Descrição</label>
    <input type="text" class="form-control mb-2 mr-sm-1 mb-sm-0" name="name" placeholder="Descrição" style="width:190px" value="" required>
    <label class="sr-only" for="example-if-password">Tipo</label>
    <select name="tipo" class="form-control mb-2 mr-sm-1 mb-sm-0" style="width:200px !important;">
        <option value="">Entrada</option>
        <option value="">Saida</option>
    </select>
    <label class="sr-only" for="example-if-password">Carteira</label>
    <select name="tipo" class="form-control mb-2 mr-sm-1 mb-sm-0" style="width:200px !important;">
        <option value="">Banco do Brasil</option>
        <option value="">Nu Pagamentos</option>
        <option value="">Dinheiro</option>
    </select>
    <label class="sr-only" for="example-if-password">Categoria</label>
    <select name="tipo" class="form-control mb-2 mr-sm-1 mb-sm-0" style="width:200px !important;">
        <option value="">Academia</option>
        <option value="">Escola</option>
        <option value="">Trabalho</option>
    </select>
    <label class="sr-only" for="example-if-email">Valor</label>
    <input type="text" class="form-control mb-2 mr-sm-1 mb-sm-0" name="name" placeholder="Valor de lançamento" style="width:190px" value="" required>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
<!-- END Form Inline - Default Style -->
