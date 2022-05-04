<!-- Form Inline - Default Style -->
<form class="form-inline mb-4" action="{{ url()->current() == route('account.store') ? route('account.store') : route('account.update', ['account' => $account->id]) }}" method="POST">
    @csrf
    @if(url()->current() != route('account.store'))
        @method('put')
    @endif
    <label class="sr-only" for="example-if-email">Título da Carteira</label>
    <input type="text" class="form-control mb-2 mr-sm-1 mb-sm-0" name="name" placeholder="Título da Carteira" style="width:190px" value="{{ $account->name ?? '' }}" required>
    <label class="sr-only" for="example-if-password">Banco</label>
    <select name="bank_id" class="form-control mb-2 mr-sm-1 mb-sm-0" style="width:200px !important;">
        @forelse($banks as $bank)
            <option value="{{ $bank->id }}" {{ isset($account->bank->id) && $account->bank->id == $bank->id ? 'selected' : '' }}>{{ $bank->name }}</option>
        @empty
            <option value="">Sem Informações</option>
        @endforelse
    </select>
    <label class="sr-only" for="example-if-password">Tipo de Conta</label>
    <select name="type_account_id" class="form-control mb-2 mr-sm-1 mb-sm-0" style="width:190px !important;">
        @forelse($typeAccounts as $typeAccount)
            <option value="{{ $typeAccount->id }}" {{ isset($account->typeAccount->id) && $account->typeAccount->id == $typeAccount->id ? 'selected' : '' }}>{{ $typeAccount->name }}</option>
        @empty
            <option value="">Sem Informações</option>
        @endforelse
    </select>
    <button type="submit" class="btn btn-primary">ADD</button>
</form>
<!-- END Form Inline - Default Style -->
