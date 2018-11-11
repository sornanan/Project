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
    function insert($id_product,$inproduct, $outproduct,$balance){
        $sql = "insert into movement (id_product,inproduct, outproduct, balance) 
                values ({$id_product} ,'{$inproduct}', '{$outproduct}', '{$balance}')";
        DB::insert($sql, []);
    }

    function update($id_product,$inproduct,$outproduct,$balance,$id_move){
        $sql = "update movement set 
                id_product = {$id_product},
                inproduct = '{$inproduct}',  
                outproduct = '{$outproduct}',
                balance = '{$balance}'
                where id_move = {$id_move}";
        DB::update($sql, []);
    }

    function delete($id_move){
        $sql = "delete from movement where id_move = {$id_move}";
        DB::delete($sql, []);
    }
    function product($pro){
        $sql = "select id_move,movement.id_product,product,date,inproduct,outproduct,balance
                from movement
                inner join product ON movement.id_product=product.id_product";
                return DB::select($sql, []);
    }
}
