<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\SalesOrder;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function index()
    {
        $salesOrder = SalesOrder::leftJoin('bank', function ($join) {
            $join->on('bank.id_bank', '=', 'bank_accounts.bank_id');
        })->get();        
        return view('bank_account.index', compact('salesOrder'));
    }

    public function create()
    {
        return view('bank_account.create');
    }

    public function store(Request $request)
    {
        

        SalesOrder::create($request->all());

        return redirect()->route('bank_account.index')->with('success', 'Bank account created successfully.');
    }

    public function show(SalesOrder $bankAccount)
    {
        return view('bank_account.show', compact('bankAccount'));
    }

    public function edit(SalesOrder $bankAccount)
    {
        return view('bank_account.edit', compact('bankAccount'));
    }

    public function update(Request $request, SalesOrder $bankAccount)
    {
        

        $bankAccount->update($request->all());

        return redirect()->route('bank_account.index')->with('success', 'Bank account updated successfully.');
    }

    public function destroy(SalesOrder $bankAccount)
    {
        $bankAccount->delete();

        return redirect()->route('bank_account.index')->with('success', 'Bank account deleted successfully.');
    }
}
