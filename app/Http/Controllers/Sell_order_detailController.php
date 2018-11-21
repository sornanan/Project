<?php

namespace App\Http\Controllers;

use App\Sell_order_detailModel;
use Illuminate\Http\Request;
use App\ProductModel;
use App\Sell_orderModel;
use App\MovementModel;

class Sell_order_detailController extends Controller
{
    
    public function index(Request $request)
    {
        $model = new Sell_order_detailModel();

        $q = $request->input('q');
    
        $table_sell_order_detail = $model->select_search($q);
        $data = [
            'table_sell_order_detail' => $table_sell_order_detail,
            'q' => $q
        ];
        return view('sell_order_detail/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model_sell = new Sell_orderModel();  
        $table_sell = $model_sell->select();

        $model = new ProductModel();
        $table_product2 = $model->select();

        $data = ['table_sell' =>$table_sell,
                 'table_product2' =>$table_product2
                
        ];
        return view('sell_order_detail/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_sell     = $request->input('id_sell');
        $id_product  = $request->input('id_product');
        $quantity    = $request->input('quantity');
        $price       = $request->input('price');
        $amount      = ($quantity * $price);
        
        $model = new Sell_order_detailModel();
        $model->insert($id_sell,$id_product,$quantity,$price,$amount);

        $amount_m = $request->input('amount_m');
        $id_product = $request->input('id_product');
        $amount_m = +1; 
        $balance =  0;
        $model = new MovementModel();
        $model->insert($id_product,$amount_m,$balance);
        return redirect('/sell_order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new Sell_order_detailModel();
        $table_sell_order_detail = $model->select_id($id);
        $data = ['table_sell_order_detail'=>$table_sell_order_detail];

        return view('sell_order_detail/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $model = new Sell_order_detailModel();
        $table_sell_order_detail = $model->select_id($id);
       
        $model_sell = new Sell_orderModel();  
        $table_sell = $model_sell->select();

        $model = new ProductModel();
        $table_product2 = $model->select();
          
        $data = ['table_sell_order_detail'=>$table_sell_order_detail,
                 'table_sell' =>$table_sell,
                 'table_product2' =>$table_product2];
        

        return view('sell_order_detail/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_selldetail)
    {   
        $id_sell     = $request->input('id_sell');
        $id_product  = $request->input('id_product');
        $quantity    = $request->input('quantity');
        $price       = $request->input('price');
        $amount      = ($quantity * $price);
        
        $model = new Sell_order_detailModel();
        $model->update($id_sell,$id_product,$quantity,$price,$amount,$id_selldetail);

        return redirect('/sell_order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_selldetail)
    {
        $model = new Sell_order_detailModel();
        $model->delete($id_selldetail);

        return redirect('/sell_order');    }
}
