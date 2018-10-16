<?php

namespace App;

use Illuminate\Support\Facades\DB;


class Re_productModel
{
    function select(){
        $sql = "select * from re_product";
        return DB::select($sql, []);
    }

    function select_id($id_return){
        $sql = "select * from re_product where id_return = {$id_return}";
        return DB::select($sql, []);
    }

    function select_search($q){
        $sql = "select * from re_product where id_return like '%{$q}%'";
        return DB::select($sql, []);
    }

    function insert($date, $id_customer){
        $sql = "insert into re_product (date,id_customer) 
                values ( '{$date}', {$id_customer})";
        DB::insert($sql, []);
    }

    function update($date, $id_customer,$id_return){
        $sql = "update re_product set 
                date = '{$date}',  
                id_customer = {$id_customer}

                where id_return = {$id_return}";
        DB::update($sql, []);
    }

    function delete($id_return){
        $sql = "delete from re_product where id_return = {$id_return}";
        DB::delete($sql, []);
    }

}