<?php

namespace App\Http\Controllers;

use App\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   

    
   public function index(Request $request)
{
        $model = new CustomerModel();

        $q = $request->input('q');
        $table_customer = $model->select_search($q);

        $data = [
            'table_customer' => $table_customer,
            'q' => $q
        ];
        return view('customer/index',$data);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('customer/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $name_customer = $request->input('name_customer');
        $address = $request->input('address');
        $email = $request->input('email');
        $telephone = $request->input('telephone');

        $model = new CustomerModel();
        $model->insert($name_customer, $address, $email, $telephone);

        return redirect('/customer');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $model = new CustomerModel();
        $table_customer = $model->select_id($id);
        $data = [
            'table_customer' => $table_customer
        ];
        return view('customer/show',$data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $model = new CustomerModel();
        $table_customer = $model->select_id($id);
        $data = [
            'table_customer' => $table_customer
        ];
        return view('customer/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_customer)
    {
         $name_customer = $request->input('name_customer');
        $address = $request->input('address');
        $email = $request->input('email');
        $telephone = $request->input('telephone');

        $model = new CustomerModel();
        $model->update($name_customer, $address, $email, $telephone,$id_customer);

        return redirect('/customer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_customer)
    {
        $model = new CustomerModel();
        $model->delete($id_customer);

        return redirect('/customer');
     }

}
