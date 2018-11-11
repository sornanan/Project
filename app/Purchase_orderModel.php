<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Purchase_orderModel 
{
    function select(){
    	$sql = "select * from purchase_order";
    	return DB::select($sql,[]);
    }
    function select_id($id_order){
        $sql = "select * from purchase_order where id_order = {$id_order}";
        return DB::select($sql, []);
    }
    function select_search($q){
        $sql = "select * from purchase_order where id_order like '%{$q}%'";
        return DB::select($sql, []);
    }
	function insert($price,$id_supplier,$id_user){
        $sql = "insert into purchase_order (price,id_supplier,id_user) 
                values ({$price},{$id_supplier},{$id_user})";
        DB::insert($sql, []);
    }
    function update($price,$id_supplier,$id_user,$id_order){
        $sql = "update purchase_order set 
                price = {$price},
                id_supplier = {$id_supplier},
                id_user = {$id_user} 
    
                where id_order = {$id_order}";
        DB::update($sql, []);
    }
    function delete($id_order){
        $sql = "delete from purchase_order where id_order = {$id_order}";
        DB::delete($sql, []);
    }
    function show($id_p){
        $sql = "select id_order,date,supplier.id_supplier,supplier.name_supplier,users.id,users.name
                from purchase_order
                inner join supplier on purchase_order.id_supplier=supplier.id_supplier
                inner join users on purchase_order.id_user=users.id";
                return DB::select($sql ,[]);
            }
}
