<?php

namespace App;

use Illuminate\Support\Facades\DB;

class MovementModel 
{
      function select(){
        $sql = "select * from movement";
        return DB::select($sql, []);
    }

    function select_id($id_move){
        $sql = "select * from movement where id_move = {$id_move}";
        return DB::select($sql, []);
    }

    function select_search($q){
        $sql = "select * from movement where id_move like '%{$q}%'";
        return DB::select($sql, []);
    }
    function insert($id_product,$inproduct, $outproduct,$receive,$send,$balance){
        $sql = "insert into movement (id_product,inproduct, outproduct, receive,send,balance) 
                values ({$id_product} ,{$inproduct}, {$outproduct}, {$receive},{$send},{$balance})";
        DB::insert($sql, []);
    }

    function update($id_product,$inproduct,$outproduct,$receive,$send,$id_move){
        $sql = "update movement set 
                id_product = {$id_product},
                inproduct = {$inproduct},  
                outproduct =  {$outproduct},
                 receive =  {$receive},
                send = {$send},
                where id_move = {$id_move}";
        DB::update($sql, []);
    }

    function delete($id){
        $sql = "delete from movement where id_move = {$id_move}";
        DB::delete($sql, []);
    }

}
