<?php

namespace App\Http\Controllers;

use App\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    
    public function index(Request $request)
    {
        $model = new SupplierModel();

        $q = $request->input('q');
        $table_supplier = $model->select_search($q);

        $data = [
            'table_supplier' => $table_supplier,
            'q' => $q
        ];
        return view('supplier/index',$data);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name_supplier = $request->input('name_supplier');
        $address = $request->input('address');
        $email = $request->input('email');
        $telephone = $request->input('telephone');

        $model = new SupplierModel();
        $model->insert($name_supplier,$address,$email,$telephone);
        return redirect('/supplier');
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new SupplierModel();
        $table_supplier = $model->select_id($id);
        $data = [
            'table_supplier' => $table_supplier
        ];
        return view('supplier/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new SupplierModel();
        $table_supplier = $model->select_id($id);
        $data = [
            'table_supplier' => $table_supplier
        ];
        return view('supplier/edit',$data);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_supplier)
    {
         $name_supplier = $request->input('name_supplier');
        $address = $request->input('address');
        $email = $request->input('email');
        $telephone = $request->input('telephone');

        $model = new SupplierModel();
        $model->update($name_supplier, $address, $email, $telephone,$id_supplier);

        return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id_supplier)   
     {
        $model = new SupplierModel();
        $model->delete($id_supplier);
        return redirect('/supplier');
            }
}
