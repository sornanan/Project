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
    function insert($id_product,$amount_m,$balance){
        $sql = "insert into movement (id_product,amount_m, balance) 
                values ({$id_product} ,'{$amount_m}', '{$balance}')";
        DB::insert($sql, []);
    }

    function update($id_product,$amount_m,$balance,$id_move){
        $sql = "update movement set 
                id_product = {$id_product},
                amount_m = '{$amount_m}',  
                balance = '{$balance}'
                where id_move = {$id_move}";
        DB::update($sql, []);
    }

    function delete($id_move){
        $sql = "delete from movement where id_move = {$id_move}";
        DB::delete($sql, []);
    }
    function product(){
        $sql = "select id_move,movement.id_product,product,date,amount_m,balance
                from movement
                inner join product ON movement.id_product=product.id_product";
                return DB::select($sql, []);
    }
    function mdetail($id){
        $sql = "select movement.id_move,
        movement.id_product,
        product.product,
        movement.date,
        movement.amount_m,
        movement.balance,
        product.id_product
        from movement
        left join product on movement.id_product = product.id_product
        where movement.id_product = {$id} ";
        return DB::select($sql, []);
    }
}
