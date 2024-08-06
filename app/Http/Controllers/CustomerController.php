<?php

namespace App\Http\Controllers;
use App\Models\Address;
use App\Models\Customer;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $customers = Customer::with('phone','address')->get();
        return view('customers', compact('customers'));

    // $customers=Customer::get();
    //    $phone=Phone::get();
    //    $address=Address::get();


    // $address = DB::table('customers')
    // ->join('addresses', 'customers.id', '=', 'addresses.customer_id')
    // ->select('addresses.address')
    // ->get();


//dd($data);


      return view('customers',compact('customers','address' ,'phone'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

      return view('addCustomer');
  }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $customers=new Customer();
        $customers->fullName =$request->fullName;
        $customers->account_type=$request->account_type;
        $customers->type =$request->type;
        $customers->birthday =$request->birthday;
        $customers->notes =$request->notes;
        $customers->save();

        return redirect('customers');


        // $data=$request->validate([
        //     'fullName'=>'required|string|max:50',
        //     'account_type'=>'required|string',
        //     'type'=>'required|string',
        //     'birthday'=>'required|date',
        //     'notes'=>'required|string',


        //    ]);

        //   Customer::create ($data);

        //    return redirect('customers');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $customer = Customer::findOrFail($id);
       return view('showCustomer',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $customer = Customer::findOrFail($id);
        return view('updateCustomer',
        compact('customer'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {




        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect('customers');


        //      $data=$request->validate([
        //     'fullName'=>'required|string|max:50',
        //     'account_type'=>'required|string',
        //     'type'=>'required|string',
        //     'birthday'=>'required|date',
        //     'notes'=>'required|string',
        //    ]);

        //    Customer::where ('id',$id)->update($data);
     // return 'updated';
      //return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Customer::where ('id',$id) ->delete();
        return redirect('customers');
    }
}
