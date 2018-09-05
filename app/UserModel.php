<?php

namespace App;

use Illuminate\Support\Facades\DB;
class UserModel 
{
    function select(){
        $sql = "select * from customer";
        return DB::select($sql, []);
    }

    function select_id($id_customer){
        $sql = "select * from customer where id_customer = {$id_customer}";
        return DB::select($sql, []);
    }

    function select_search($q){
        $sql = "select * from customer where name_customer like '%{$q}%'";
        return DB::select($sql, []);
    }

    function insert($name_customer, $address, $email,$telephone){
        $sql = "insert into customer (name_customer, address, email,telephone) 
                values ( '{$name_customer}', '{$address}', '{$email}',{$telephone})";
        DB::insert($sql, []);
    }

    function update($name_customer, $address, $email,$telephone, $id_customer){
        $sql = "update customer set 
                name_customer = '{$name_customer}',  
                address =  '{$address}', email = '{$email}',
                telephone = {$telephone}
                where id_customer = {$id_customer}";
        DB::update($sql, []);
    }

    function delete($id_customer){
        $sql = "delete from customer where id_customer = {$id_customer}";
        DB::delete($sql, []);
    }
}
