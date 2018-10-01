<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Sell_orderModel 
{
    function select(){
        $sql = "select * from sell_order";
        return DB::select($sql, []);
    }

    function select_id($id_sell){
        $sql = "select * from sell_order where id_sell = {$id_sell}";
        return DB::select($sql, []);
    }

    function select_search($q){
        $sql = "select * from sell_order where id_sell like '%{$q}%'";
        return DB::select($sql, []);
    }

    function insert($date, $price, $date_sent, $date_quatation){
        $sql = "insert into sell_order (date,price,date_sent,date_quatation) 
                values ( {date},'{$price}', {$date_sent},{$date_quatation})";
        DB::insert($sql, []);
    }

    function update($name_supplier, $address, $email,$telephone, $id_sell){
        $sql = "update sell_order set 
                name_supplier = '{$name_supplier}',  
                address =  '{$address}', email = '{$email}',
                telephone = {$telephone}
                where id_sell = {$id_sell}";
        DB::update($sql, []);
    }

    function delete($id_sell){
        $sql = "delete from sell_order where id_sell = {$id_sell}";
        DB::delete($sql, []);
    }
}
