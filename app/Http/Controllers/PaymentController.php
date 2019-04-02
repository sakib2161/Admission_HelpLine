<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Payment;
use response;
use DB;


class PaymentController extends Controller
{
    //

    public function createPayment(){

    	 $customers=Customer::all();
        return view('admin.payment.createPayment',['customers'=>$customers]);
    }

    public function storePayment(Request $req){
    	$payment=new Payment();
    	$payment->customerId=$req->customerId;
    	$payment->date=$req->date;
    	$payment->amount=$req->amount;
    	$payment->description=$req->description;
    	$payment->save();
    	return response()->json([
                'message' => "Your customer payment info  submitted successfully.",
                'class' => 'success',
                ]);

    }

    public function managePayment(){
        $payments=DB::table('payments')
                 ->join('customers','customers.id','=','payments.customerId')
                 ->select('payments.*','customers.customerName','customers.companyName','customers.projectName','customers.initialFee')
                 ->get();
                 return view('admin.payment.managePayment',['payments'=>$payments]);
    }



    public function editPayment($id){
        $customers=Customer::first();
     $paymentById=Payment::where('id',$id)->first();
     return view('admin.payment.editPayment')
               ->with('paymentById',$paymentById)
               ->with('customers',$customers);
               


    }


    public function updatePayment(Request $request){
        $customer=new Customer();
        $customer->projectName=$request->projectName;
        $customer->companyName=$request->companyName;
        $customer->initialFee=$request->initialFee;
        $customer->save();
       $payment=Payment::find($request->id);
        $payment->date=$request->date;
        $payment->amount=$request->amount;
        $payment->description=$request->description;
        $customer->Payment()->save($payment);
 return redirect('/payment/manage')->with('message','Payment info Updated Successfully');


    }

    public function deletePayment($id){

        //return $request->all();
        $payment=Payment::find($id);
        $payment->delete();
        return redirect('/payment/manage')->with('message','Payment info delete Successfully');
    }
}
