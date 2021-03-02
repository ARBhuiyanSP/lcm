<div id="printSectionArea2">
<style>
@media all{
	
	
	#printDataContainer2{
	  position:relative;
	  font-size:13.5px;
	  padding:20px;
	  text-align:justify;
	  
	}
	
	.commonDataStyle{
		position:absolute;
		font-size:13.5px;
		font-weight:bold;
	}
	
	.ucbStampBox{
		border:1px solid #000;
		float:right;
		height:90px;
		width:90px;
		text-align:center;
	}
	.BottomBox {
		border: 1px solid #000;
		height: auto;
		width: 100%;
		padding: 5px;
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
	input {
	  border: 0;
	  outline: 0;
	  background: transparent;
	  border-bottom: 1px solid black;
	}
	.brdr{
		border-top: 1px solid black;
	}

	
}
/* .table td, .table th{
	padding:10px;
} */
</style>

	<div id="printDataContainer2">
		<div class="row">
			<div class="col-sm-4">
				<img src="img/nccbank.png" height="90px;"/>
			</div>
			<div class="col-sm-6">
				<h5 style="padding-top:50px;padding-left:30px;"><center>NATIONAL CREDIT AND COMMERCE BANK LIMITED</center></h5>
			</div>
			<div class="col-sm-2">
				<p class="ucbStampBox" style="padding-top:25px;">ADHESIVE STAMP</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				
			</div>
			<div class="col-sm-6" style="text-align:right;">
				<span> Credit No.<input value="" style="width:41%;"></span></br>
				<span> BY AIR MAIL/CABLE <input value="" style="width:30%;"></span></br>
				<span> Date <input value="" style="width:47%;"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h5 style="font-weight:bold;"><center>APPLICATION AND AGREEMENT FOR CONFIRMED IRREVOCABLE WITHOUT</br> RECOURSE TO DRAWERS LETTER OF CREDIT.</center></h5>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p><span style="width:3%;">I/We</span>  <input value="<?php echo $row['openers_name']; ?> , <?php echo $row['openers_address']; ?>" style="width:97%;"></br>
				<small style="padding-left:400px;">(Name and Full Address of openers)</small></br>
				 <input value="" style="width:100%;"></input></br>
				 <input value="" style="width:100%;"></input></br>
				 hereby request you establish by Air mail/Cable on my/our behalf a confirmed irrevocable letter of Credit without recourse infavour of </br>
				 <span style="width:2%;">M/S</span>  <input value="<?php echo $row['beneficiary_name']; ?>, <?php echo $row['beneficiary_address']; ?>" style="width:97%;"></input></br>
				<small style="padding-left:400px;">(Name and Full Address of beneficiary)</small></br>
				 <input value="" style="width:100%;"></input></br>
				and instruct your foreign Correspondents to negotiate the drafts drawn on us at <input value="" style="width:40%;"></input> sight without
				recourse to them to the extent of <input value="<?php 
										$dataresult =   getDataRowByTableAndId('currency', $row['currency']);
										$currency = (isset($dataresult) && !empty($dataresult) ? $dataresult->currency_name : '');
										echo $row['lc_amount'] .' '. $currency ; ?>" style="width:30%;"> Equivalent Tk. <input value="" style="width:41%;"> </br>
				for full Invoice value of shipment(s) purporting to be <input value="" style="width:69%;"></input></br>
				<input value="" style="width:100%;"></input></br>
				<small style="padding-left:400px;">(Nature of goods quantity, if necessary)</small></br>
				<input value="" style="width:100%;"></input></br>
				<input value="" style="width:100%;"></input></br>
				as per Indent No.<input value="" style="width:55%;"> dated <input value="" style="width:30%;"></br>
				<span style="width:10%;">of Messrs</span>  <input value="" style="width:94%;"></br>
				<small style="padding-left:400px;">(Name of indentor)</small></br>
				accompanied by the following documents : </br>
					<span style="padding-left:150px;">(a) Signed invoices in octuplicate certifying merchandise to be of <input value="" style="width:40%;"> origin</span>
					<span style="padding-left:150px;">(b) Full set of clean "Shipped on board" Ocean Bills of Lading drawn or endorsed to the order of National Credit and Commerce bank Ltd.</span>
					<span style="padding-left:165px;"> showing freight prepaid/freight to pay marked notify openers <input value="" style="width:46%;"></span></br>
					<span style="padding-left:150px;"><input value="" style="width:85%;"></span></br>
					<span style="padding-left:150px;"><input value="" style="width:85%;"></span></br>
					<span style="padding-left:150px;"><input value="" style="width:85%;"></span></br>
					<span style="padding-left:150px;">(c) Part shipment allowed/prohibited</span></br>
					<span style="padding-left:150px;">(d) Transshipment allowed/prohibited</span></br>
					<span style="padding-left:150px;">(e) Insurance has been arranged in Bangladesh.All shipments under this credit must be advised by the beneficiaries immediately after</span></br>
					<span style="padding-left:165px;"> shipment dirrect to M/S.<input value="" style="width:68%;"></span></br>
					<input value="" style="width:76%;"> and to us and the openers referring to</br>
					<input value="" style="width:45%;"> Cover Notes No. <input value="" style="width:45%;"></br>
					<small style="padding-left:150px;">(Name of Insurance Co.)</small></br>
					giving full details of shipment. A copy of this advice to accompany each set of documents.</br>
					The documents referred to herein should purport to be for shipment from <input value="" style="width:56%;"></br>
					To <input value="" style="width:48%;"> by  <input value="" style="width:48%;"></br>
					<small style="padding-left:150px;">(Name of port in Bangladesh)</small><small style="padding-left:300px;">(State whether by Steamer/Air Freight/Post Parcel)</small></br>
					<span style="padding-left:150px;">Bills of Lading must be dated not later than <input value="" style="width:58%;"> </span></br>
					<span style="padding-left:150px;">Bills of Exchange must be negotiated not later than <input value="" style="width:53%;"> </span></br>
					<span style="padding-left:150px;">Letter of Credit valid upto <input value="" style="width:68%;"> </span></br>
					<span style="padding-left:150px;">Additional conditions and instructions :</span></br>
				 <input value="" style="width:100%;"></br>
				 <input value="" style="width:100%;"></br>
				 <input value="" style="width:100%;"></br>
				<span style="padding-left:74px;">I/We hareby declare that I/We holld C.C.I & E Registration No <input value="" style="width:27%;"> dated <input value="" style="width:25%;"></span></br>
				and I/We have been issued import L C A(s) No. <input value="" style="width:72%;"></br>
				dated <input value="" style="width:25%;"> for Tk. <input value="" style="width:28%;">valid upto <input value="" style="width:28%;"> which</br>
				L C A(s) is/are valid and effective. The goods are covered under section <input value="" style="width:22%;"> Group part <input value="" style="width:12%;">Page No. <input value="" style="width:12%;"></br>
				Serial No. <input value="" style="width:10%;">Import policy order <input value="" style="width:10%;"> to <input value="" style="width:10%;"> under Import Control Regulations Act.Notwithstanding any subsequent invalidation or cancelation to the said licence/L C A. I/We shall be bound to remburse to you the amount due or any other charge and expenses incurred by you and your correspondents by reason of establishment and/or negotiation or payments under the letter of credit established under these Instructions.</br>
				<span style="padding-left:74px;">This credit shall be deemed to have benn issued when advice thereof has been dispatched to the beneficiaries.</span></br>
				<span style="padding-left:74px;">in consideration of your opening and irrevocable letter of credit on the above terms and conditions. I/We unconditionally agree as per terms and conditions over-leaf.</span></br>
				 <!-- <input value="" style="width:100%;"></br> -->
				 <center class="brdr">FOR USE OF BANK ONLY</center>
				 <div class="row">
					<div class="col-sm-3">
						<p class="BottomBox">
							<span>Margin @ <input value="" style="width:70%;"><span></br>
							<span>Sanctioned by <input value="" style="width:56%;"><span>
						</p>
						<p style="text-align:right;">
							L C Advised on <input value="" style="width:50%;"></br>
							(Dated) <input value="" style="width:60%;">
						</p>
					</div>
					<div class="col-sm-6"></div>
					<div class="col-sm-3" style="text-align:right;">
						<p style="text-align:right;">
							Margin realised <input value="" style="width:50%;"></br>
							Charges realised <input value="" style="width:50%;"></br>
							Licence endorsed <input value="" style="width:50%;">
						</p>
					</div>
				</div>
				FEI 001
				</p>
			</div>
		</div>
		
		
	</div>
</div>
<center style="padding-bottom:5px;">
<button type="button" class="btn btn-info" onclick="window.location.href='lc_commercial_list.php';"><i class="nav-icon fas fa-bars"></i> Back To LC List</button> 
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