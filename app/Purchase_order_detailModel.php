<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Purchase_order_detailModel 
{
 function select(){
    	$sql = "select * from purchase_order_detail";
    	return DB::select($sql,[]);
    }
     function select_id($id_orderdetail){
        $sql = "select * from purchase_order_detail where id_orderdetail = {$id_orderdetail}";
        return DB::select($sql, []);
}
 function select_search($q){
        $sql = "select * from purchase_order_detail where id_orderdetail like '%{$q}%'";
        return DB::select($sql, []);
        }
	 function insert($detail,$quantity,$amount,$id_product,$id_order){
        $sql = "insert into purchase_order_detail (detail,quantity,amount,id_product,id_order) 
                values ('{$detail}','{quantity}',{amount},{id_product},{id_order})";
        DB::insert($sql, []);
    }
    function update($detail,$quantity,$amount,$id_orderdetail){
        $sql = "update purchase_order_detail set 
                detail = '{$detail}',
                quantity = '{quantity}',
                amount = {amount},
                id_product = {id_product},
                id_order = {id_order}, 
    
                where id_orderdetail = {$id_orderdetail}";
        DB::update($sql, []);
    }

    function delete($id_orderdetail){
        $sql = "delete from purchase_order_detail where id_orderdetail = {$id_orderdetail}";
        DB::delete($sql, []);
    }
}