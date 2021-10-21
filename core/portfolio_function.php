<?php

	 function prx($arr){
		 echo '<pre>';
		 print_r($arr);
		 die();
	 }

	  function get_category($conn){
        
		require_once('dbconnection1.php');
		$sql= "SELECT * FROM category where status=1";
        $res= mysqli_query($conn,$sql);
        $data=array();
        while($row= mysqli_fetch_assoc($res)){
        $data[]=$row;

       }
	   return $data;
	 }

	 function get_portfolio($conn,$cat_id='',$portfolio_id=''){
		require_once('dbconnection1.php');
		$sql="SELECT * from portfolio where  status=1";
		if($cat_id!=''){
        $sql.=" and category_id=$cat_id";
		}
		if($portfolio_id!=''){
		$sql.=" and id=$portfolio_id";
		   }
		  
		$res=mysqli_query($conn,$sql);
		$data= array();
        while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
		}
		//print_r($data);
		return $data;
		
	 }
