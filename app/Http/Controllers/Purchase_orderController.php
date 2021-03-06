<?php

namespace App\Http\Controllers;

use App\Purchase_orderModel;
use Illuminate\Http\Request;
use App\SupplierModel;
Use App\UserModel;
use App\Purchase_order_detailModel;



class Purchase_orderController extends Controller
{
    
    public function index(Request $request)
    {
        $model = new Purchase_orderModel();
        $q = $request->input('$id_p');
        $table_purchase_order = $model->show();   
        $data = ['table_purchase_order'=>$table_purchase_order,
        'q'=>$q];
        return view('purchase_order/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model_sup = new SupplierModel();  
        $table_sup = $model_sup->select();

        $model_user = new UserModel();       
        $table_user = $model_user->select();


        $data = [
                'table_user' => $table_user,
                'table_sup' =>$table_sup
        ];
        return view('purchase_order/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $id_supplier = $request->input('id_supplier');
        $id_user = $request->input('id_user');
        $model = new Purchase_orderModel();

        $model->insert($id_supplier,$id_user);
        
        return redirect('/purchase_order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase_orderModel  $purchase_orderModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new Purchase_orderModel();
        $table_purchase_order = $model->select_id($id);

        $model = new Purchase_order_detailModel();
        $table_purchase_order_detail = $model->p_detail($id);


        $data = ['table_purchase_order'=>$table_purchase_order,
                 'table_purchase_order_detail'=>$table_purchase_order_detail];


        return view('purchase_order/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase_orderModel  $purchase_orderModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $model = new Purchase_orderModel();
        $table_purchase_order = $model->select_id($id);
       
        $model_sup = new SupplierModel();  
        $table_sup = $model_sup->select();

        $model_user = new UserModel();       
        $table_user = $model_user->select();


        $data = ['table_purchase_order'=>$table_purchase_order,
                 'table_sup' =>$table_sup,
                 'table_user' => $table_user
                 ];
        

        return view('purchase_order/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase_orderModel  $purchase_orderModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_order)
    {

        $id_supplier    = $request->input('id_supplier');
        $id_user        = $request->input('id_user');


        $model = new Purchase_orderModel();
        $model->update($id_supplier,$id_user,$id_order);
        return redirect('/purchase_order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase_orderModel  $purchase_orderModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_order)
    {
        $model = new Purchase_orderModel();
        $model->delete($id_order);

        return redirect('/purchase_order');
    }
}
