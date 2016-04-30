<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        //$customers = Customer::all(); 
        //$customers = Customer::orderBy('id','desc')->limit(2)->get(); 
        //$customers = Customer::where('firstname','like','พ%')->get();
        //$customers = Customer::simplePaginate(20);
        $customers = Customer::paginate(20);
        
        $count = Customer::count(); 
        return view('customer.index', [
            'customers'=>$customers,
            'count'=>$count,
         ]);
    }
    
    public function show($id){
        $customers = Customer::find($id); 
        return view('customer.show', ['customers'=>$customers]);
    }
    
    public function insert(){
       /* $customer = new Customer();
        $customer->firstname = 'พุทธิพัทธ์';
        $customer->lastname = 'มีอ่วม';
        $customer->save();*/
        
        $customer = new Customer(); 
        $data = [
            'firstname' => 'John',
            'lastname' => 'Wick',
        ];
        $customer->create($data);
        
        return 'บันทึกเรียบร้อย';
    }
    
    public function delete($id){
        //Customer::find($id)->delete();
        Customer::destroy($id);
        return redirect()->action('CustomerController@index');
    }
}
