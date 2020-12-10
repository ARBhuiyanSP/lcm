<?php
	/*******************************************************************************
	 * The following code will
	 * Store LC Commercial entry data.
	 * There are a single table to keet track on LC data. The are following:
	 * 1. lc_commercial (Store single row)      
	 * *****************************************************************************
	 */  
	if (isset($_POST['commercial_submit']) && !empty($_POST['commercial_submit'])) {
		
		// check duplicate:
		$sl_no		= $_POST['sl_no'];
		$table		= 'lc_commercial';
		$where		= "sl_no='$sl_no'";
		if(isset($_POST['commercial_update_submit']) && !empty($_POST['commercial_update_submit'])){
			$notWhere   	=   "id!=".$_POST['commercial_update_submit'];
			$duplicatedata 	= isDuplicateData($table, $where, $notWhere);
		}else{
			$duplicatedata 	= isDuplicateData($table, $where);
		}
		if ($duplicatedata) {
			$status     	=   'error';
			$_SESSION['warning']    =   "Operation faild. Duplicate data found..!";
		}else{	
				// Insert Commercial LC Data Into lc_commercial Table:
					   
				$sl_no           				= $_POST['sl_no'];
				$bank           				= $_POST['bank'];
				$lcaf_no           				= $_POST['lcaf_no'];
				$importer_name					= $_POST['importer_name'];
				$address						= $_POST['address'];
				$irc_no							= $_POST['irc_no'];
				$year_of_renewal				= $_POST['year_of_renewal'];
				$share_basis_amount				= $_POST['share_basis_amount'];
				$lc_amount						= $_POST['lc_amount'];
				$sof_cash						= $_POST['sof_cash'];
				$sof_barter						= $_POST['sof_barter'];
				$sof_loan						= $_POST['sof_loan'];
				$sof_credit						= $_POST['sof_credit'];
				$sof_other						= $_POST['sof_other'];
				$description_of_item_imported	= $_POST['description_of_item_imported'];
				$itc_number						= $_POST['itc_number'];
				$description_of_items			= $_POST['description_of_items'];
				$itc_no							= $_POST['itc_no'];
				$beneficiary_name				= $_POST['beneficiary_name'];
				$beneficiary_address			= $_POST['beneficiary_address'];
				$openers_name					= $_POST['openers_name'];
				$openers_address				= $_POST['openers_address'];
				$draft_amount					= $_POST['draft_amount'];
				$at_sight						= $_POST['at_sight'];
				$days_da_dp						= $_POST['days_da_dp'];
				$cif							= $_POST['cif'];
				$cfr							= $_POST['cfr'];
				$fob							= $_POST['fob'];
				$drawn_on_us					= $_POST['drawn_on_us'];
				$drawn_on_them					= $_POST['drawn_on_them'];
				$country_origin					= $_POST['country_origin'];
				$commodities					= $_POST['commodities'];
				$hs_code						= $_POST['hs_code'];
				$shipment_from					= $_POST['shipment_from'];
				$shipment_to					= $_POST['shipment_to'];
				$insurance_cover_no				= $_POST['insurance_cover_no'];
				$ins_date						= $_POST['ins_date'];
				$ins_amount						= $_POST['ins_amount'];
				$ins_part_shipment				= $_POST['ins_part_shipment'];
				$ins_allowed					= $_POST['ins_allowed'];
				$ins_prohibited					= $_POST['ins_prohibited'];
				$last_shipment_date				= $_POST['last_shipment_date'];
				$name_of_ins					= $_POST['name_of_ins'];
				$ins_address					= $_POST['ins_address'];
				$ins_co_transhipment			= $_POST['ins_co_transhipment'];
				$ins_co_allowed					= $_POST['ins_co_allowed'];
				$ins_co_prohibited				= $_POST['ins_co_prohibited'];
				$last_neg_date					= $_POST['last_neg_date'];
					
				$query = "INSERT INTO `lc_commercial` (`sl_no`,`bank`,`lcaf_no`,`importer_name`,`address`,`irc_no`,`year_of_renewal`,`share_basis_amount`,`lc_amount`,`sof_cash`,`sof_barter`,`sof_loan`,`sof_credit`,`sof_other`,`description_of_item_imported`,`itc_number`,`description_of_items`,`itc_no`,`beneficiary_name`,`beneficiary_address`,`openers_name`,`openers_address`,`draft_amount`,`at_sight`,`days_da_dp`,`cif`,`cfr`,`fob`,`drawn_on_us`,`drawn_on_them`,`country_origin`,`commodities`,`hs_code`,`shipment_from`,`shipment_to`,`insurance_cover_no`,`ins_date`,`ins_amount`,`ins_part_shipment`,`ins_allowed`,`ins_prohibited`,`last_shipment_date`,`name_of_ins`,`ins_address`,`ins_co_transhipment`,`ins_co_allowed`,`ins_co_prohibited`,`last_neg_date`) VALUES ('$sl_no','$bank','$lcaf_no','$importer_name','$address','$irc_no','$year_of_renewal','$share_basis_amount','$lc_amount','$sof_cash','$sof_barter','$sof_loan','$sof_credit','$sof_other','$description_of_item_imported','$itc_number','$description_of_items','$itc_no','$beneficiary_name','$beneficiary_address','$openers_name','$openers_address','$draft_amount','$at_sight','$days_da_dp','$cif','$cfr','$fob','$drawn_on_us','$drawn_on_them','$country_origin','$commodities','$hs_code','$shipment_from','$shipment_to','$insurance_cover_no','$ins_date','$ins_amount','$ins_part_shipment','$ins_allowed','$ins_prohibited','$last_shipment_date','$name_of_ins','$ins_address','$ins_co_transhipment','$ins_co_allowed','$ins_co_prohibited','$last_neg_date')";
				$conn->query($query);
				
				$_SESSION['success']    =   "LC insert process have been successfully completed.";
				header("location: lc_commercial.php");
				exit();
				}
		
	}
?>