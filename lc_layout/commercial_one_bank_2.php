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
		padding:5px;
	}

	
}
</style>

	<div id='printDataContainer2'>
		<div class="row">
			<div class="col-sm-6">
				<h3>To</h3>
				<h3>The manager</h3>
				<h2>ONE BANK LTD</h2>
				<p>Branch...........................................</p>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-8"></div>
					<div class="col-sm-4"><p class="ucbStampBox"></p></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3><center>APPLICATION AND AGREEMENT FOR IRREVOCABLE WITHOUT RECOURSE TO DRAWERS LETTER OF CREDIT.</center></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>Plese open confirmed irrevocable letter of credit through your correspondent by <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Mail/Airmail <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Swift in full  <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span>  Swift in brief details by Mail/Airmail as follows :</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
                  <tbody>
                    <tr>
						<td colspan="5">
							<span>Opener's Name & Address</span></br>
							<span><?php echo $row['openers_name']; ?></span></br>
							<span><?php echo $row['openers_address']; ?></span>
						</td>
                    </tr>
                    <tr>
						<td colspan="5">
							<span>Beneficiary's Name & Address</span></br>
							<span><?php echo $row['beneficiary_name']; ?></span></br>
							<span><?php echo $row['beneficiary_address']; ?></span>
						</td>
                    </tr>
                    <tr>
						<td width="30%"><span>Draft Amount</span></br><span><?php echo $row['draft_amount']; ?></span></td>
						<td width="30%"><span>In Words</span></br><span><?php echo convertNumberToWords($row['draft_amount']).' Only';?></span></td>
						<td colspan="3">
							<p>
								<span class="checkBox">
									<?php if(isset($row['at_sight']) && !empty($row['at_sight'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> At Sight  
								<span class="checkBox">
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
								</span> FOB
							</p>
							<p>
								<span class="checkBox">
									<?php if(isset($row['days_da_dp']) && !empty($row['days_da_dp'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> days sight
							</p>
						</td>
                    </tr>
                    <tr>
						<td colspan="5">
							<span>Description of commodities :</span></br><span><?php echo $row['commodities']; ?></span></br>
							<span>as per enclosed contract/proforma invoice/indent number.........................................................................................................................dated..........................</span>
						</td>
                    </tr>
                    <tr>
						<td colspan="3">
							<p>H.S code : <?php echo $row['hs_code']; ?></p>
						</td>
						<td colspan="2">
							<p>TIN No :</p>
						</td>
                    </tr>
                    <tr>
						<td>
							<p>Country of Origin : <?php echo $row['country_origin']; ?></p>
						</td>
						<td>
							<p>LCAF No : <?php echo $row['lcaf_no']; ?></p>
						</td>
						<td>
							<p>IRC No : <?php echo $row['irc_no']; ?></p>
						</td>
						<td colspan="2">
							<p>VAT Reg No :</p>
						</td>
                    </tr>
                    <tr>
						<td colspan="5">
						<p>Shipment from __<?php echo $row['shipment_from']; ?>__  to __<?php echo $row['shipment_to']; ?> by Sea/Air/Road/etc.</p>
						<p>DOCUMENTS REQUIRED : </p>
						<p><span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Commercial invoice in sixtuplicate <span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Packing list in triplicate</p>
						<p><span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Full set of clean shipped on Board Ocean Bills of Loading?Air way bill/Truck receipt/other documents relating to shipment drawn or endorsed to the order of One Bank ltd.</p>
						<p><span class="checkBox"><img src="img/Nocheckmark.png" height="15px" /></span> Certificate of origin issued by chamber of commerce or any similar institutions.</p>
						
						</td>
                    </tr>
					
					
					
                   
                    <tr>
						<td colspan="2">
							<p> Last Date of Shipment : <?php echo $row['last_shipment_date']; ?></p>
						</td>
						<td colspan="3" style="height:25px;"><p>last Date of Negotiation : <?php echo $row['last_neg_date']; ?></p></td>
                    </tr>
                    <tr>
						<td colspan="2">
							<span>Insurence cover note/policy no. :</span></br><span> <?php echo $row['insurance_cover_no']; ?></span>
						</td>
						<td colspan="3"><span>Insurence Company Name and address</span></br><span><?php echo $row['name_of_ins']; ?>, <?php echo $row['ins_address']; ?></span></td>
                    </tr>
                    <tr>
						<td colspan="2">
							<p>
								<span class="checkBox">
									<?php if(isset($row['ins_part_shipment']) && !empty($row['ins_part_shipment'])){ ?>
									<img src="img/checkmark.png" height="15px" />
									<?php }else{ ?>
									<img src="img/Nocheckmark.png" height="15px" />
									<?php }?>
								</span> Part Shipment 
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
                    <tr>
						<td colspan="5"><span>Others terms and conditions if any : </br>
						  i) Foreign Bank's Charges on opener's/beneficiary's A/C</br>
						 ii) </br>
						iii) </br>
						 iv) </br>
						This credit is subject to Uniform Customs & Practice for Documentary Credits(2007 Rev.) ICC PUB - 600
						</span></td>
                    </tr>
                    <tr>
						<td colspan="5">
							<span> In consideration od your opening L/C in the above terms & conditions, the undersigned unconditionally agree (s) as per terms & conditions as stated overleaf.</span>
							<p style="float:right; padding-top:20px;">
								_______________________</br>
								Signature of Applicant</br>
								Account No.

							</p>
						</td>
                    </tr>
                  </tbody>
                </table>
				<center><h5>FOR BANK'S USE</h5></center>
				<table class="table table-bordered">
                  <tbody>
                    <tr>
						<td colspan="2">
							<span>L/C No. </span>
						</td>
						<td colspan="2">
							<span>Date of Opening :</span>
						</td>
                    </tr>
                    <tr>
						<td colspan="2">
							<span>Advising Bank</span>
						</td>
						<td colspan="2">
							<span>Reimbursing Bank :</span>
						</td>
                    </tr>
                  </tbody>
                </table>
				FX - 047
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