<?php

namespace App\Http\Controllers;

use App\Sell_order_detailModel;
use Illuminate\Http\Request;

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
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function show(Sell__order_detailModel $sell__order_detailModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell__order_detailModel $sell__order_detailModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell__order_detailModel $sell__order_detailModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sell__order_detailModel  $sell__order_detailModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell__order_detailModel $sell__order_detailModel)
    {
        //
    }
}
