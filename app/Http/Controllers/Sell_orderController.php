<?php

namespace App\Http\Controllers;

use App\Sell_orderModel;
use Illuminate\Http\Request;

class Sell_orderController extends Controller
{
    
    public function index(Request $request)
    {
       $model = new Sell_orderModel();

        $q = $request->input('q');
        $table_sell_order = $model->select_search($q);

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
        return view('sell_order/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sell_order = $request->input('sell_order');
        $model = new Sell_orderModel();
        $model ->insert($sell_order);
        return redirect('/sell_order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function show(Sell_orderModel $sell_orderModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell_orderModel $sell_orderModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell_orderModel $sell_orderModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sell_orderModel  $sell_orderModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell_orderModel $sell_orderModel)
    {
        //
    }
}
