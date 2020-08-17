<?php

namespace App\Http\Controllers;

use App\Financeprogram;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function paymentsView(){
        return view('finance.payments');
    }

    public function paymentSuccessfulView(){
        return view('finance.payment_successful');
    }

    public function paymentPendingView(){
        return view('finance.payment_pending');
    }

    public function paymentFailedView(){
        return view('finance.payment_failed');
    }

    public function programs(){
        $programs = Financeprogram::all();
        return view('finance.program')->with(compact('programs'));
    }

    public function financeProgram(Request $request){
        $values = array();
        parse_str($request->get('data'), $values);
        Financeprogram::create($values);
        return [
          'success' => true
        ];
    }

    public function viewFinanceProgram($id){
        $program = Financeprogram::where('id',$id)->first();
        return view('finance.viewProgram')->with(compact('program'));
    }

    public function deleteFinanceProgram($id){
        Financeprogram::destroy($id);
        return redirect('/finance/programs');
    }
}
