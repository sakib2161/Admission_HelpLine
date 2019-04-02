<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class CustomerController extends Controller
{
    //

     public function createCustomer(){
        return view('admin.customer.createCustomer');
    }

  public function storeCustomer(Request $request){

        //return $request->all();
       // $this->validate($request,
       // ['categoryName'=>'required',
        //'categoryDescription'=>'required',
        //'publicationStatus'=>'required'

     //  ]);
        $customer = new Customer();
        $customer->customerName=$request->customerName;
        $customer->customerAddress=$request->customerAddress;
        $customer->customerPhoneNo=$request->customerPhoneNo;
        $customer->birthDate=$request->birthDate;
        $customer->nationality=$request->nationality;
        $customer->companyName=$request->companyName;
        $customer->companyAddress=$request->companyAddress;
        $customer->companyPhoneNo=$request->companyPhoneNo;
        $customer->city=$request->city;
        $customer->country=$request->country;
        $customer->companyEmail=$request->companyEmail;
        $customer->website=$request->website;
        $customer->projectName=$request->projectName;
        $customer->initialFee=$request->initialFee;
        $customer->subscription_fee=$request->subscription_fee;
        $customer->registrationDate=$request->registrationDate;
        $customer->emiDate=$request->emiDate;
     

        $customer->save();
        return redirect('/customer/add')->with('message','Customer Save Successfully');
    }

     public function manageCustomer(){

        //return $request->all();
        $customers=Customer::all();
       
        return view('admin.customer.manageCustomer',['customers'=>$customers]);
    }

    public function editCustomer($id){

        //return $request->all();
        $customerById=Customer::where('id',$id)->first();
       
        return view('admin.customer.editCustomer',['customerById'=>$customerById]);
    }

     public function updateCustomer(Request $request){

    
        $customer=Customer::find($request->id);
       $customer->customerName=$request->customerName;
        $customer->customerAddress=$request->customerAddress;
        $customer->customerPhoneNo=$request->customerPhoneNo;
        $customer->birthDate=$request->birthDate;
        $customer->nationality=$request->nationality;
        $customer->companyName=$request->companyName;
        $customer->companyAddress=$request->companyAddress;
        $customer->companyPhoneNo=$request->companyPhoneNo;
        $customer->city=$request->city;
        $customer->country=$request->country;
        $customer->companyEmail=$request->companyEmail;
        $customer->website=$request->website;
        $customer->projectName=$request->projectName;
        $customer->initialFee=$request->initialFee;
        $customer->subscription_fee=$request->subscription_fee;
        $customer->registrationDate=$request->registrationDate;
        $customer->emiDate=$request->emiDate;
     

        $customer->save();
        return redirect('/customer/manage')->with('message','Customer Updated Successfully');
    }

     public function deleteCustomer($id){

        //return $request->all();
        $customer=Customer::find($id);
        $customer->delete();
        return redirect('/customer/manage')->with('message','Customer delete Successfully');
    }


     public function viewCustomer(){

        //return $request->all();
        $customers=Customer::first();
       
        return view('admin.customer.viewCustomer',['customers'=>$customers]);
    }

    
}
