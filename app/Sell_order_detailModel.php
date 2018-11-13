<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Sell_order_detailModel 
{
  function select(){
        $sql = "select * from sell_order_detail";
        return DB::select($sql, []);
    }

    function select_id($id_selldetail){
        $sql = "select * from sell_order_detail where id_selldetail = {$id_selldetail}";
        return DB::select($sql, []);
    }

    function select_search($q){
        $sql = "select * from sell_order_detail where id_selldetail like '%{$q}%'";
        return DB::select($sql, []);
    }

    function insert($id_sell,$id_product,$quantity, $price, $amount){
        $sql = "insert into sell_order_detail (id_sell,id_product,quantity, price, amount) 
                values ( {$id_sell},{$id_product},'{$quantity}','{$price}','{$amount}')";
        DB::insert($sql, []);
    }

    function update($id_sell,$id_product,$quantity, $price, $amount,$id_selldetail){
        $sql = "update sell_order_detail set 
                id_sell = {$id_sell},  
                id_product = {$id_product}, 
                quantity = '{$quantity}',
                price = '{$price}',
                amount = '{$amount}'

                where id_selldetail = {$id_selldetail}";
        DB::update($sql, []);
    }

    function delete($id_selldetail){
        $sql = "delete from sell_order_detail where id_selldetail = {$id_selldetail}";
        DB::delete($sql, []);
    }
   function detail($id){
        $sql = "select sell_order_detail.id_sell,sell_order.id_sell,sell_order_detail.id_selldetail,sell_order_detail.id_product,sell_order_detail.quantity,sell_order_detail.price,amount
        from sell_order_detail
        INNER JOIN sell_order ON sell_order_detail.id_sell = sell_order.id_sell
        where sell_order_detail.id_sell = {$id}";
        return DB::select($sql, []);
    }

}