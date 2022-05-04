<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Account;
use App\Models\TypeAccount;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::with('bank')->where('user_id', auth()->user()->id)->get();
        return view('oneuitemplate.accounts.index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        $typeAccounts = TypeAccount::all();
        return view('oneuitemplate.accounts.create', ['banks' => $banks, 'typeAccounts' => $typeAccounts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new Account([
            'name' => $request->name,
            'bank_id' => $request->bank_id,
            'type_account_id' => $request->type_account_id,
            'user_id' => auth()->user()->id
        ]);
        $account->save();

        return redirect(route('account.create'))->with('success', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        $banks = Bank::all();
        $typeAccounts = TypeAccount::all();
        return view('oneuitemplate.accounts.edit', ['banks' => $banks, 'typeAccounts' => $typeAccounts, 'account' => $account]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        $account->name = $request->name;
        $account->bank_id = $request->bank_id;
        $account->type_account_id = $request->type_account_id;
        $account->save();
        return redirect(route('account.index'))->with('success', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $account->delete();
        return redirect(route('account.index'))->with('delete', 'delete');
    }
}
