<div id="printSectionArea2">
<style>
@media all{
	
	
	#printDataContainer2{
	  position:relative;
	  font-size:14px;
	  padding:20px;
	  
	}
	
	.commonDataStyle{
		position:absolute;
		font-size:14px;
		font-weight:bold;
	}
	
	.ucbStampBox{
		border:1px solid #000;
		float:right;
		height:100px;
		width:100px;
		text-align:center;
	}
	.ucbLCBox{
		border:1px solid #000;
		float:right;
		height:50px;
		width:300px;
		text-align:left;
		padding:10px 0px 0px 10px;
	}
	.ucbdateBox{
		float:right;
		text-align:right;
	}
	.checkBox{
		border:1px solid #000;
		padding:3px;
		margin:0px 5px;
	}
	.table-bordered td, .table-bordered th {
		border: 1px solid #000;
	}
	.fontSize18{
		font-size:18px;
		font-weight:bold;
	}
	.fontSize16{
		font-size:18px;
	}

	
}
/* .table td, .table th{
	padding:10px;
} */
</style>

	<div id='printDataContainer2'>
		<div class="row">
			<div class="col-sm-6">
				<img src="img/dhakabank.png" />
				<p>___________________________________________</p>
				<p>___________________________________________</p>
				<p>___________________________________________</p>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-8"></div>
					<div class="col-sm-4"><p class="ucbStampBox">STAMP</p></div>
				</div>
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10"><p class="ucbLCBox">L/C No. </p></div>
				</div>
				<div class="row">
					<div class="col-sm-8"></div>
					<div class="col-sm-4"><p class="ucbdateBox">Date : ...........................</p></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3><center>APPLICATION AND AGREEMENT FOR CONFIRMED IRREVOCABLE WITHOUT RECOURSE TO DRAWERS LETTER OF CREDIT.</center></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>Plese open confirmed irrevocable letter of credit through your correspondent by <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> MaillAirmail <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Teletransmission in full  <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span>  Teletransmission in brief details of which are as follows : </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
                  <tbody>
                    <tr>
						<td colspan="5">
							<span>Beneficiary's Name & Address : </span>
							<span class="fontSize18"><?php echo $row['beneficiary_name']; ?></span></br>
							<span class="fontSize16"><?php echo $row['beneficiary_address']; ?></span>
						</td>
                    </tr>
                    <tr>
						<td colspan="5">
							<span>Opener's Name & Address : </span>
							<span class="fontSize18"><?php echo $row['openers_name']; ?></span></br>
							<span class="fontSize16"><?php echo $row['openers_address']; ?></span>
						</td>
                    </tr>
                    <tr>
						<td width="15%"><span>Draft Amount</span></br><span class="fontSize16"> USD <?php echo $row['draft_amount']; ?></span></td>
						<td width="25%"><span>In Words</span></br><span class="fontSize16">US Doller <?php echo convertNumberToWords($row['draft_amount']).' Only';?></span></td>
						<td width="10%">
							<p>
								<span class="checkBox">
									<?php if(isset($row['at_sight']) && !empty($row['at_sight'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> At Sight
							</p>
							<p>
								<span class="checkBox">
									<?php if(isset($row['days_da_dp']) && !empty($row['days_da_dp'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> days DA/DP
							</p>
						</td>
						<td width="35%" colspan="2">
							<div class="row">
								<div class="col-sm-8">
									<p><span class="checkBox">
										<?php if(isset($row['cif']) && !empty($row['cif'])){ ?>
										<img src="img/checkmark.png" height="15px" />
										<?php }else{ ?>
										<img src="img/Nocheckmark.png" height="15px" />
										<?php }?>
									</span> CIF 
									<span class="checkBox">
										<?php if(isset($row['fob']) && !empty($row['fob'])){ ?>
										<img src="img/checkmark.png" height="15px" />
										<?php }else{ ?>
										<img src="img/Nocheckmark.png" height="15px" />
										<?php }?>
									</span> FOB </p>
								
									<p><span class="checkBox" style="padding-top:5px;">
										<?php if(isset($row['cfr']) && !empty($row['cfr'])){ ?>
										<img src="img/checkmark.png" height="15px" />
										<?php }else{ ?>
										<img src="img/Nocheckmark.png" height="15px" />
										<?php }?>
									</span> C F R</p>
								</div>
								<div class="col-sm-4">
								Drawn On </br>
								<p><span class="checkBox">
									<?php if(isset($row['drawn_on_us']) && !empty($row['drawn_on_us'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Us </p>
								<p><span class="checkBox">
									<?php if(isset($row['drawn_on_them']) && !empty($row['drawn_on_them'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Them </p></div>
							</div>
						</td>
                    </tr>
                    <tr>
						<td colspan="3" height="200px;"><span><center>Please specity commodities, price, quantity, indent no. etc.</center></span><span class="fontSize16"><?php echo $row['commodities']; ?></span></td>
						<td colspan="2" width="19%"><p>Country of Origin :</p><span class="fontSize16"><?php echo $row['country_origin']; ?></span></td>
                    </tr>
                    <tr>
						<td colspan="5"><p>DOCUMENTYS REQUIRED SA INDICATED BY CHECK (X)</p></td>
                    </tr>
                    <tr>
						<td colspan="2"><p><span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Commercial invoice in sixtuplicate</p></td>
						<td><p>Bangladesh Bank Registration No.</p></td>
						<td colspan="2"><p>Import Licence/LCAF No. <span class="fontSize16"><?php echo $row['lcaf_no']; ?></span></p></td>
                    </tr>
                    <tr>
						<td colspan="3"><p><span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Special customs invoice in duplicate</p></td>
						<td colspan="2"><p>IRC No.: <span class="fontSize16"><?php echo $row['irc_no']; ?></span></p></td>
                    </tr>
                    <tr>
						<td colspan="5"><p><span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Other documents : </br><small style="padding-left:400px;">(if special documents are required please specify name of issuer)</small></p>
						<p><span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Full set of clean on board bills of lading <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Airway Bill <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Post parcel <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Relating to shipment  </p>
						<p style=""> from <span style="display: inline-block;padding: 0px 100px 0px 100px;border-bottom: 1px solid #888;font-size:18px;"><?php echo $row['shipment_from']; ?></span>to<span style="display: inline-block;padding: 0px 100px 0px 100px;border-bottom: 1px solid #888;font-size:18px;"><?php echo $row['shipment_to']; ?></span>drawn</br><span style="padding-left:200px;">(in each case please certify port of country only)</span></p>
					
							<span style="width:600px;">to the order of Dhaka Bank Limited</span>
							<span style="padding-left:450px;width:600px;">Marked notify above account party</span>
						</td>
                    </tr>
                    <tr>
						<td colspan="2">
							<span>Insurence cover note/policy no. : <?php echo $row['insurance_cover_no']; ?></span></br>
							<span>Date : <?php echo $row['ins_date']; ?></span></br>
							<span>Amount : <?php echo $row['ins_amount']; ?></span>
						</td>
						<td colspan="3">
							<p>(Name and address of Insurence Company)</p>
							<span><?php echo $row['name_of_ins']; ?>, <?php echo $row['ins_address']; ?></span></br>
						</td>
                    </tr>
                    <tr>
						<td colspan="2">
							<p>
								Part Shipment 
								<span class="checkBox">
									<?php if(isset($row['ins_allowed']) && !empty($row['ins_allowed'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Allowed 
								<span class="checkBox">
									<?php if(isset($row['ins_prohibited']) && !empty($row['ins_prohibited'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Prohibited 
							</p>
						</td>
						<td colspan="3">
							<p>
								<span class="checkBox">
									<?php if(isset($row['ins_co_transhipment']) && !empty($row['ins_co_transhipment'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Transhipment 
								<span class="checkBox">
									<?php if(isset($row['ins_co_allowed']) && !empty($row['ins_co_allowed'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Allowed 
								<span class="checkBox">
									<?php if(isset($row['ins_co_prohibited']) && !empty($row['ins_co_prohibited'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Prohibited 
							</p>
						</td>
                    </tr>
                    <tr style="height:25px;">
						<td colspan="2" style="height:25px;">
							<p> Last Date of Shipment : <span class="fontSize16"><?php echo $row['last_shipment_date']; ?></span></p>
						</td>
						<td colspan="3" style="height:25px;"><p>last Date of Negotiation : <span class="fontSize16"><?php echo $row['last_neg_date']; ?></span></p></td>
                    </tr>
                    <tr>
						<td colspan="5"><p>Others terms and conditions if any : </br>
						  i) Foreign Bank's Charges on opener's/beneficiary's A/C</br>
						 ii) </br>
						iii) </br>
						 iv) </br>
						
						</p></td>
                    </tr>
                  </tbody>
                </table>
				C.F-7
			</div>
		</div>
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