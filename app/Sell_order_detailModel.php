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

    function insert($quantity, $price, $amount){
        $sql = "insert into sell_order_detail (quantity, price, amount) 
                values ( '{$quantity}', '{$price}', '{$amount}')";
        DB::insert($sql, []);
    }

    function update($name_customer, $address, $email,$telephone, $id_customer){
        $sql = "update sell_order_detail set 
                name_customer = '{$name_customer}',  
                address =  '{$address}', email = '{$email}',
                telephone = {$telephone}
                where id_customer = {$id_customer}";
        DB::update($sql, []);
    }

    function delete($id_customer){
        $sql = "delete from sell_order_detail where id_customer = {$id_customer}";
        DB::delete($sql, []);
    }

}