<?php
	function getData( ) {
		include('config.php');
		$query  = "SELECT 
						product.*,
						product.id as product_id, 
						cashier.name as cashier_name, 
						cashier.id as cahier_id, 
						product.name as product_name, 
						category.name as category_name, 
						product.price as price 
					from 
						product 
					INNER JOIN 
						cashier on cashier.id = product.id_cashier 
					INNER JOIN 
						category on category.id = product.id_category
				";
		$result = mysqli_query($koneksi, $query);
		
		return mysqli_fetch_all( $result ,MYSQLI_ASSOC);
	}	
	function getCashierSelect( $data, $selectedId = 0 ) {
		$html = "";
	
		foreach( $data as $item )
		{
			if( $item["id"] == $selectedId )
				$html .= '<option value="'.$item["id"].'" selected="selected" >'.$item["name"].'</option>';
			else
				$html .= '<option value="'.$item["id"].'">'.$item["name"].'</option>';
		}
		return $html;
	}	
	function getCashier() {
		include('config.php');
		$query  = "SELECT * FROM `cashier`";
		$result = mysqli_query($koneksi, $query);
		
		return mysqli_fetch_all( $result ,MYSQLI_ASSOC);
	}	

	function getProductSelect( $data, $selectedId = 0 ) {
		$html = "";
	
		foreach( $data as $item )
		{
			if( $item["id"] == $selectedId )
				$html .= '<option value="'.$item["id"].'" selected="selected" >'.$item["name"].'</option>';
			else
				$html .= '<option value="'.$item["id"].'">'.$item["name"].'</option>';
		}


		return $html;
	}	
	function getProduct(  ) {
		include('config.php');
		$query  = "SELECT * FROM `product`";
		$result = mysqli_query($koneksi, $query);
		
		return mysqli_fetch_all( $result ,MYSQLI_ASSOC);
	}	
	function getCategory(  ) {
		include('config.php');
		$query  = "SELECT * FROM `category`";
		$result = mysqli_query($koneksi, $query);
		
		return mysqli_fetch_all( $result ,MYSQLI_ASSOC);
	}	

?>