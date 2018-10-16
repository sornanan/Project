<?php

namespace App\Http\Controllers;

use App\Re_productModel;
use Illuminate\Http\Request;
use App\CustomerModel;

class Re_productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new Re_productModel();

        $q = $request->input('q');
        $table_re_product = $model->select_search($q);

        $data = [
            'table_re_product' => $table_re_product,
            'q' => $q
        ];
        return view('re_product/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $model = new CustomerModel();
            $table_cus2 = $model->select();
            $data = ['table_cus2' =>$table_cus2];

             return view('re_product/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->input('date');
        $id_customer = $request->input('id_customer');
        
        $model = new Re_productModel();
        $model->insert($date,$id_customer);

        return redirect('/re_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Re_product  $re_product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new Re_productModel();
        $table_re_product = $model->select_id($id);
        $data = ['table_re_product'=>$table_re_product];

        return view('re_product/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Re_product  $re_product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {
                $model = new CustomerModel();
                $table_cus2 = $model->select();

                 $model = new Re_productModel();
                 $table_re_product = $model->select();            

                $data = ['table_cus2'       =>$table_cus2,
                         'table_re_product' =>$table_re_product                   
                     ];
              
                return view('re_product/edit',$data);
     }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Re_product  $re_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_return)
    {
        $date        = $request->input('date');
        $id_customer = $request->input('id_customer');
        
        $model = new Re_productModel();
        $model->update($date,$id_customer,$id_return);

        return redirect('/re_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Re_product  $re_product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_return)
    {
        $model = new Re_productModel();
        $model->delete($id_return);

        return redirect('/re_product');
    }
}
