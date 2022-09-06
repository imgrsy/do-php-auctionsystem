<?php
$winlf4 = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 1')->fetch_assoc()['bid_pilotname']);
$winlf4_lf4_2 = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 6')->fetch_assoc()['bid_pilotname']);
$winlf4_lf4_3 = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 7')->fetch_assoc()['bid_pilotname']);
$winlf4_lf4_4 = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 8')->fetch_assoc()['bid_pilotname']);
$winhercul = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 2')->fetch_assoc()['bid_pilotname']);
$winhavoc = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 3')->fetch_assoc()['bid_pilotname']);
$winapis = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 4')->fetch_assoc()['bid_pilotname']);
$winzeus = ($mysqli->query('SELECT bid_pilotname FROM bid_system WHERE bid_id = 5')->fetch_assoc()['bid_pilotname']);

$winlf4_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 1')->fetch_assoc()['bid_credit']);
$winlf4_lf4_2_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 6')->fetch_assoc()['bid_credit']);
$winlf4_lf4_3_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 7')->fetch_assoc()['bid_credit']);
$winlf4_lf4_4_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 8')->fetch_assoc()['bid_credit']);
$winhercul_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 2')->fetch_assoc()['bid_credit']);
$winhavoc_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 3')->fetch_assoc()['bid_credit']);
$winapis_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 4')->fetch_assoc()['bid_credit']);
$winzeus_bid = ($mysqli->query('SELECT bid_credit FROM bid_system WHERE bid_id = 5')->fetch_assoc()['bid_credit']);
?>


   

<?php if( $player['rankId'] != 22) { ?>
<div id="main">
    <div class="container">
        <div class="row">
            <?php require_once(INCLUDES . 'data.php'); ?>
           <?php $mysqli = Database::GetInstance();?>
		    
        <div class="row">
         
            <div class="col s12">
			
               <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
			   <b>No refunds if other pilots switch to your offer.</b>
			   <br>
			   <b>The auction is hourly, renewed per hour.</b>
			   <br>
			   <b style="color: red;">it works but buy it at the closed convenience shop</b>
                </div>
            </div>
        </div>

            <div class="col s12">
			
               <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
				<img src="<?php echo DOMAIN; ?>/do_img/global/items/equipment/weapon/laser/lf-4_63x63.png">
				<br>
					<?php echo "Weapon LF4"?>
				 <br>
							
					Highest Bid: <b style="color:#957c0a;"><?php echo $winlf4; ?></b>
					<br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winlf4_bid; ?></a>
				
                    <form id="acik_arttirma" method="post">   
								
                        Credit Offer:<input style="color:white" type="number" name="bid_credit" id="bid_credit" required>
						
                        
						<div style="background-color: transparent;" class="card-action">
                            <div class="row">
								<input type="submit" value="Give Offer LF4" class="buy button modal-trigger">
                            </div>
                        </div>
						
                    
								<?php if(isset($_POST['bid_credit'])){
								$bid_credit = $_POST['bid_credit']; 
								acik_arttirma($bid_credit);
								} ?>
                    
					</form>
					
                </div>
            </div>
            <!--- --->
           <!-- <div class="col s12">
			
            <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
             <img src="<?php echo DOMAIN; ?>/do_img/global/items/equipment/weapon/laser/lf-4_63x63.png">
             <br>
                 <?php echo "Weapon LF4 SLOT2"?>
              <br>
                         
                 Highest Bid: <b style="color:#957c0a;"><?php echo $winlf4_lf4_2; ?></b>
				 <br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winlf4_lf4_2_bid; ?></a>
             
                 <form id="acik_arttirma" method="post">   
                             
                     Credit Offer:<input style="color:white" type="number" name="bid_credit_lf4_2" id="bid_credit_lf4_2" required>
                     
                     
                     <div style="background-color: transparent;" class="card-action">
                         <div class="row">
                             <input type="submit" value="Give Offer LF4 SLOT2" class="buy button modal-trigger">
                         </div>
                     </div>
                     
                 
                             <?php if(isset($_POST['bid_credit_lf4_2'])){
                             $bid_credit_lf4_2 = $_POST['bid_credit_lf4_2']; 
                             acik_arttirma_lf4_2($bid_credit_lf4_2);
                             } ?>
                 
                 </form>
                 
             </div>
         </div> -->

         <!--- --->

           <!--- --->
           <div class="col s12">
			
            <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
             <img src="<?php echo DOMAIN; ?>/do_img/global/items/equipment/weapon/laser/lf-4_63x63.png">
             <br>
                 <?php echo "Weapon LF4 Uri"?>
              <br>
                         
                 Highest Bid: <b style="color:#957c0a;"><?php echo $winlf4_lf4_3; ?></b>
				 <br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winlf4_lf4_3_bid; ?></a>
             
                 <form id="acik_arttirma" method="post">   
                             
                     Uridium Offer:<input style="color:white" type="number" name="bid_credit_lf4_3" id="bid_credit_lf4_3" required>
                     
                     
                     <div style="background-color: transparent;" class="card-action">
                         <div class="row">
                             <input type="submit" value="Give Offer LF4 SLOT3" class="buy button modal-trigger">
                         </div>
                     </div>
                     
                 
                             <?php if(isset($_POST['bid_credit_lf4_3'])){
                             $bid_credit_lf4_3 = $_POST['bid_credit_lf4_3']; 
                             acik_arttirma_lf4_3($bid_credit_lf4_3);
                             } ?>
                 
                 </form>
                 
             </div>
         </div>

         <!--- --->


           <!--- --->
           <!--<div class="col s12">
			
            <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
             <img src="<?php echo DOMAIN; ?>/do_img/global/items/equipment/weapon/laser/lf-4_63x63.png">
             <br>
                 <?php echo "Weapon LF4 SLOT4"?>
              <br>
                         
                 Highest Bid: <b style="color:#957c0a;"><?php echo $winlf4_lf4_4; ?></b>
				  <br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winlf4_lf4_4_bid; ?></a>
				 
             
                 <form id="acik_arttirma" method="post">   
                             
                     Uridium Offer:<input style="color:white" type="number" name="bid_credit_lf4_4" id="bid_credit_lf4_4" required>
                     
                     
                     <div style="background-color: transparent;" class="card-action">
                         <div class="row">
                             <input type="submit" value="Give Offer LF4 SLOT4" class="buy button modal-trigger">
                         </div>
                     </div>
                     
                 
                             <?php if(isset($_POST['bid_credit_lf4_4'])){
                             $bid_credit_lf4_4 = $_POST['bid_credit_lf4_4']; 
                             acik_arttirma_lf4_4($bid_credit_lf4_4);
                             } ?>
                 
                 </form>
                 
             </div>
         </div> -->

         <!--- --->



        </div>
    </div>
	
	<!-- asd -->
	
	 <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
				<img src="<?php echo DOMAIN; ?>/do_img/global/items/drone/designs/hercules_63x63.png">
				<br>
				<?php echo "Droid Desings Hercules"?>
				<br>
						Highest Bid: <b style="color:#957c0a;"><?php echo $winhercul; ?></b>
						 <br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winhercul_bid; ?></a>
                    <form id="acik_arttirmahercul" method="post">                     
                        Uridium Offer:<input style="color:white" type="number" name="bid_hercul" id="bid_hercul" required>
                        <div style="background-color: transparent;" class="card-action">
                            <div class="row">
							<input type="submit" value="Give Offer HERCUL" class="buy button modal-trigger">
                             </div>
                            </div>
						
							<?php if(isset($_POST['bid_hercul'])){
							$bid_hercul = $_POST['bid_hercul']; 
							acik_arttirmahercul($bid_hercul);
							} ?>
                    
					</form>

                </div>
            </div>
        </div>
    </div>
				
				
			<!-- havoc -->
			<div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
				<img src="<?php echo DOMAIN; ?>/do_img/global/items/drone/designs/havoc_63x63.png">
				<br>
				<?php echo "Droid Desings Havoc"?>
				<br>
					Highest Bid: <b style="color:#957c0a;"><?php echo $winhavoc; ?></b>
					<br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winhavoc_bid; ?></a>
					
                    <form id="acik_arttirmahavoc" method="post">                     
                        Uridium Offer:<input style="color:white" type="number" name="bid_havoc" id="bid_havoc" required>
                        
						 <div style="background-color: transparent;" class="card-action">
                            <div class="row">
							<input type="submit" value="Give Offer Havoc" class="buy button modal-trigger">
                             </div>
                            </div>
						
							<?php if(isset($_POST['bid_havoc'])){
							$bid_havoc = $_POST['bid_havoc']; 
							acik_arttirmahavoc($bid_havoc);
							} ?>
                    
					</form>

                </div>
            </div>
        </div>
    </div>
	
	<!-- APIS -->
	
    <div class="container">
        <div class="row">
            <?php require_once(INCLUDES . 'data.php'); ?>
           <?php $mysqli = Database::GetInstance();?>
            <div class="col s12">
               <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
					<img src="<?php echo DOMAIN; ?>/do_img/global/items/drone/apis-5_63x63.png">
				<br>
					<?php echo "APIS DROID"?>
				 <br>
							
					Highest Bid: <b style="color:#957c0a;"><?php echo $winapis; ?></b>
					<br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winapis_bid; ?></a>
				
                    <form id="acik_arttirma_apis" method="post">   
								
                         Uridium Offer:<input style="color:white" type="number" name="bid_apis" id="bid_apis" required>
						
                        
						<div style="background-color: transparent;" class="card-action">
                            <div class="row">
								<input type="submit" value="Give Offer APIS" class="buy button modal-trigger">
                            </div>
                        </div>
						
                    
								<?php if(isset($_POST['bid_apis'])){
								$bid_apis = $_POST['bid_apis']; 
								acik_arttirma_apis($bid_apis);
								} ?>
                    
					</form>
					
                </div>
            </div>
        </div>
    </div>
	
	
	<!-- Zeus -->
	<div class="container">
        <div class="row">
            <?php require_once(INCLUDES . 'data.php'); ?>
           <?php $mysqli = Database::GetInstance();?>
            <div class="col s12">
               <div class="card white-text center padding-15" style="background-color: #00141a; box-shadow: inset 0px 0px 25px 1px #004e66;">
					<img src="<?php echo DOMAIN; ?>/do_img/global/items/drone/zeus-5_63x63.png">
				<br>
					<?php echo "ZEUS DROID"?>
				 <br>
							
					Highest Bid: <b style="color:#957c0a;"><?php echo $winzeus; ?></b>
					<br>
					Highest Offer: <a style="color:#957c0a;"><?php echo $winzeus_bid; ?></a>
				
                    <form id="acik_arttirma_zeus" method="post">   
								
                        Uridium Offer:<input style="color:white" type="number" name="bid_zeus" id="bid_zeus" required>
						
                        
						<div style="background-color: transparent;" class="card-action">
                            <div class="row">
								<input type="submit" value="Give Offer ZEUS" class="buy button modal-trigger">
                            </div>
                        </div>
						
                    
								<?php if(isset($_POST['bid_zeus'])){
								$bid_zeus = $_POST['bid_zeus']; 
								acik_arttirma_zeus($bid_zeus);
								} ?>
                    
					</form>
					
                </div>
            </div>
        </div>
    </div>
	
	
					
					 <script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>
	
</div>
<?php } ?>
 <?php $mysqli->close(); ?>