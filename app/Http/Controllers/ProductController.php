<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;
use App\MovementModel;
class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        $model = new ProductModel();

        $q = $request->input('q');
        $table_product = $model->balance();

        $data = ['table_product'=>$table_product,
        'q'=>$q];
        return view('product/index',$data);
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

        $model = new MovementModel();
        $table_movement = $model->mdetail($id);
        $data = [
            'table_product' => $table_product,
            'table_movement'=>$table_movement
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
