<?php

namespace App;
use Illuminate\Support\Facades\DB;

class SupplierModel 
{
   function select(){
        $sql = "select * from supplier";
        return DB::select($sql, []);
    }

    function select_id($id_supplier){
        $sql = "select * from supplier where id_supplier = {$id_supplier}";
        return DB::select($sql, []);
    }

    function select_search($q){
        $sql = "select * from supplier where name_supplier like '%{$q}%'";
        return DB::select($sql, []);
    }

    function insert($name_supplier, $address, $email,$telephone){
        $sql = "insert into supplier (name_supplier, address, email,telephone) 
                values ( '{$name_supplier}', '{$address}', '{$email}','{$telephone}')";
        DB::insert($sql, []);
    }

    function update($name_supplier, $address, $email,$telephone, $id_supplier){
        $sql = "update supplier set 
                name_supplier = '{$name_supplier}',  
                address =  '{$address}', email = '{$email}',
                telephone = '{$telephone}'
                where id_supplier = {$id_supplier}";
        DB::update($sql, []);
    }

    function delete($id_supplier){
        $sql = "delete from supplier where id_supplier = {$id_supplier}";
        DB::delete($sql, []);
    }
}
