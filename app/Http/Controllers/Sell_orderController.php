<?php

namespace App\Http\Controllers;

use App\Sell_orderModel;
use Illuminate\Http\Request;
use App\CustomerModel;
use App\UserModel;

use App\Sell_order_detailModel;
use App\ProductModel;

class Sell_orderController extends Controller
{
    
    public function index(Request $request)
    {
       $model = new Sell_orderModel();

        $q = $request->input('id_s');
        $table_sell_order = $model->show($q);

        $data = [
            'table_sell_order' => $table_sell_order,
            'q' => $q
        ];
        return view('sell_order/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model_cus = new CustomerModel();  
        $table_cus = $model_cus->select();

    
        $model_user = new UserModel();       
        $table_user = $model_user->select();


        $data = [
                'table_cus' => $table_cus,
                'table_user' =>$table_user
        ];
        return view('sell_order/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request ->input('date');
        $price = $request ->input('price');
        $date_quatation = $request->input('date_quatation');
        $id_customer = $request ->input('id_customer');
        $id_user = $request ->input('id_user');
        $model = new Sell_orderModel();
        
        $model ->insert($date,$price,$date_quatation,$id_customer,$id_user);

        return redirect('/sell_order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new Sell_orderModel();
        $table_sell_order = $model->select_id($id);
        $data = ['table_sell_order' =>$table_sell_order];

        return view('sell_order/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //PART ORDER
        $model = new sell_orderModel();
        $table_sell_order = $model->select_id($id);

        $model_cus = new CustomerModel();  
        $table_cus = $model_cus->select();

    
        $model_user = new UserModel();       
        $table_user = $model_user->select();

        //PART ORDER DETAIL
        $model = new Sell_order_detailModel();
        $table_sell_order_detail = $model->DETAIL($id);

        //DATA
        $data = [
            'table_sell_order'=>$table_sell_order,
            'table_cus' => $table_cus,
            'table_user' =>$table_user,
            'table_sell_order_detail' => $table_sell_order_detail,
   
        ];
        return view('sell_order/edit',$data);
        ///////////

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_sell)
    {
        $date           = $request->input('date');
        $price          = $request->input('price');
        $date_quatation = $request->input('date_quatation');
        $id_customer    = $request->input('id_customer');
        $id_user        = $request->input('id_user');
        $model = new Sell_orderModel();

        $model->update($date,$price,$date_quatation,$id_customer,$id_user,$id_sell);
        return redirect('/sell_order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_sell)
    {
        $model = new Sell_orderModel();
        $model->delete($id_sell);

        return redirect('/sell_order');
    }
}
