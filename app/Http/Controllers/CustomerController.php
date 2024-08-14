<?php

namespace App\Http\Controllers;
use App\Models\Address;
use App\Models\Customer;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Group;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $customers = Customer::with('phone','address','group')->get();
       //return view('customers', compact('customers'));

       return Response()->json($customers);
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

       // return redirect('customers');


       return Response()->json($customers);









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






        $customer = Customer::with('phone','address','group')->findOrFail($id);


        return Response()->json($customer);







        // $customer = Customer::findOrFail($id);

        // $customer = Customer::with('phone','address','group')->get();



      // return view('showCustomer',compact('customer'));
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


        return Response()->json($customer);














       // return redirect('customers');


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

        return response()->json(['message' => 'Customer Deleted successfully'], 201);








       // return redirect('customers');
    }









    public function storePhone(Request $request, $customerId)
    {

        $customer = Customer::findOrFail($customerId);

        $phone = new Phone();
        $phone->customer_id = $customerId;
        $phone->phone = $request->phone;
        $phone->save();



       return response()->json(['message' => 'Phone number stored successfully'], 201);

    }



    public function storeAddress(Request $request, $customerId)
    {

        $customer = Customer::findOrFail($customerId);

        $address = new Address();
        $address->customer_id = $customerId;
        $address->address = $request->address;
        $address->save();



      //return Response()->json($phone)->with('success', 'Phone number added successfully.');
      return response()->json(['message' => 'address   stored successfully'], 201);

    }



    public function storeGroup(Request $request, $customerId)
    {

        $customer = Customer::findOrFail($customerId);

        $group = new Group();
        $group->customer_id = $customerId;
        $group->groups = $request->groups;
        $group->save();



       return response()->json(['message' => '  group stored successfully'], 201);

    }











}
