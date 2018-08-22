<?php

namespace App\Http\Controllers;

use App\MovementModel;
use Illuminate\Http\Request;

class MovementController extends Controller
{
   
    public function index(Request $request)
    {
       $model = new MovementModel();

        $q = $request->input('q');
        $table_movement = $model->select_search($q);

        $data = [
            'table_movement' => $table_movement,
            'q' => $q
        ];
        return view('movement/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movement/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $inproduct = $request->input('inproduct');
        $outproduct = $request->input('outproduct');
        $receive = $request->input('receive');
        $send = $request->input('send');

        $model = new MovementModel();
        $model->insert($inproduct, $outproduct, $receive, $send);

        return redirect('/movement');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $model = new MovementModel();
        $table_movement = $model->select_id($id);
        $data = [
            'table_movement' => $table_movement
        ];
        return view('movement/show',$data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $model = new MovementModel();
        $table_movement = $model->select_id($id);
        $data = [
            'table_movement' => $table_movement
        ];
        return view('movement/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_move)
    {
         $inproduct = $request->input('inproduct');
        $outproduct = $request->input('outproduct');
        $receive = $request->input('receive');
        $send = $request->input('send');

        $model = new MovementModel();
        $model->update($inproduct, $outproduct, $receive, $send,$id_move);

        return redirect('/movement');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_customer)
    {
        $model = new CustomerModel();
        $model->delete($id_customer);

        return redirect('/customer');
     }

}
