<?php
	/*******************************************************************************
	 * The following code will
	 * Store LC Commercial entry data.
	 * There are a single table to keet track on LC data. The are following:
	 * 1. banks (Store single row)      
	 * *****************************************************************************
	 */  
	if (isset($_POST['bank_submit']) && !empty($_POST['bank_submit'])) {
		
		// check duplicate:
		$bank_name		= $_POST['bank_name'];
		$table		= 'banks';
		$where		= "bank_name='$bank_name'";
		if(isset($_POST['bank_update_submit']) && !empty($_POST['bank_update_submit'])){
			$notWhere   	=   "id!=".$_POST['bank_update_submit'];
			$duplicatedata 	= isDuplicateData($table, $where, $notWhere);
		}else{
			$duplicatedata 	= isDuplicateData($table, $where);
		}
		if ($duplicatedata) {
			$status     	=   'error';
			$_SESSION['warning']    =   "Operation faild. Duplicate data found..!";
		}else{	
				// Insert Data Into banks Table:
					   
				$bank_name		= $_POST['bank_name'];
					
				$query = "INSERT INTO `banks` (`bank_name`) VALUES ('$bank_name')";
				$conn->query($query);
				
				$_SESSION['success']    =   "Bank added process have been successfully completed.";
				header("location: bank.php");
				exit();
				}
		
	}
?>