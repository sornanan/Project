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
    function select_idcustomer($id_customer) {
        $sql = "select sell_order.id_customer, customer.name_customer 
                from sell_order inner join customer
                on sell_order.id_customer = customer.id_customer
                where sell_order.id_customer = {$id_customer}"
        return DB::select($sql,[]);
    }
    function select_user($id_user){
        $sql = "select sell_order.id_user, name.users from sell_order
                inner join users on sell_order.id_user = users.id
                where sell_order.id_user = {$id_user}";
        return DB::select($sql, []);

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
