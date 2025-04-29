<!DOCTYPE html>
<html>
<head>
    <title>
        A9 STORE (Product Page)
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
    <nav>
	    <a href="HOME.php" id="A9-STORE-logo" style="margin-left: 49%;">
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
        <h2 style="cursor: pointer;" onclick="opencart()" title="Your Shopping Cart" class="shopping-cart" data-target=".cart">
            <svg height="60" width="60">
                <path d="M 9 1 l -20 0" stroke="#DC143C"
                stroke-width="3" fill="none" /> 
                <path d="M 15 20 l -7 -20" stroke="#DC143C"
                stroke-width="3" fill="none" />
                <path d="M 14 20 l 22 0" stroke="#DC143C"
                stroke-width="3" fill="none" />  
                <path d="M 37 23 l -2 -3" stroke="#DC143C"
                stroke-width="3" fill="none" /> 
                <path d="M 13 23 l 2 -3" stroke="#DC143C"
                stroke-width="3" fill="none" />  
                <path d="M 35 20 l 5 -15" stroke="#DC143C"
                stroke-width="3" fill="none" />  
                <circle cx="18" cy="26" r="3.5" stroke="#000000" stroke-width="0.5" fill="#000000"/>
                <circle cx="32" cy="26" r="3.5" stroke="#000000" stroke-width="0.5" fill="#000000"/>
            </svg>	
            <h5 onclick="opencart()" style="cursor: pointer; position: absolute; right: 4%; top: 0%; text-shadow: 1px 1px 1px #DC143C;">Cart</h5>	
            <span style="color: #DC143C; font-weight: bold; right: 2.2%; top: 10px; position: absolute;" class="total-count"></span>					
        </h2>			
	</nav>
	<div id="usercart" class="cart" aria-hidden="true"> 
        <a href="javascript:void(0)" class="close" onclick="closecart()" style="text-decoration: none;"><span id="close2" title="Close">&times;</span></a>
	    <h3 style="text-align: center;">SIDE CART</h3>
	    <div class="lineseparate"></div>
	    <a href="Shoppingcart.php"><button style="margin-left: 8%;" class="go-to-cart">GO TO CART</button></a>
		<a href="sign-in.php"><button class="proceed-to-pay" id="proceed-to-pay">PROCEED TO PAY <span class="cart-empty-tooltip" id="cart-empty-tooltip">Cart is empty !</span></button></a>
	    <div class="lineseparate2"></div>
        <h4 style="color: #000000; text-shadow: 1px 1px 1px #8B8000; margin-left: 10px;">Total : <i id="rupee" class="fa fa-inr"></i> <span class="cart-total"></span></h4>
        <div class="line-separate-1"></div>					
	    <h4 class="selecteditems" style="text-align: center;">SELECTED ITEMS</h4>
	    <div class="line-separate0"></div>
	    <h5 style="margin-top: 10px; background: rgba(255, 165, 0); text-align: center; text-shadow: 1px 1px 1px #ff0000;" id="empty-message"><i class="fa fa-info-circle"></i> Cart is empty !</h5>
	    <div class="new-style" id="new-style">
	    
	    </div>	   					
    </div>				
	<div class="line-separate1"></div>
	<section class="header1">
	    <div class="xzoom-container">
		    <figure id="zoom" class="picZoomer">
				<a href="#"><img id="zoomed-image" src="images/zoom-img-2.jpg" /></a>
			</figure>	
			<h5 class="roll-over-the-image-text">For expanded view click the image</h5>
            <div class="xzoom-thumbs">	
	            <img class="xzoom-gallery active" src="images/zoom-img-2.jpg" /></li>
	            <img class="xzoom-gallery" src="images/zoom-img-3.jpg" /></li>
	            <img class="xzoom-gallery" src="images/zoom-img-4.jpg" /></li>
	            <img class="xzoom-gallery" src="images/zoom-img-5.jpg" /></li>
            </div>						
		</div>			
        <div id="expanded-view">
		    <button id="html-close" title="Close">&times;</button>
			<div style="position: absolute; height: 85%; width: 3px; background: rgba(255, 165, 0); left: 20%; box-shadow: 0px 0px 10px 3px rgba(255, 165, 0);"></div>
		    <div class="expanded-details">
			    <h3>A9 , High Heel with <br> 10cm heel-height , <br> 3cm heel-width, <br> zip (chain), <br> and heel cap</h3>
				<h4>Color: <span style="text-shadow: 1px 1px 1px #DC143C;">Black</span></h4>
			</div>
			<div class="expanded-image">
			    <figure id="expandedimgfigure">
			        <img id="main-image-expanded" src="images/zoom-img-1.jpg" />
			    </figure>
			</div>
			<div class="expanded-all-images">
			    <img class="thumbnails blowingone" src="images/zoom-img-1.jpg " />
			    <img class="thumbnails" src="images/zoom-img-2.jpg" />
	            <img class="thumbnails" src="images/zoom-img-3.jpg" />
	            <img class="thumbnails" src="images/zoom-img-4.jpg" />
	            <img class="thumbnails" src="images/zoom-img-5.jpg" />					
			</div>  								 				
		    <a href="HOME.php" id="A9-STORE-logo" style="bottom: -2%; right: -1%; position: absolute;">
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
        </div>				
        <div style="top: 0;" id="overlay"></div>						
        <div class="main-div-all-details">			
            <div class="page-way">
		        <span><a href="HOME.php" class="home-way">Home</a> > <a href="High-Heels.php" class="home-way">High Heels</a> > A9 Stilleto's </span>
		    </div> 
	        <div class="shareoptions">
	            <h3>Share <i class="fas fa-share-square"></i></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        <ul>
		            <li><a href="https://accounts.google.com/"><i id="sharelogo" style="color: red;" class="fa fa-envelope"></i></a></li>
		            <li><a href="https://twitter.com/"><i id="sharelogo" style="color: blue;" class="fa fa-twitter"></i></a></li>
		        	<li><a href="https://facebook.com/"><i id="sharelogo" style="color: blue;" class="fa fa-facebook-official"></i></a></li>													
		        	<li><a href="https://in.pinterest.com/"><i id="sharelogo" style="color: red;" class="fa fa-pinterest"></i></a></i></li>	
                </ul>					
	        </div>				
	    	<div class="description-of-product">
			    <h5 style="color: #FFD700;">About</h5>
	    	    <span class="detail-stilletoimg">A9 , High Heel with 10cm heel-height 3cm heel-width zip (chain) and heel cap</span>		
	    	</div>
			<div class="description-of-product">
<!--                 <a href="Review.php"><button id="rate-button">Rate The Product</button></a>
                <a href="#review"><i style="color: #ffffff; position: absolute; margin-top: 15.3%; text-shadow: 0.1px 0.1px 0.1px #ffff00; margin-left: 33%; cursor: pointer;" class="fa fa-info-circle" title="More Info"></i></a>	 -->	
                <h5 style="color: #FFD700;">Cost</h5>					
                <div class="stilletoimg-price"><i id="rupee" class="fa fa-inr"></i> 1200.00 (M.R.P.) <br> <i id="rupee" class="fa fa-inr"></i> 1200.00 (Price) <br> <i id="rupee" class="fa fa-inr"></i> 0.00 (0%) (You Save)</div>
                <span class="taxes"> Inclusive of all taxes </span>					
			</div>	
	        <div class="size-chart">
	            <h5 style="color: #ffd700;">Select Size</h5>
	   	        <ul>
	   	            <form>
	   	                <li>
		        		    2 UK/India
		        			<label class="radio-for-size">
		        			    <input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="2" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li>
	   	        	    <li>
		        		    3 UK/India
		        			<label class="radio-for-size">
		        			    <input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="3" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li><br>	
	   	        	    <li>
		        		    4 UK/India
		        			<label class="radio-for-size">
		        			    <input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="4" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li>
	   	        	    <li>
		        		    5 UK/India
		        			<label class="radio-for-size">
    	        				<input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="5" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li><br>
	   	        	    <li>    
		        		    6 UK/India
		        			<label class="radio-for-size">
    	        				<input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="6" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li>
	   	        	    <li>
		        		    7 UK/India
		        			<label class="radio-for-size">
    	        				<input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="7" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li><br>
	   	        	    <li>
		        		    8 UK/India
		        			<label class="radio-for-size">
    	        				<input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="8" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li>
	   	        	    <li>
		        		    9 UK/India
		        			<label class="radio-for-size">
   		        				<input id="radio-id" class="radio-for-size" type="radio" name="size-select" value="9" />
		        		        <span class="fake-radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		        			</label>
		        		</li><br>
	   	        	    <li style="color: #ff0000;">
						    <span id="size-select-clear" onclick="clearradio('size-select');">Deselect</span>
						</li>							
	   	        	</form>
	   	        </ul>
	   	        <a href="#size-chart-hover" style="text-decoration: none;"><h5 onclick="on()" id="size-chart-hover-opener">Compare Size</h5></a>
	   	        <div id="size-chart-hover">
	   	            <span><i onclick="off()" id="size-chart-hover-close" title="Close" class="fa fa-times"></i></span>
	   	            <table style="width: 100%;">
					    <h5>Size-Chart</h5>
	   	        	    <tr>
	   	        		    <th>UK/India Size</th>
	   	        			<th>Rocio Size</th>
	   	        			<th>EU Size</th>
	   	        		</tr>
	   	        		<tr>
	   	        		    <td>2</td>
	   	        			<td>4</td>
	   	        			<td>35</td>
	   	        		</tr>
	   	        		<tr>
	   	        			<td>3</td>
	   	        			<td>5</td>
	   	        			<td>36</td>							
	   	        		</tr>
	   	        		<tr>
	   	        			<td>4</td>
	   	        			<td>6</td>
	   	        			<td>37</td>							
	   	        		</tr>
	   	        		<tr>
	   	        			<td>5</td>
	   	        			<td>7</td>
	   	        			<td>38</td>							
	   	        		</tr>
	   	        		<tr>
	   	        			<td>6</td>
	   	        			<td>8</td>
	   	        			<td>39</td>							
	   	        		</tr>
	   	        		<tr>
	   	        			<td>7</td>
	   	        			<td>9</td>
	   	        			<td>40</td>							
	   	        		</tr>			
	   	        		<tr>
	   	        			<td>8</td>
	   	        			<td>10</td>
	   	        			<td>41</td>							
	   	        		</tr>	
	   	        		<tr>
	   	        			<td>9</td>
	   	        			<td>11</td>
	   	        			<td>42</td>							
	   	        		</tr>							
	   	        	</table>
	   	        </div>
	        </div>
	        <div class="description-of-product">
	    	    <h5 style="color: #ffd700;">Buy Options</h5>
	            <button class="add-to-cart" type="button" data-name="A9 Heeled-Boot(Black)" data-price="1200">Add To Cart</button>
	    		<a href="#"><button id="wishlisticon">Add To Wish List <i id="wishlistlogo" class="fa fa-heart-o"></i></button></a>					
	        </div>			
        </div>	
		<div class="similar-types">
		    <div class="main-separate1"></div>
		    <h4 style="color: #ffd700; text-shadow: 0px 1px 1px #999;">Similar Designs</h4>				
			<div class="on-screen-images" id="on-screen-images3"> 			   
		    	<button class="more-option-btn" id="btn-for-left" style=" opacity: 0.5; margin-top: 1%;"><i class="fa fa-chevron-left"></i></button> 
		        <a href="High-Heels.php"><img src="Images/similar-types-image-1.jpg" id="show-image1" /></a>
			    <a href="High-Heels.php"><img src="Images/similar-types-image-2.jpg" id="show-image2" /></a>
			    <a href="High-Heels.php"><img src="Images/similar-types-image-4.jpg" id="show-image4" /></a>						
			    <a href="High-Heels.php"><img src="Images/similar-types-image-5.jpg" id="show-image5" /></a>
			    <a href="High-Heels.php"><img src="Images/similar-types-image-7.jpg" id="show-image7" /></a>						
			    <a href="High-Heels.php"><img src="Images/similar-types-image-9.jpg" id="show-image9" /></a>						
	    	    <button class="more-option-btn" id="btn-for-right" style="left: 54.8%; margin-top: 1%;"><i class="fa fa-chevron-right"></i></button> 								
		    </div>
		</div>			
		<div class="rest-information-div" style="padding: 15px 25px;">
	    	<div class="delivery-detail" style="padding: 5px 10px; border: 1px solid #ffff00; border-radius: 3px; box-shadow: 0px 3px 8px 0.5px #ffd700;">
	    	    <h4 style="color: #ffd700; text-shadow: 1px 1px 1px #222;">Delivery Details <i onclick="show1()" class="fa fa-chevron-down rotate" id="down-rotate" title="Options"></i></h4>
				<div id="div1" style="display: none;"> 
	    	    	<ul>
	    	    		<li>Deliver Day :</li>
	    	    		<li>Delivery Date :</li>
	    	    		<li>Delivery Cost :</li>
	    	    	</ul>
                </div>						
	    	</div>
	    	<div class="product-detail" style="margin-top: 3%; border: 1px solid #ffff00; padding: 5px 10px; border-radius: 3px; box-shadow: 0px 3px 8px 0.5px #ffd700;">
	    		<h4 style="color: #ffd700; text-shadow: 1px 1px 1px #222;">Specifications &nbsp;&nbsp;<i onclick="show2()" class="fa fa-chevron-down rotate" id="down-rotate" title="Options"></i></h4>
				<div id="div2" style="display: none;">
	    		    <ul>
	    	           <li>Available Status :</li>
	    			   <li>Brand Name :</li>
	    			   <li>Product Name :</li>
	    			   <li>Product Number :</li>
	    			   <li>Department :</li>
	    			   <li>Origin :</li>
	    	        </ul>
                </div>						
	        </div>
	    	<div class="extra-details" style="margin-top: 3%; padding: 5px 10px; border: 1px solid #ffff00; border-radius: 3px; box-shadow: 0px 3px 8px 0.5px #ffd700;">
	    		<h4 style="color: #ffd700; text-shadow: 1px 1px 1px #222;">Extra Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i onclick="show3()" class="fa fa-chevron-down rotate" id="down-rotate" title="Options"></i></h4>		
			    <div id="div3" style="display: none;">
	    			<ul>
	    			    <li>1 Month Returnable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-undo-alt"></i></li>
	    			    <li>1 Month Exchangeable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-exchange" aria-hidden="true"></i></li>
	    			    <li>Delivery By A9 STORE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-truck"></i></li>
	    			    <li>Payment Options Available&nbsp; <i onclick="show()" class="fa fa-chevron-down rotate" id="down-rotate1" title="Options"></i>
	    				    <div id="more-payment-options">
	    				        <ul>
	    					        <li>Cash On Delivery (COD)</li>
	    						    <li>Online Payment (OP)   
                                        <script> 	
	                                        function show(){
	                                            var paymentoptions = document.getElementById("more-payment-options");
	                                                if(paymentoptions.style.display === "flex")
	                                                    paymentoptions.style.display = "none";
	                                                else
	                                            	    paymentoptions.style.display = "flex";	
                                            }												
                                        </script>										
	    							</li>
	    				        </ul>
	    					</div>							
	    				</li>
	    			</ul>	
	    		</div>
			</div>
		</div>		
		<div id="A9-STORE-overlay"></div>			
        <div id="user-login" style="margin-top: -70%;">
		    <span><i style="cursor: pointer;" class="fa fa-times" title="Close" id="login-div-close"></i></span>
		    <h1 style="background: rgba(255, 165, 0); text-shadow: 2px 2px 2px #DC143C;">Login</h1>
			<div id="label-input-div-of-login">
			    <form>
			        <label id="label1" style="text-shadow: 1px 1px 1px #ffff00;" for="email-number-input">Enter Email/Mobile Number</label>
				    <input id="email-number-input" type="text" name="email-number-input" autocomplete="off" />
					<span id="field-validation-1" style="font-size: 11px; color: #ff0000; font-weight: bold; display: none;"><i class="fa fa-info-circle"></i> Required !</span>
			        <fieldset id="login-password-fieldset">	
				        <legend id="forget-legend">Forget?</legend>
				        <label id="label2" style="text-shadow: 1px 1px 1px #ffff00;" for="password-input">Enter Password</label>
				        <span><input style="width: 90%;" type="password" name="password-input" id="login-password"  autocomplete="off" /><i id="login-password-icon" style="cursor: pointer; padding: 4px 4px;" class="bi bi-eye-slash"></i></span>
						<span id="field-validation-2" style="font-size: 11px; color: #ff0000; font-weight: bold; display: none;"><i class="fa fa-info-circle"></i> Required !</span>
				    </fieldset>
					<p style="font-size: 11px; text-align: left; text-shadow: 0.5px 0.5px 0.5px #ffff00; margin-top: 5px;"><i class="fa fa-info-circle"></i> By logging-in, you are agreeing to A9 STORE's <a href="">Terms Of Use</a> and <a href="">Privacy Policy.</a></p>
				    <button type="submit" id="login-button" style="margin-top: 5px; width: 98%;">Login</button>
					<fieldset>
					    <legend style="text-shadow: 1px 1px 1px #ffff00;">or</legend>
						<button id="OTP-request">Request For OTP</button>
					</fieldset>
				</form>
            </div>	
			<button id="create-an-account-button">New To A9 STORE ? Create An Account</button>	
		    <a href="HOME.php" id="A9-STORE-logo" style="bottom: -2.5%; right: -3%; position: absolute;">
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
        </div>	
        <div id="create-an-account-div" style="margin-top: -140%;">
		    <span><i style="cursor: pointer;" class="fa fa-times" title="Close" id="signup-div-close"></i></span>
			<h1 style="background: rgba(255, 165, 0); text-shadow: 2px 2px 2px #DC143C;">Signup</h1>
			<div class="signup-details">
			    <form>
				    <label for="mobile-number-for-signup">Mobile Number</label>
				    <input id="mobile-number-input-of-signup" type="tel" name="mobile-number-for-signup"  autocomplete="off" />
					<span id="field-validation-3" style="font-size: 11px; color: #ff0000; font-weight: bold; text-shadow: none; display: none;"><i class="fa fa-info-circle"></i> Required !</span>
					<p style="font-size: 11px; text-align: left; text-shadow: 0.5px 0.5px 0.5px #ffff00; margin-top: 5px;"><i class="fa fa-info-circle"></i> By proceeding, you are agreeing to A9 STORE's <a href="">Terms Of Use</a> and <a href="">Privacy Policy.</a></p>						
					<button id="proceed-button" style="margin-top: 5px; padding: 2px 2px;">Proceed</button>
				</form>
			</div>
			<button id="login-way-through-signup-div" style="margin-top: 10px;">Already our member ? Login</button>
		    <a href="HOME.php" id="A9-STORE-logo" style="bottom: -2.5%; right: -3%; position: absolute;">
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
        </div>								   	
		<div id="releasing-date">
		    <span id="releasing-date-close">&times;</span>
			<div class="releasing-date-sub-div">
			    <h2>Release Date</h2>
				<a href="COMING SOON.php" style="text-decoration: none;"><button id="release-date-details-button">Details</button></a>
			</div>
	    </div>
	    <!-- description(release-date)-end -->			
	    <div class="event" id="event">
	        <span id="event-close">&times;</span>
	        <div class="event-image-div">
	    	    <img src="images/event-image-1.jpg" />
	    		<button id="book-tickets">Book Tickets</button>
	    	</div>
	    </div>				
	</section>				
    <a href="#"><Button class="back-to-top">BACK TO TOP</Button></a>	
    <nav>
	    <a href="HOME.php" id="A9-STORE-logo" style="margin-left: 43%;">
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
		<span class="india">INDIA</span>
		<span class="indian-flag-icon"><img id="indiaimg" src="images/indian-flag-icon.png"/></span>
    </nav>
	<nav>
	    <div class="nav-links-main-div" style="margin-top: 17.9%;">
	        <div class="nav-links2">
	            <ul>
		            <h1>CONNECT WITH US</h1>
                    <li><a href="https://www.instagram.com/" class="btn">INSTAGRAM</a><i class="fa fa-instagram"></i></li>		
                    <li><a href="https://www.facebook.com/" class="btn">FACEBOOK</a><i class="fa fa-facebook-official"></i></li>
		        	<li><a href="https://www.youtube.com/" class="btn">YOU TUBE</a><i class="fa fa-youtube-play"></i></li>
                    <li><a href="https://www.linkedin.com/" class="btn">LINKEDIN</a><i class="fa fa-linkedin-square"></i></li>				
		        	<li><a href="https://twitter.com/" class="btn">TWITTER</a><i class="fa fa-twitter"></i></li>
                </ul>  
            </div>
            <div class="nav-links3">
	            <ul>
		            <h1>KNOW US</h1>
		        	<li><a id="release-date-opener" class="btn">RELEASING DATE</a></li>
		        	<li><a id="our-events" class="btn">OUR EVENTS</a></li>
                    <li><a href="ABOUT.php" class="btn">ABOUT US</a></li>			
                </ul>  		
            </div>
		    <div class="nav-links4">
 	            <ul>
		            <h1>LET US HELP</h1>
                    <li><a href="YOUR ACCOUNT.php" class="btn">YOUR ACCOUNT</a></li>
		    		<li><a href="" class="btn">CONTACT US</a></li>
		        	<li><a href="" class="btn">SECURITY</a></li>
					<li><a href="" class="btn">POLICY</a></li>
                    <li><a href="HELP.php" class="btn">HELP</a><i class="fa fa-question-circle"></i></li>
                </ul>  		
            </div>  
        </div>	
	    <div class="running-time">
		    <h6>&#169; 2021-2022 , A9 STORE.com, Inc. | <a href="Terms-of-use.php">Terms Of Use</a> | <a href="Privacy-policy.php">Privacy Policy</a> | <a href="Return-policy.php">Return Policy</a></h6>
		</div>		
	</nav>
	
	<!--JAVASCRIPT-->
	<script type="text/javascript">
		$(".rotate").click(function(){
		    $(this).toggleClass("down")
		});
		
		function show1(){
		    var s1 = document.getElementById("div1");
		        if(s1.style.display === "block")
		            s1.style.display = "none";
		        else
		    	    s1.style.display = "block";	
        }	
		function show2(){
		    var s2 = document.getElementById("div2");
		        if(s2.style.display === "block")
		            s2.style.display = "none";
		        else
		    	    s2.style.display = "block";	
        }	
		function show3(){
		    var s3 = document.getElementById("div3");
		        if(s3.style.display === "block")
		            s3.style.display = "none";
		        else
		    	    s3.style.display = "block";	
        }			
		var shoppingCart = (function(){
		    cart = [];
			function Item(name, price, count){
			    this.name = name;
			    this.price = price;
			    this.count = count;
			}
			function saveCart(){
			    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
			}
			function loadCart(){
			    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
			}	
            if(sessionStorage.getItem('shoppingCart') != null){
                loadCart();
            }
			var obj = {};
            obj.addItemToCart = function(name, price, count){
			    for(var item in cart){
				    if(cart[item].name === name){
					    cart[item].count ++;
						saveCart();
						return;
					}
				}
				var item = new Item(name, price, count);
				cart.push(item);
			    saveCart();
            }
            obj.setCountForItem = function(name, count){
                for(var i in cart){
                    if(cart[i].name === name){
                       cart[i].count = count;
                       break;
                    }
                }
            }
            obj.RemoveItemFromCart = function(name){
                for(var item in cart){
                    if(cart[item].name === name){
                        cart[item].count --;
                        if(cart[item].count === 0){
                            cart.splice(item, 1);
                        }
						break;
                    }
                }
				saveCart();
            }
			obj.RemoveItemFromCartAll = function(name){
			    for(var item in cart){
				    if(cart[item].name === name){
					    cart.splice(item, 1);
						break;
					}
				}
				saveCart();
			}
			obj.totalCount = function(){
			    var totalCount = 0;
				for(var item in cart){
				    totalCount += cart[item].count;
				}
				return totalCount;
		    }			
		    obj.totalCart = function(){
			    totalCart = 0; 					
				for(var item in cart){
				    totalCart += cart[item].price * cart[item].count;
				}
				return Number(totalCart).toFixed(2);
			}
			obj.listCart = function(){
			    var cartCopy = [];
				for(i in cart){
                    item = cart[i];
					itemCopy = {};
					for(p in item){
    					itemCopy[p] = item[p];
					}
					itemCopy.total = Number(item.price * item.count).toFixed(2);
					cartCopy.push(itemCopy)
				}
				return cartCopy;
			}
			return obj;
		})();
		function displayCart(){
		    var cartArray = shoppingCart.listCart();
			var output = "";
			for(var i in cartArray){
			    output += "<div class='displayCart-main-div'>"
				    + "<div><h4>Title :</h4>"+ cartArray[i].name +"</div>"
					+ "<div style='display: flex;'><h4>Price :&nbsp;&nbsp;</h4><i id='rupee' class='fa fa-inr'></i> &nbsp;"+ cartArray[i].price +"</div>"
					+ "<div class='quantity-div'><h4>Quantity :</h4><button class='minus-item' id='data-minus' data-name='"+ cartArray[i].name +"'><span id='minus-icon'>-</span> </button>"
					+ "<input disabled class='item-count' id='item-count' type='number' data-name='"+ cartArray[i].name +"' value='"+ cartArray[i].count +"' />"
					+ "<button class='plus-item' data-name='"+ cartArray[i].name +"'> + </button></div>"
					+ "<div style='display: flex;'><h4>Delete :	&nbsp;</h4><span class='delete-item' data-name='"+ cartArray[i].name +"'><span><i id='remove' class='fas fa-trash'></i></span></span></div>"
					+ "</div>";						
			}
			$('.new-style').html(output);
			$('.cart-total').html(shoppingCart.totalCart());				
			$('.total-count').html(shoppingCart.totalCount());
	        if(shoppingCart.totalCount() === 0){
		        document.getElementById('empty-message').style.display = 'block';
		        document.getElementById('proceed-to-pay').style.cursor = 'not-allowed';
		    }else{
		        document.getElementById('empty-message').style.display = 'none';
		        document.getElementById('proceed-to-pay').style.cursor = 'pointer';	 					
		    }	
			$(document).ready(function(){
			    $("#proceed-to-pay").on("click", function(e){
				    if(shoppingCart.totalCount() === 0){
					    e.preventDefault();
					}else{
					    window.location = this.href;
					}
				});
			});
			var click = document.getElementById('proceed-to-pay');
            click.addEventListener('mouseover', function(){
			    if(shoppingCart.totalCount() === 0){
				    document.getElementById('cart-empty-tooltip').style.visibility = "visible";
				}else{
				    document.getElementById('cart-empty-tooltip').style.visibility = "hidden";					    
				}
			});	
            click.addEventListener('mouseleave', function(){
				document.getElementById('cart-empty-tooltip').style.visibility = "hidden";
			});					
		}			
		$('.add-to-cart').click(function(event){
		    event.preventDefault();
			var name = $(this).data('name');
			var price = Number($(this).data('price'));
			shoppingCart.addItemToCart(name, price, 1);
			displayCart();
		});
		$('.new-style').on('click', '.minus-item', function(event){
		    var name = $(this).data('name');
			shoppingCart.RemoveItemFromCart(name);
			displayCart();
		});			
		$('.new-style').on('click', '.plus-item', function(event){
		    var name = $(this).data('name');
			shoppingCart.addItemToCart(name);
			displayCart();
		});	
		$('.new-style').on('click', '.delete-item', function(event){
		    var name = $(this).data('name');
			shoppingCart.RemoveItemFromCartAll(name);
			displayCart();
		});				
		$('.new-style').on('change', '.item-count', function(event){
		    var name = $(this).data('name');
			var count = Number($(this).val());
			shoppingCart.setCountForItem(name, count);
			displayCart();
		});						
		displayCart();
		
		var open = document.getElementById("create-an-account-button");
		open.addEventListener('click',function(){
		    document.getElementById("create-an-account-div").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";
			document.getElementById("user-login").style.display = "none";
		});			
		var close = document.getElementById("signup-div-close");
		close.addEventListener('click',function(){
		    document.getElementById("create-an-account-div").style.display = "none";
			document.getElementById("A9-STORE-overlay").style.display = "none";
		});		
		var open = document.getElementById("login-way-through-signup-div");
		open.addEventListener('click',function(){
		    document.getElementById("user-login").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";
			document.getElementById("create-an-account-div").style.display = "none";
		}); 		

		var buttonleft = document.getElementById("btn-for-left");
		var buttonright = document.getElementById("btn-for-right");	
        buttonleft.addEventListener('click', function(){
		    document.getElementById("on-screen-images3").scrollLeft -= 750;
			document.getElementById("btn-for-left").style.opacity = 0.5;				
			document.getElementById("btn-for-right").style.opacity = 1;					
		});
        buttonright.addEventListener('click', function(){
		    document.getElementById("on-screen-images3").scrollLeft += 750;
			document.getElementById("btn-for-left").style.opacity = 1;				
			document.getElementById("btn-for-right").style.opacity = 0.5;								
		});				

		const loginpasswordicon = document.querySelector('#login-password-icon');
		const loginpassword = document.querySelector('#login-password');
		loginpasswordicon.addEventListener('click', function(e){
		    const type = loginpassword.getAttribute('type') === 'password'? 'text' : 'password';
			loginpassword.setAttribute('type', type);
			this.classList.toggle('bi-eye');
		});				

		var openaddresspopup = document.getElementById("wishlisticon");
		openaddresspopup.addEventListener('click',function(){
		    document.getElementById("user-login").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";
		});		
		var closeaddresspopup = document.getElementById("login-div-close");
		closeaddresspopup.addEventListener('click',function(){
		    document.getElementById("user-login").style.display = "none";
			document.getElementById("A9-STORE-overlay").style.display = "none";
		});		

		let thumbs = document.getElementsByClassName("xzoom-gallery");
		let active = document.getElementsByClassName("active");
		let more = document.getElementsByClassName("more-color-img");
		let light = document.getElementsByClassName("light");							
		for(var i = 0; i < thumbs.length; i++){
		    thumbs[i].addEventListener('mouseover', function(){
		        if(active.length > 0){
			        active[0].classList.remove("active");
			    }
                this.classList.add("active");
			    document.getElementById("zoomed-image").src = this.src;
            });
        }										
		for(var i = 0; i < more.length; i++){
		    more[i].addEventListener('mouseover', function(){
		  		if(light.length > 0){
		  			light[0].classList.remove("light");
		  	    }							
			    this.classList.add("light");
				document.getElementById("zoomed-image").src = this.src;
            });						
		    more[i].addEventListener('mouseleave', function(){
			    this.classList.remove("light");
				more[0].classList.add("light");
				document.getElementById("zoomed-image").src = more[0].src;
            });
        }	
		$('#event-close').click(function(){
		    document.getElementById('event').style.display = "none";
		});		
		$('#our-events').click(function(){
		    document.getElementById('event').style.display = "block";
		});		
		$('#releasing-date-close').click(function(){
		    document.getElementById('releasing-date').style.display = "none";
		});		
		$('#release-date-opener').click(function(){
		    document.getElementById('releasing-date').style.display = "block";
		});	
		
		function on(){
		    document.getElementById("size-chart-hover").style.display = "block";
		}	
		function off(){
		    document.getElementById("size-chart-hover").style.display = "none";
		}	
							
		$(document).ready(() => {
		    const fill = $(".wishlisticon");
			fill.click(() => {
			    if(fill.text() == "Add To Wish List ")
				    fill.php('Added <i style="margin-left: 61.5px;" class="fa fa-heart"></i>');
				else
                    fill.php('Add To Wish List <i class="fa fa-heart-o"></i>');
            });
        });
		
		const clearradio = (name) => {
		    const sizeradios = document.querySelectorAll("input[type='radio'][name='" + name + "']");
                sizeradios.forEach((sizeradio) => {
			    if(sizeradio.checked === true)
				    sizeradio.checked = false;
			});
        }
		
		$("#zoom").click(function(){
		    document.getElementById("overlay").style.display = "block";
		    document.getElementById("expanded-view").style.display = "block";
		});
		$("#html-close").click(function(){
		    document.getElementById("overlay").style.display = "none";
		    document.getElementById("expanded-view").style.display = "none";
		});	
		
		let expanded = document.getElementsByClassName("thumbnails");
		let blowing = document.getElementsByClassName("blowingone");
		for(var i = 0; i < expanded.length; i++){
		    expanded[i].addEventListener('click', function(){
			    if(blowing.length > 0){
				    blowing[0].classList.remove('blowingone');
                }
                this.classList.add("blowingone");
                document.getElementById("main-image-expanded").src = this.src;							
			});
		}
		
        function opencart(){
            document.getElementById("usercart").style.width = "22%";
        }
        function closecart(){
            document.getElementById("usercart").style.width = "0px";
		}		
	</script>	
	
<!--	<script type="text/javascript">
			$(document).ready(() => {
			    const zoomdiv = $(".picZoomer");
				const fill = $(".roll-over-the-image-text");
			    zoomdiv.mouseover(() => {
					if(fill.text() == "Roll over the image to zoom in"){
					    fill.php("For expanded view click the image");
                    }
                });	
			});
            $(document).ready(() => {
                const zoomdiv = $(".picZoomer");
                const fill = $(".roll-over-the-image-text");	
                zoomdiv.mouseleave(() => {
                    if(fill.text() == "For expanded view click the image"){
                        fill.php("Roll over the image to zoom in");
					}
                });
            });                         							
    </script> -->	
	
<!-- 		<script type="text/javascript">
		    var expandedimgdiv = document.getElementById("expandedimgfigure");
		    var expandedimg = document.getElementById("main-image-expanded");
			expandedimgdiv.addEventListener('mousemove', function(event){
			    clientX = event.clientX - expandedimgdiv.offsetLeft;
			    clientY = event.clientY - expandedimgdiv.offsetTop;
				mWidth = expandedimg.offsetWidth;
				mHeight = expandedimg.offsetHeight;
				clientX = clientX / mWidth * 50;
				clientY = clientY / mHeight * 20;
				expandedimg.style.transform = 'translate('+clientX+'%, '+clientY+'%) scale(1.5)';
				expandedimg.style.cursor = 'zoom-in';
			});
			expandedimgdiv.addEventListener('mouseleave', function(){
				expandedimg.style.transform = 'none';						
			});				
		</script> -->	
</body>
</html>