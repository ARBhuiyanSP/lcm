<?php
	/*******************************************************************************
	 * The following code will
	 * Store LC Commercial entry data.
	 * There are a single table to keet track on LC data. The are following:
	 * 1. banks (Store single row)      
	 * *****************************************************************************
	 */  
	if (isset($_POST['country_submit']) && !empty($_POST['country_submit'])) {
		
		// check duplicate:
		$country_name		= $_POST['country_name'];
		$table		= 'countries';
		$where		= "country_name='$country_name'";
		if(isset($_POST['country_update_submit']) && !empty($_POST['country_update_submit'])){
			$notWhere   	=   "id!=".$_POST['country_update_submit'];
			$duplicatedata 	= isDuplicateData($table, $where, $notWhere);
		}else{
			$duplicatedata 	= isDuplicateData($table, $where);
		}
		if ($duplicatedata) {
			$status     	=   'error';
			$_SESSION['warning']    =   "Operation faild. Duplicate data found..!";
		}else{	
				// Insert Data Into banks Table:
					   
				$country_name		= $_POST['country_name'];
					
				$query = "INSERT INTO `countries` (`country_name`) VALUES ('$country_name')";
				$conn->query($query);
				
				$_SESSION['success']    =   "Country added process have been successfully completed.";
				header("location: country.php");
				exit();
				}
		
	}
?>