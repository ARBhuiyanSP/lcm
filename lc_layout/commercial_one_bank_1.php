<div id="printSectionArea">
<style>
@media all{
	@page {
		  size: 8.5in 14in;
		}
	
	#printDataContainer{
	  position:relative;
	  background-image: url("img/backgrounds/lc-ob-com-01.jpg");
	  background-size: 8.5in 14in;
	  width: 8.5in;
	  height: 14in;
	  left:0px;
	  top:0px;
	}
	
	.commonDataStyle{
		position:absolute;
		height:18px;
		font-size:14px;
		font-weight:bold;
	}
	
	#printnameAddress{
		top:170px;
		left:335px;
		width: 450px;	
	}
	#printirc{
		top:215px;
		left:210px;
		width: 250px;	
	}
	
	#printyearOfrenew{
		top:215px;
		left:555px;
		width: 250px;	
	}
	#printSofCash{
		top:320px;
		left:270px;
		width: 200px;	
	}
	
	#printSofBarter{
		top:320px;
		left:310px;
		width: 200px;	
	}
	#printSofLoan{
		top:320px;
		left:350px;
		width: 200px;	
	}
	#printSofCredit{
		top:320px;
		left:390px;
		width: 200px;	
	}
	#printSofOther{
		top:320px;
		left:540px;
		width: 200px;	
	}
	#printLcAmount{
		top:280px;
		left:400px;
		width: 200px;	
	}
	#printLcAmountinWords{
		top:305px;
		left:200px;
		width: 450px;	
	}
	#printDesItemsImport{
		top:530px;
		left:130px;
		width: 220px;	
	}
	#itcNumber{
		top:530px;
		left:450px;
		width: 220px;	
	}
	#descriptionOfItems{
		top:770px;
		left:130px;
		width: 220px;	
	}
	
	#itcNo{
		top:770px;
		left:450px;
		width: 220px;	
	}
}
</style>

	<div id='printDataContainer'>
		<!-- Print Name & Address -->
		<?php if(isset($row['importer_name']) && !empty($row['importer_name'])){ ?>
		<div class="commonDataStyle" id="printnameAddress"> <?php echo $row['importer_name'].','.$row['address']; ?></div>
		<?php } ?>
		
		<!-- Print IRC No -->
		<?php if(isset($row['irc_no']) && !empty($row['irc_no'])){ ?>
		<div class="commonDataStyle" id="printirc"> <?php echo $row['irc_no']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['year_of_renewal']) && !empty($row['year_of_renewal'])){ ?>
		<div class="commonDataStyle" id="printyearOfrenew"> <?php echo $row['year_of_renewal']; ?></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['sof_cash']) && !empty($row['sof_cash'])){ ?>
		<div class="commonDataStyle" id="printSofCash"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['sof_barter']) && !empty($row['sof_barter'])){ ?>
		<div class="commonDataStyle" id="printSofBarter"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['sof_loan']) && !empty($row['sof_loan'])){ ?>
		<div class="commonDataStyle" id="printSofLoan"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['sof_credit']) && !empty($row['sof_credit'])){ ?>
		<div class="commonDataStyle" id="printSofCredit"> <img src="img/checkmark.png" height="15px"/></div>
		<?php } ?>
		
		<!-- Print Renewal year -->
		<?php if(isset($row['sof_other']) && !empty($row['sof_other'])){ ?>
		<div class="commonDataStyle" id="printSofOther"> <img src="img/checkmark.png" height="15px" /></div>
		<?php } ?>
		
		<!-- Print LC Amount -->
		<?php if(isset($row['lc_amount']) && !empty($row['lc_amount'])){ ?>
		<div class="commonDataStyle" id="printLcAmount"> $ <?php echo $row['lc_amount']; ?></div>
		<?php } ?>
		
		<!-- Print LC Amount in Words -->
		<?php if(isset($row['lc_amount']) && !empty($row['lc_amount'])){ ?>
		<div class="commonDataStyle" id="printLcAmountinWords"><?php echo convertNumberToWords($row['lc_amount']).' Only';?></div>
		<?php } ?>
		
		<!-- Print Description items to be imported -->
		<?php if(isset($row['description_of_item_imported']) && !empty($row['description_of_item_imported'])){ ?>
		<div class="commonDataStyle" id="printDesItemsImport"><?php echo $row['description_of_item_imported'];?></div>
		<?php } ?>
		<!-- Print Description items to be imported/ ITC No -->
		<?php if(isset($row['itc_number']) && !empty($row['itc_number'])){ ?>
		<div class="commonDataStyle" id="itcNumber"><?php echo $row['itc_number'];?></div>
		<?php } ?>
		
		<!-- Print Description items to be imported -->
		<?php if(isset($row['description_of_items']) && !empty($row['description_of_items'])){ ?>
		<div class="commonDataStyle" id="descriptionOfItems"><?php echo $row['description_of_items'];?></div>
		<?php } ?>
		<!-- Print Description items to be imported/ITC No -->
		<?php if(isset($row['itc_no']) && !empty($row['itc_no'])){ ?>
		<div class="commonDataStyle" id="itcNo"><?php echo $row['itc_no'];?></div>
		<?php } ?>
	</div>
</div>
<center style="padding-bottom:5px;">
<button type="button" class="btn btn-info" onclick="window.location.href='lc_industrial_list.php';"><i class="nav-icon fas fa-bars"></i> Back To LC List</button> 
<button class="btn btn-success" onclick="namebadge_printing('printSectionArea')" style=""><i class="fa fa-print" aria-hidden="true" style="font-size: 17px;"> Print Page-1</i></button>
</center>
<script>
	var mywindow;
        function namebadge_printing(divName, hideDirSec=false){
				setTimeout(function () {
                mywindow = window.open(window.location.href, "_blank");
                mywindow.document.open();
                mywindow.document.write($('#'+divName).html());
                mywindow.document.close();
                mywindow.window.print();
                closeWin();
            }, 500);
        }
        function closeWin() {
            mywindow.close();
        }
	</script>