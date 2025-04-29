<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Address Edit [Order Placement (Process)]
    </title>
    <link rel="icon" type="image/jpg" href="Images/A9-STORE.jpg" />
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content=" A9 STORE.com : Online Shopping Site In India For Ladies Footwear(All)" />
    <meta name="keywords" content=" A9 STORE.com : Online Shopping Site In India For Ladies Footwear(Stilettoes , high-heels , heeled-boots , ankle-straps , t-straps)" />
    <meta name="google" content="nositelinksearchbox" />
    <meta name="google-site-verification" content="" />
    <link rel="canonical" href="" />
    <link rel="stylesheet" href="Css/style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,600;1,700&display=swap" />	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://kit.fontawesome.com/8f45f87de7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <!-- section-start -->
    <section style="min-height: 50vh; width: 100%;">		
	    <div class="sign-in-payment-div" style="background: linear-gradient(90deg, RGB(239, 192, 80) 0%, RGB(239, 192, 80) 60%, rgba(0, 0, 0, 0.5) 100%);">
		    <div>
			    <!-- company's-logo -->
			    <a href="HOME.php" id="A9-STORE-logo">
			        <div>
                        <svg height="40" width="80">
                            <path d="M 10 30 l 12 -30" stroke="#DC143C" stroke-width="4" fill="none" />
                            <path d="M 22 0 l 15 40" stroke="#DC143C" stroke-width="4" fill="none" />
                            <path d="M 15 20 l 15 0" stroke="#DC143C" stroke-width="4" fill="none" />
                            <g font-size="15" font-weight="bold" font-family="sans-serif" fill="#DC143C" stroke="none" text-anchor="middle">
                                <text x="50" y="22">NINE</text>
                                <text x="48" y="35">STORE</text>
                            </g>
                        </svg>				
			    	</div>		
			    </a>
				<span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong style="color: #777; text-shadow: 3px 3px 3px #777;">Sign In</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="text-shadow: 3px 3px 3px #444;">Payment</span></span>
            </div>			
        </div>		
		<div class="sign-in-payment-div2" style="height: 180%;">
		    <div id="delivery-blink"><br><strong style="color: #777;">Delivery Address</strong></div>
		    <div style="text-align: right; padding: 0px 10px; text-shadow: 3px 3px 3px #444;"><br><br><br>Place Order</div>
		</div>
        <svg height="90" width="87" style="position: absolute; left: 9%; top: 3%;">
            <g fill="none" stroke="#777" stroke-width="4">
               <path stroke-dasharray="10,10" d="M25 80 l215 -170" />
            </g>
        </svg>
        <svg id="delivery-blink" height="80" width="200" style="position: absolute; left: 10.8%; top: 7.5%;">
            <g fill="none" stroke="#777" stroke-width="4">
               <path stroke-dasharray="10,10" d="M0 50 l215 -60" />
            </g>
        </svg>	
        <svg height="150" width="300" style="position: absolute; left: 8%; top: 7%;>
            <g fill="none" stroke="#dddddd" stroke-width="4">
               <path stroke-dasharray="10,10" d="M20 163 1200 -800" />
            </g>
        </svg>	
		<div class="address-1-div" style="height: 170%;">
		    <div class="address-2-div">
			    <h2>Edit your default address</h2>
				<div class="new-address-sub-div-2" style="top: 12%;">
				    <form>
					    <fieldset>
				            <legend>Name</legend>
                            <input type="text" name="name" autocomplete="off" />
						</fieldset>
						<fieldset>
				            <legend>House No. , Flat , Apartment , Company</legend>
                            <input type="text" name="name" autocomplete="off" />
						</fieldset>
						<fieldset>
				            <legend>Area , Sector , Block , Colony , Street</legend>
                            <input type="text" name="name" autocomplete="off" />	
						</fieldset>
						<fieldset>
				            <legend>City , Town , Village</legend>
                            <input type="text" name="name" autocomplete="off" />	
                        </fieldset>	
                        <fieldset>						
				            <legend>Postal Number(Pincode)</legend>
                            <input type="text" name="name" placeholder="6 digits [e.g.-(208011)]" autocomplete="off" />	
                        </fieldset>
                        <fieldset> 						
				            <legend>Landmark</legend>
                            <input type="text" name="name" placeholder="e.g.-Near Meenakshee Path Labs" autocomplete="off" />
                        </fieldset>	
                        <fieldset>						
				            <legend for="name">Mobile Number</legend>						
                            <input type="text" name="name" placeholder="10 digit-(No prefixes)" autocomplete="off" />
						</fieldset>
                        <fieldset>						
				            <legend for="name">State / Union Territories</legend>						
                            <select class="state-drop-down" name="States">
							    <option value="0">Select State</option>
							    <option value="1">Andaman and Nicobar Islands</option>
							    <option value="2">Andhra Pradesh</option>
							    <option value="3">Arunachal Pradesh</option>
							    <option value="4">Assam</option>
							    <option value="5">Bihar</option>
							    <option value="6">Chandigarh</option>
							    <option value="7">Chhattisgarh</option>
							    <option value="8">Dadra and Nagar Haveli</option>
							    <option value="9">Daman and Diu</option>
							    <option value="10">Delhi (NCR) & (NCT)</option>
							    <option value="11">Goa</option>
							    <option value="12">Gujrat</option>								
							    <option value="13">Haryana</option>
							    <option value="14">Himachal Pradesh</option>
							    <option value="15">Jammu & Kashmir</option>
							    <option value="16">Jharkhand</option>
							    <option value="17">Karnataka</option>
							    <option value="18">Kerala</option>
							    <option value="19">Lakshadweep</option>
							    <option value="20">Madhya Pradesh</option>
							    <option value="21">Maharashtra</option>
							    <option value="22">Manipur</option>
							    <option value="23">Meghalaya</option>
							    <option value="24">Mizoram</option>
							    <option value="25">Nagaland</option>
							    <option value="26">Odisha</option>
							    <option value="27">Puducherry (Pondicherry)</option>
							    <option value="28">Punjab</option>
							    <option value="29">Rajasthan</option>
							    <option value="30">Sikkim</option>
							    <option value="31">Tamil Nadu</option>
							    <option value="32">Telangana</option>
							    <option value="33">Tripura</option>
							    <option value="34">Uttar Pradesh</option>
							    <option value="35">Uttarakhand</option>
							    <option value="36">West Bengal</option>
							</select>
						</fieldset>		
                        <div class="new-address-sub-div-3">						
						    <fieldset>
                                <legend><h3>Delivery instructions</h3></legend>
						        <p>Instruction helps the platform in planning your delivery.</p>
						    	<div class="new-address-sub-div-4">
				                    <label>Address type</label>
                                    <br><select class="address-type-drop-down" name="address-types">
						    	        <option>Select your preference</option>
						    	        <option>Home/Uncommercial (7AM to 9PM)-Delivery</option>
						    	        <option>Office/Commercial (9AM to 5PM)-Delivery</option>
                                    </select>
						    	</div>
						    </fieldset>
						</div>
                        <button id="add-address-button">Save Changes</button>						
                    </form>					
				</div>				
			</div>
		</div>	
    </section>	
    <!-- section-end --> 
	<div class="running-time" style="position: absolute; bottom: -90%; background: linear-gradient(90deg, rgba(0, 0, 0, 0.5) 0%, RGB(239, 192, 80) 50%, rgba(0, 0, 0, 0.5) 100%);">
	    <h6>&#169; 2021-2022 , A9 STORE.com, Inc. | <a href="Terms-of-use.php">Terms Of Use</a> | <a href="Privacy-policy.php">Privacy Policy</a> | <a href="Return-policy.php">Return Policy</a></h6>
	</div> 
    <script type="text/javascript">	
	    $("#add-delivery-instructions1").click(function(){
		    document.getElementById("add-delivery-instructions-id").style.display = "block";
		    document.getElementById("A9-STORE-overlay").style.display = "block";
		});
	    $("#times-add-delivery-instructions").click(function(){
		    document.getElementById("add-delivery-instructions-id").style.display = "none";
		    document.getElementById("A9-STORE-overlay").style.display = "none";
		});	
	    $("#save-instructions").click(function(){
		    document.getElementById("add-delivery-instructions-id").style.display = "none";
		    document.getElementById("A9-STORE-overlay").style.display = "none";
		});		
        let opener = document.getElementsByClassName("address-sub-div-hidden-1");		
        let highlighter = document.getElementsByClassName("light1");
        let highlighterremover = document.getElementById("clear-instruction-button");
        for(var i=0; i<opener.length; i++){
		    opener[i].addEventListener("click", function(){
			    if(highlighter.length > 0){
				    highlighter[0].classList.remove("light1");
				}
				this.classList.add("light1");
			});	
            highlighterremover.addEventListener("click", function(){
			    opener[1].classList.remove("light1");
			    opener[2].classList.remove("light1");
			});			
		}	
        let opener1 = document.getElementsByClassName("address-div-7");		
        let highlighter1 = document.getElementsByClassName("light2");
        for(var i=0; i<opener1.length; i++){
		    opener1[i].addEventListener("click", function(){
			    if(highlighter1.length > 0){
				    highlighter1[0].classList.remove("light2");
				}
				this.classList.add("light2");
			});
		}	
        $("#address-div-7-id2").click(function(){
		    document.getElementById("address-div-hidden-2").style.display = "block";
		    document.getElementById("address-div-hidden-1").style.display = "none";
		});	
        $("#address-div-7-id1").click(function(){
		    document.getElementById("address-div-hidden-1").style.display = "block";
		    document.getElementById("address-div-hidden-2").style.display = "none";
		});		
    </script>  	
</body>
</html>
