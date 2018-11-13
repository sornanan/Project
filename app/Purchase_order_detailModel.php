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
	 function insert($detail,$quantity,$price,$amount,$id_product,$id_order){
        $sql = "insert into purchase_order_detail (detail,quantity,price,amount,id_product,id_order) 
                values ('{$detail}','{$quantity}','{$price}','{$amount}',{$id_product},{$id_order})";
        DB::insert($sql, []);
    }
    function update($detail,$quantity,$price,$amount,$id_product,$id_order,$id_orderdetail){
        $sql = "update purchase_order_detail set 
                detail      = '{$detail}',
                quantity    = '{$quantity}',
                price       = '{$price}',
                amount      = '{$amount}',
                id_product  = {$id_product},
                id_order    = {$id_order}
                where id_orderdetail = {$id_orderdetail}";
        DB::update($sql, []);
    }

    function delete($id_orderdetail){
        $sql = "delete from purchase_order_detail where id_orderdetail = {$id_orderdetail}";
        DB::delete($sql, []);
    }
    function p_detail($id){
        $sql = "select 
        purchase_order_detail.id_orderdetail,
        purchase_order_detail.detail,
        purchase_order_detail.quantity,
        purchase_order_detail.price,
        purchase_order_detail.amount,
        purchase_order_detail.id_product,
        purchase_order_detail.id_order,
        purchase_order.id_order
        from purchase_order_detail
        INNER JOIN purchase_order ON purchase_order_detail.id_order = purchase_order.id_order
        where purchase_order_detail.id_order = {$id}";
        return DB::select($sql, []);
    }
}