<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bankinfo;
use Illuminate\Http\Request;
use Session;
class BankinfoController extends Controller
{
    public function BankShow(){

        $showBank = Bankinfo::all();
        return view('backend.bank.view-bank-info', compact('showBank'));

    }
    
    public function BankStore(Request $request)
    {
        $validated = $request->validate([
            'acccount_name' => 'required|max:255',
            'account_no' => 'required',
            'transaction_no' => 'required',
            'transaction_date' => 'required',
            'amount' => 'required',
        ]);

       $bankInfo=new Bankinfo();
       $bankInfo->acccount_name=$request->acccount_name;
       $bankInfo->account_no=$request->account_no;
       $bankInfo->transaction_no=$request->transaction_no;
       $bankInfo->transaction_date=$request->transaction_date;
       $bankInfo->message=$request->message;
       $bankInfo->save();
       Session::flash('success','Bank Information Created successfully');
       return redirect()->back();
    }


}
