<?php

namespace App\Http\Controllers;

use App\Purchase_order_detailModel;
use Illuminate\Http\Request;

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

        $data = ['table_purchase_order_detail'=>$table_purchase_order_detail,
        'q'=>$q];
        return view('purchase_order_detail/index',$data);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase_order_detailModel $purchase_order_detailModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase_order_detailModel $purchase_order_detailModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase_order_detailModel $purchase_order_detailModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase_order_detailModel  $purchase_order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase_order_detailModel $purchase_order_detailModel)
    {
        //
    }
}
