<?php

namespace App\Http\Controllers;

use App\Purchase_order_detailModel;
use Illuminate\Http\Request;
use App\Purchase_orderModel;
use App\ProductModel;
class Purchase_order_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new Purchase_order_detailModel();
        $q = $request->input('q');
        $table_purchase_order_detail = $model->select_search($q);

        $data = ['table_purchase_order_detail'=> $table_purchase_order_detail,
        'q'=>$q];
        
        return view('purchase_order_detail/index',$data);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model_per = new Purchase_orderModel();  
        $table_per = $model_per->select();

        $model_pro= new ProductModel();       
        $table_pro = $model_pro->select();


        $data = [
                'table_per' => $table_per,
                'table_pro' =>$table_pro
        ];
        return view('purchase_order_detail/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = $request->input('detail');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $amount = $request->input('amount');
        $id_product = $request->input('id_product');
        $id_order = $request->input('id_order');
        $model = new Purchase_order_detailModel();

        $model->insert($detail,$quantity,$price,$amount,$id_product,$id_order);
        
        return redirect('/purchase_order_detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new Purchase_order_detailModel();
        $table_purchase_order_detail = $model->select_id($id);
        $data = ['table_purchase_order_detail' =>$table_purchase_order_detail];

        return view('purchase_order_detail/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new Purchase_order_detailModel();
        $table_purchase_order_detail = $model->select_id($id);
       
        $model_pro = new ProductModel();  
        $table_pro = $model_pro->select();

        $model_per = new Purchase_orderModel();       
        $table_per = $model_per->select();


        $data = ['table_purchase_order_detail '=>$table_purchase_order_detail,
                 'table_pro' => $table_pro,
                 'table_per' => $table_per,
               
                'id' => $id];
        

        return view('purchase_order_detail/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_orderdetail)
    {
        $detail      = $request->input('detail');
        $quantity    = $request->input('quantity');
        $price       = $request->input('price');
        $amount      = $request->input('amount');
        $model       = new Purchase_order_detailModel();

         $model->update($detail,$quantity,$price,$amount);
        return redirect('/purchase_order_detail');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_orderdetail)
    {
        $model = new Purchase_order_detailModel();
        $model->delete($id_orderdetail);

        return redirect('/purchase_order_detail');
    }
}
