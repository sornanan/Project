<?php

namespace App\Http\Controllers;

use App\MovementModel;
use Illuminate\Http\Request;
use App\ProductModel;

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
     * @return \Illuminate\Http\/(
          */
         public function create()
         {
            $model = new ProductModel();
            $table_product2 = $model->select();
            $data = ['table_product2' =>$table_product2];

             return view('movement/create',$data);
         }
     
         /**
          * Store a newly created resource in storage.
          *
          * @param  \Illuminate\Http\Request  $request
          * @return \Illuminate\Http\Response
          */
         public function store(Request $request)
    {   
        $id_product = $request->input('id_product');
        $inproduct = $request->input('inproduct');
        $outproduct = $request->input('outproduct');
        $balance = 0;
        $model = new MovementModel();
        $model->insert($id_product,$inproduct, $outproduct,$balance);

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
        //
        $model = new MovementModel();
        $table_movement = $model->select_id($id);
        $data = [
            'table_movement' => $table_movement
        ];
        //product
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
        //movement
        $model = new MovementModel();
        $table_movement = $model->select_id($id);
        //product
        $model = new ProductModel();
        $table_product2 = $model->select();            

        //data
        $data = [
            'table_movement' => $table_movement,
            'table_product2' => $table_product2,
            'id'=> $id
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
         
        $id_product = $request->input('id_product');
        $inproduct = $request->input('inproduct');
        $outproduct = $request->input('outproduct');
        $balance = 0;


        $model = new MovementModel();
        $model->update($id_product,$inproduct, $outproduct, $balance,$id_move);

        return redirect('/movement');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_move)
    {
        $model = new MovementModel();
        $model->delete($id_move);

        return redirect('/movement');
     }

}
