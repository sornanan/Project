<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        $model = new ProductModel();

        $q = $request->input('q');
        $table_product = $model->select($q);

        $data = ['table_product'=>$table_product,
        'q'=>$q];
        return view('product/index',$data);
    }
    public function join(){
        $sell_order = DB::table('sell_order')
            ->join('customer', 'sell_order.id_sell', '=', 'customer.id_customer')
            ->join('users', 'sell_order.id_sell', '=', 'users.id')
            ->select('id_sell', 'Customer.name_customer','Users.name' )
            ->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = $request->input('product');

        $model = new ProductModel();
        $model->insert($product);
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $model = new ProductModel();
        $table_product = $model->select_id($id);
        $data = [
            'table_product' => $table_product
        ];
        return view('product/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new ProductModel();
        $table_product = $model->select_id($id);
        $data = [
            'table_product' => $table_product
        ];
        return view('product/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
        $product = $request->input('product');
       

        $model = new ProductModel();
        $model->update($product, $id_product);

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product)
    {
          $model = new ProductModel();
        $model->delete($id_product);

        return redirect('/product');    }
}
