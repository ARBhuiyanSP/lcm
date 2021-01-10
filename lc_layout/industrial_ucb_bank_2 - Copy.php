<div id="printSectionArea2">
<style>
@media all{
	@page {
		  size: 8.5in 14in;
		}
	
	#printDataContainer2{
	  position:relative;
	  background-image: url("img/backgrounds/ucb-com-02.jpg");
	  background-size: 8.5in 14in;
	  width: 8.5in;
	  height: 14in;
	}
	
	.commonDataStyle{
		position:absolute;
		height:18px;
		font-size:14px;
		font-weight:bold;
	}
	
	#printBeneficiaryName{
		top:415px;
		left:225px;
		width: 450px;	
	}
	#printBeneficiaryAddress{
		top:433px;
		left:225px;
		width: 450px;	
	}
	#printOpenersName{
		top:510px;
		left:225px;
		width: 450px;	
	}
	#printOpenersAddress{
		top:530px;
		left:225px;
		width: 450px;	
	}
	#printDraftAmount{
		top:625px;
		left:35px;
	}
	#printDraftAmountinWords{
		top:625px;
		left:200px;
		width: 198px;
	}
	#printAtSight{
		top:605px;
		left:470px;
	}
	#printDaysDaDp{
		top:640px;
		left:470px;
	}
	#printCif{
		top:605px;
		left:685px;
	}
	#printFob{
		top:605px;
		left:755px;
	}
	#printCfr{
		top:640px;
		left:685px;
	}
	#printDrawnOnUs{
		top:615px;
		left:860px;
	}
	#printDrawnOnThem{
		top:640px;
		left:860px;
	}
	#printCountryOrigin{
		top:720px;
		left:682px;
	}
	
	#printCommodities{
		top:700px;
		left:57px;
		width: 490px;
	}
	
	#printLcafNo{
		top:975px;
		left:695px;
	}
	#printIrcNo{
		top:1055px;
		left:695px;
	}
	#printShipmentFrom{
		top:1210px;
		left:100px;
	}
	#printShipmentTo{
		top:1210px;
		left:410px;
	}
	#printInsPartShipment{
		top:1365px;
		left:20px;
	}
	#printInsAllowed{
		top:1365px;
		left:165px;
	}
	#printInsProhibited{
		top:1365px;
		left:308px;
	}
	#printLastShipmentDate{
		top:1410px;
		left:200px;
	}
	
	
	#printInsCoPartShipment{
		top:1365px;
		left:485px;
	}
	#printInsCoAllowed{
		top:1365px;
		left:670px;
	}
	#printInsCoProhibited{
		top:1365px;
		left:795px;
	}
	#printLastNegDate{
		top:1410px;
		left:670px;
	}
	
	
}
</style>

	<div id='printDataContainer2'>
		<!-- Print Beneficiary Name -->
		<?php if(isset($row['beneficiary_name']) && !empty($row['beneficiary_name'])){ ?>
		<div class="commonDataStyle" id="printBeneficiaryName"> <?php echo $row['beneficiary_name']; ?></div>
		<?php } ?>
		
		<!-- Print Beneficiary Address -->
		<?php if(isset($row['beneficiary_address']) && !empty($row['beneficiary_address'])){ ?>
		<div class="commonDataStyle" id="printBeneficiaryAddress"> <?php echo $row['beneficiary_address']; ?></div>
		<?php } ?>
		
		<!-- Print Beneficiary Address -->
		<?php if(isset($row['openers_name']) && !empty($row['openers_name'])){ ?>
		<div class="commonDataStyle" id="printOpenersName"> <?php echo $row['openers_name']; ?></div>
		<?php } ?>
		
		<!-- Print Beneficiary Address -->
		<?php if(isset($row['openers_address']) && !empty($row['openers_address'])){ ?>
		<div class="commonDataStyle" id="printOpenersAddress"> <?php echo $row['openers_address']; ?></div>
		<?php } ?>
		
		<!-- Print Draft Amount -->
		<?php if(isset($row['draft_amount']) && !empty($row['draft_amount'])){ ?>
		<div class="commonDataStyle" id="printDraftAmount"> $ <?php echo $row['draft_amount']; ?></div>
		<?php } ?>
		
		<!-- Print Draft Amount in Words -->
		<?php if(isset($row['draft_amount']) && !empty($row['draft_amount'])){ ?>
		<div class="commonDataStyle" id="printDraftAmountinWords"><?php echo convertNumberToWords($row['draft_amount']).' Only';?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['at_sight']) && !empty($row['at_sight'])){ ?>
		<div class="commonDataStyle" id="printAtSight"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['days_da_dp']) && !empty($row['days_da_dp'])){ ?>
		<div class="commonDataStyle" id="printDaysDaDp"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['cif']) && !empty($row['cif'])){ ?>
		<div class="commonDataStyle" id="printCif"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['fob']) && !empty($row['fob'])){ ?>
		<div class="commonDataStyle" id="printFob"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['cfr']) && !empty($row['cfr'])){ ?>
		<div class="commonDataStyle" id="printCfr"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['drawn_on_us']) && !empty($row['drawn_on_us'])){ ?>
		<div class="commonDataStyle" id="printDrawnOnUs"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['drawn_on_them']) && !empty($row['drawn_on_them'])){ ?>
		<div class="commonDataStyle" id="printDrawnOnThem"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['country_origin']) && !empty($row['country_origin'])){ ?>
		<div class="commonDataStyle" id="printCountryOrigin"> <?php echo $row['country_origin']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['commodities']) && !empty($row['commodities'])){ ?>
		<div class="commonDataStyle" id="printCommodities"> <?php echo $row['commodities']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['lcaf_no']) && !empty($row['lcaf_no'])){ ?>
		<div class="commonDataStyle" id="printLcafNo"> <?php echo $row['lcaf_no']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['irc_no']) && !empty($row['irc_no'])){ ?>
		<div class="commonDataStyle" id="printIrcNo"> <?php echo $row['irc_no']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['shipment_from']) && !empty($row['shipment_from'])){ ?>
		<div class="commonDataStyle" id="printShipmentFrom"> <?php echo $row['shipment_from']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['shipment_to']) && !empty($row['shipment_to'])){ ?>
		<div class="commonDataStyle" id="printShipmentTo"> <?php echo $row['shipment_to']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['ins_part_shipment']) && !empty($row['ins_part_shipment'])){ ?>
		<div class="commonDataStyle" id="printInsPartShipment"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['ins_allowed']) && !empty($row['ins_allowed'])){ ?>
		<div class="commonDataStyle" id="printInsAllowed"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['ins_prohibited']) && !empty($row['ins_prohibited'])){ ?>
		<div class="commonDataStyle" id="printInsProhibited"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['last_shipment_date']) && !empty($row['last_shipment_date'])){ ?>
		<div class="commonDataStyle" id="printLastShipmentDate"> <?php echo $row['last_shipment_date']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['ins_co_transhipment']) && !empty($row['ins_co_transhipment'])){ ?>
		<div class="commonDataStyle" id="printInsCoPartShipment"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['ins_co_allowed']) && !empty($row['ins_co_allowed'])){ ?>
		<div class="commonDataStyle" id="printInsCoAllowed"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['ins_co_prohibited']) && !empty($row['ins_co_prohibited'])){ ?>
		<div class="commonDataStyle" id="printInsCoProhibited"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['last_neg_date']) && !empty($row['last_neg_date'])){ ?>
		<div class="commonDataStyle" id="printLastNegDate"> <?php echo $row['last_neg_date']; ?></div>
		<?php } ?>
		
	</div>
</div>
<center style="padding-bottom:5px;">
<button type="button" class="btn btn-info" onclick="window.location.href='lc_industrial_list.php';"><i class="nav-icon fas fa-bars"></i> Back To LC List</button> 
<button class="btn btn-success" onclick="printDiv2('printSectionArea2')" style=""><i class="fa fa-print" aria-hidden="true" style="font-size: 17px;"> Print Page-2</i></button>
</center> 


<script>
	function printDiv2(divName) {
		 var printContents = document.getElementById(divName).innerHTML;
		 var originalContents = document.body.innerHTML;

		 document.body.innerHTML = printContents;

		 window.print();

		 document.body.innerHTML = originalContents;
	}
	</script>
<!-- End print section area -->