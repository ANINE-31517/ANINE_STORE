<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Order Placement (Process)
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
    <section class="header" style="min-height: 100vh;">		
	    <div class="sign-in-payment-div">
		    <div>
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
				<span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong style="color: #777; text-shadow: 3px 3px 3px #777;">Sign In</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong id="delivery-blink" style="color: #777;">Payment</strong></span>
            </div>			
        </div>
        <div id="A9-STORE-overlay"></div>		
		<div class="sign-in-payment-div2" style="height: 90%;">
		    <div><br><strong style="color: #777; text-shadow: 3px 3px 3px #777;">Delivery Address</strong></div>
		    <div style="text-align: right; padding: 0px 10px; text-shadow: 3px 3px 3px #444;"><br><br><br>Place Order</div>
		</div>
        <svg height="90" width="87" style="position: absolute; left: 9%; top: 3%;">
            <g fill="none" stroke="#777" stroke-width="4">
               <path stroke-dasharray="10,10" d="M25 80 l215 -170" />
            </g>
        </svg>
        <svg height="80" width="200" style="position: absolute; left: 10.8%; top: 7.5%;">
            <g fill="none" stroke="#777" stroke-width="4">
               <path stroke-dasharray="10,10" d="M0 50 l215 -60" />
            </g>
        </svg>	
        <svg id="delivery-blink" height="150" width="300" style="position: absolute; left: 8%; top: 7%;>
            <g fill="none" stroke="#777" stroke-width="4">
               <path stroke-dasharray="10,10" d="M20 163 1200 -800" />
            </g>
        </svg>		
        <div class="main-payment-page">
		    <div class="sub-1-payment-page">
			    <h3>Select a payment mode</h3>
			</div>
			<div style="padding: 2px 20px;" class="sub-2-payment-page">
			    <div>
				    <form>
					    <div class="sup-3-payment-page">
					        <span><input type="radio" name="type" id="radio-for-add-debit-credit-card" autocomplete="off" /> Add Debit/Credit Card</span>
                            <div class="sub-3-payment-page">
                                <img style="width: 50px; height: 30px;" src="images/visa.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/rupay.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/american-express.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/discover.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/mastercard.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/maestro.jpg" />
                            </div>
                            <div id="selected-add-card-main-div">
							    <div class="selected-add-card-div">
								    <br><br><br>
								    <a id="open-add-debit-credit-card-div"> Add a Debit/Credit Card</a>
									<span><i class="fa fa-info-circle"></i> A9 STORE.com accepts all above shown cards<span>
								</div>
                            </div>	
						</div>
						<div class="sup-3-payment-page">
					        <span><input type="radio" name="type" id="rad1" autocomplete="off" /> Net Banking</span>
						    <div class="sub-3-payment-page">
						        <select id="bank-name-id" class="net-banking-drop-down" name="Bank-choices">
						    	    <option value="">Choose an option</option>
						    	    <option value="1">Airtel Payments Bank</option>
						    	    <option value="2">Axis Bank</option>
						    	    <option value="3">HDFC Bank</option>
						    	    <option value="4">ICICI Bank</option>
						    	    <option value="5">Kotak Bank</option>
						    	    <option value="6">State Bank Of India</option>
						    	</select>
								<select id="pseudo-select" style="display: none;">
								    <option id="pseudo-drop-down"></option>
								</select>
						    </div>
						</div>						
						<div class="sup-3-payment-page">
					        <span><input type="radio" name="type" id="rad2" autocomplete="off" /> Pay On Delivery</span>	
                        </div>		
                        <div id="add-debit-credit-card-pop-up-div" style="display: none;">
						    <div class="add-debit-credit-card-pop-up-sub-div">
							    <div class="add-debit-credit-card-pop-up-sub-div-1">
								    <h4>Add a Debit/Credit Card</h4>
									<span id="times" title="Close">&times;</span>
								</div>
								<div class="add-debit-credit-card-pop-up-sub-div-2">
								    <form>
							            <ul>
							                <li>
									           <label for="card-number">&nbsp;&nbsp; Card Number</label><input style="margin-left: 2%;" id="input1" name="card-number" type="text" autocomplete="off" />
									    	</li>
							                <li>
									    	    <label for="name-on-card">Name On Card</label><input style="margin-left: 2.2%;" id="input2" name="name-on-card" type="text" autocomplete="off" />
									    	</li>
							                <li>
									    	    <label for="mon&year">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expiry Date</label>
							                    <select id="input3" style="margin-left: 1.6%;" name="mon&year">
									    		    <option value="">Mon</option>
							    	                <option value="1">01</option>
							    	                <option value="2">02</option>
							    	                <option value="3">03</option>
							    	                <option value="4">04</option>
							    	                <option value="5">05</option>
							    	                <option value="6">06</option>
							    	                <option value="7">07</option>
							    	                <option value="8">08</option>
							    	                <option value="9">09</option>
							    	                <option value="10">10</option>
							    	                <option value="11">11</option>
							    	                <option value="12">12</option>
							    	            </select>
							                    <select id="input4">
									    		    <option value="">Year</option>
							    	                <option value="1">2022</option>
							    	                <option value="2">2023</option>
							    	                <option value="3">2024</option>
							    	                <option value="4">2025</option>
							    	                <option value="5">2026</option>
							    	                <option value="6">2027</option>
							    	                <option value="7">2028</option>
							    	                <option value="8">2029</option>
							    	                <option value="9">2030</option>
							    	                <option value="10">2031</option>
							    	                <option value="11">2032</option>
							    	                <option value="12">2033</option>
							    	                <option value="13">2034</option>
							    	                <option value="14">2035</option>
							    	                <option value="15">2036</option>
							    	                <option value="16">2037</option>
							    	                <option value="17">2038</option>
							    	                <option value="18">2039</option>
							    	                <option value="19">2040</option>
							    	                <option value="20">2041</option>
							    	                <option value="21">2042</option>
							    	            </select>											
							                </li>
							            </ul>
									</form>
								</div>
								<div style="position: absolute; background: rgba(0, 0, 0, 0.7); width: 3px; height: 50%; left: 50%; top: 25%; box-shadow: 0px 0px 3px 0.5px rgba(0, 0, 0, 0.7);"></div>
								<div style="position: absolute; left: 52%; top: 25%;">
								    <h5>A9 STORE.com accepts all below shown cards</h5>
									<span<img style="width: 50px; height: 30px;" src="images/visa.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/rupay.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/american-express.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/discover.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/mastercard.jpg" /><img style="width: 50px; height: 30px; margin-left: 10px;" src="images/maestro.jpg" /></span>
								</div>
								<div class="add-debit-credit-card-pop-up-sub-div-3"> 
								    <button style="margin-left: 78%;" id="cancel-button">Cancel</button>
								    <button id="add-card">Add Card</button>
								</div>
								<div id="all-messages">
								    <ul>
                                        <span style="display: none;" id="message-1"><li>Enter a valid Card Number</li></span>								
                                        <span style="display: none;" id="message-2"><li>Name on Card is Required</li></span>							
                                        <span style="display: none;" id="message-3"><li>Expiry Date is Required</li></span>	
									</ul>
                                </div>								
							</div>
                        </div>								
					</form>
                </div>					
			</div>
			<div style="padding: 2px 20px;" class="sub-2-payment-page">
			    <a href="placeorder.php"><button id="continue-button" class="continue-button">Continue<span id="cross-check-tooltip" class="cross-check-tooltip">Select a payment mode</span></button></a>
                <span id="line-check-tooltip" class="line-check-tooltip" style="display: none;"><i class="fa fa-info-circle" style="text-shadow: none;"></i> Select a bank !</span>
                <span id="line-check-tooltip-1" class="line-check-tooltip" style="display: none; padding: 0px 8px;"><i class="fa fa-info-circle" style="text-shadow: none;"></i> Add a Debit/Credit Card !</span>
			</div>
        </div>
	    <div class="running-time" style="position: absolute; bottom: 0; background: linear-gradient(90deg, rgba(0, 0, 0, 0.5) 0%, RGB(239, 192, 80) 50%, rgba(0, 0, 0, 0.5) 100%);">
		    <h6>&#169; 2021-2022 , A9 STORE.com, Inc. | <a href="Terms-of-use.php">Terms Of Use</a> | <a href="Privacy-policy.php">Privacy Policy</a> | <a href="Return-policy.php">Return Policy</a></h6>
		</div>		
    </section>	
    <!-- section-end -->
	
	<!--JAVASCRIPT-->
    <script type="text/javascript">
		const button = document.getElementById("continue-button");
		const btn = document.querySelector(".continue-button");
		const radios = document.querySelectorAll('input[name="type"]');
		var state=0;var count;var select;var add=0;
		btn.addEventListener("mouseover", ()=>{	
		    select = document.getElementById("bank-name-id").value;						
            count=0;						
		    for(const radio of radios){
			    if(radio.checked){
		            document.getElementById("cross-check-tooltip").style.display = "none";	
					if(count === 0)
					    add=1;
					else if(count === 1){
                        state=1;add=0;
                    }else{
                        state=0;add=0;
                    }										
		        }else{
		            document.getElementById("cross-check-tooltip").style.visibilty = "visible";
                }count++;
            }						
		}); 						
		btn.addEventListener("mouseleave", ()=>{
			document.getElementById("cross-check-tooltip").style.visibilty = "hidden";
			console.log(add);
		});						
        button.addEventListener("click", (e)=>{
		    for(const rad of radios){
			    if(!rad.checked || ((state === 1)&&(select === "")) || add === 1){
				    e.preventDefault();
				}else{
				    window.location = "placeorder.php";
				}
			}
		});
		button.addEventListener("click", (e)=>{
		    if(state === 1){
			    if(select === ""){
				    document.getElementById("line-check-tooltip").style.display = "block";
				    document.getElementById("line-check-tooltip-1").style.display = "none";
				}else
				    document.getElementById("line-check-tooltip").style.display = "none";
			}if(add === 1){
			    document.getElementById("line-check-tooltip-1").style.display = "block";
			    document.getElementById("line-check-tooltip").style.display = "none";
			}else{
			    document.getElementById("line-check-tooltip-1").style.display = "none";							    
			}
		});			

		$("#open-add-debit-credit-card-div").click(function(){
		    document.getElementById("add-debit-credit-card-pop-up-div").style.display = "block";
		    document.getElementById("A9-STORE-overlay").style.display = "block";								
		});						
		$("#times").click(function(){
		    document.getElementById("add-debit-credit-card-pop-up-div").style.display = "none";
		    document.getElementById("A9-STORE-overlay").style.display = "none";								
		});								
		
		$("#add-card").click(function(){
		    var input1 = document.getElementById("input1").value;
		    var input2 = document.getElementById("input2").value;
		    var input3 = document.getElementById("input3").value;
		    var input4 = document.getElementById("input4").value;
		    if((input1 === "") && (input2 === "") && (input3 === "" || input4 === "")){
			    document.getElementById("message-1").style.display = "block";
			    document.getElementById("message-2").style.display = "block";
			    document.getElementById("message-3").style.display = "block";
			    document.getElementById("all-messages").style.display = "block";	
                return false;									
			}else if(input1 === ""){
			    document.getElementById("message-1").style.display = "block";
			    document.getElementById("message-2").style.display = "none";
			    document.getElementById("message-3").style.display = "none";
			    document.getElementById("all-messages").style.display = "block";										
				return false;
			}else if(input2 === ""){
			    document.getElementById("message-2").style.display = "block";
			    document.getElementById("message-1").style.display = "none";
			    document.getElementById("message-3").style.display = "none";
			    document.getElementById("all-messages").style.display = "block";										
                return false;									
            }else if(input3 === "" || input4 === ""){
			    document.getElementById("message-2").style.display = "none";
			    document.getElementById("message-1").style.display = "none";
			    document.getElementById("message-3").style.display = "block";
			    document.getElementById("all-messages").style.display = "block";	
                return false;									
			}else{
			    document.getElementById("all-messages").style.display = "none";										
                return true;									
			}																
		});
		$("#cancel-button").click(function(){
            var input1 = document.getElementById("input1");
            var input2 = document.getElementById("input2");
			if(input1 !== "" || input2 !== ""){
		        input1.value = "";
		        input2.value = "";
			
			}
			document.getElementById("add-debit-credit-card-pop-up-div").style.display = "none";
			document.getElementById("A9-STORE-overlay").style.display = "none";
			return false;
		});
        $('#rad1').click(function(){
		    document.getElementById('selected-add-card-main-div').style.display = "none";
		});	
        $('#rad2').click(function(){
		    document.getElementById('selected-add-card-main-div').style.display = "none";
		});		
		$(document).ready(function(){
		    $('.net-banking-drop-down').change(function(){
			    $('#pseudo-drop-down').html($('.net-banking-drop-down option:selected').text()); 
			    $(this).width($('#pseudo-select').width()); 
			});
		});
		
        var rad = document.getElementById('radio-for-add-debit-credit-card');								 								
        rad.addEventListener("click",function(){
		    document.getElementById("selected-add-card-main-div").style.display = "block";
		});	
    </script>	
</body>
</html>