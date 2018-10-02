<?php

namespace App;

use Illuminate\Support\Facades\DB;

class UserModel 
{
   	function select(){
   	$sql = "select * from users";
   	return DB::select($sql,[]); 
}
}
