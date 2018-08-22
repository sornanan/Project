<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ProductModel 
{
    function select(){
    	$sql = "select * from product";
    	return DB::select($sql,[]);
    }
     function select_id($id_product){
        $sql = "select * from product where id_product = {$id_product}";
        return DB::select($sql, []);
}
 function select_search($q){
        $sql = "select * from product where id_product like '%{$q}%'";
        return DB::select($sql, []);
        }
	 function insert($product){
        $sql = "insert into product (product) 
                values ('{$product}')";
        DB::insert($sql, []);
    }
    function update($product,$id_product){
        $sql = "update product set 
                product = '{$product}' 
    
                where id_product = {$id_product}";
        DB::update($sql, []);
    }

    function delete($id_product){
        $sql = "delete from product where id_product = {$id_product}";
        DB::delete($sql, []);
    }
}