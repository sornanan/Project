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

    function insert($date,  $date_quatation,$id_customer,$id_user){
        $sql = "insert into sell_order (date,date_quatation,id_customer,id_user) 
                values ('{$date}','{$date_quatation}',{$id_customer},{$id_user})";
                
        DB::insert($sql, []);
    }

    function update($date,  $date_quatation,$id_customer,$id_user,$id_sell){
        $sql = "update sell_order set 
                date                 = '{$date}',
                date_quatation       = '{$date_quatation}',
                id_customer          = {$id_customer},
                id_user              = {$id_user}
                where id_sell        = {$id_sell}";
        DB::update($sql, []);
    }

    function delete($id_sell){
        $sql = "delete from sell_order where id_sell = {$id_sell}";
        DB::delete($sql, []);
    }
    function show(){
        $sql = "select id_sell,date,date_quatation,customer.id_customer,customer.name_customer,users.id,users.name
                from sell_order
                inner join customer on sell_order.id_customer=customer.id_customer
                inner join users on sell_order.id_user=users.id
                order by id_sell";
                return DB::select($sql ,[]);
    }
  
}
