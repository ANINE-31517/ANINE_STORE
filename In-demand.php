<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        In Demand
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
    <section class="header" style="min-height: 350vh;">
	    <nav class="nav1">
		    <div class="search-in">
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
				<div class="all-search-options" id="all-search-options">
			        <form>
                        <select id="searchDropdownbox" onchange="location=this.value" name="Types" class="drop-down" title="Search in">
			                <option value="HOME.php">All Types</option>
			                <option value="Stilettoes.php">Stilettoes</option>
			                <option value="High-Heels.php">High-Heels</option>
			                <option value="Wedges.php">Wedges</option>
			                <option value="Heeled-Boots.php">Heeled-Boots</option>
			                <option value="Ankle-Straps.php">Ankle-Straps</option>
			                <option value="T-Straps.php">T-Straps</option>
			            </select>
						<select id="auto-resize-of-drop-down-select" style="display: none;">
						    <option id="auto-resize-of-drop-down-select-option"></option>
						</select>
			            <input list="datalist" onkeyup="show(this.value)" type="text" onfocus="this.value=''" maxlength="200" spellcheck="false" placeholder="Search" id='search' class="search-box" title="" autocomplete="off" />						
			            <span id="clearspan" onclick="document.getElementById('search').value = ''">&times;</span>	
			            <button title="Go" class="Go" type="search"><i id="Go" class="fa fa-search"></i></button>	
                    </form>					
                </div>
		        <!-- searchbox-side-login-button-start -->				
				<div class="login-button-home">
				    <button type="button" id="login-button-home-nav1"><a href="#" style="text-decoration: none; color: #000000; text-shadow: 1px 1px 1px #DC134C;"><span id="login-open-span">Login</span></a><div class="highlight"></div></button>
	                <div id="login-button-home-nav1-options"><i style="font-size: 20px;" title="Options" class="fa fa-caret-down"></i>	
                        <div id="login-button-options-hover">
						    <ul>
							    <li><small>Looks like new here ?</small> <strong id="strong">Signup</strong></li>
								<li><a href="Orders.php"><small><strong><i class="fa fa-shopping-bag"></i> Orders</strong></small></a></li>
								<li><a href="Wishlist.php"><small><strong><i class="fa fa-heart"></i> Wishlist</strong></small></a></li>
								<li><a href="YOUR ACCOUNT.php"><small><strong><i class="fa fa-user-tie"></i> Account</strong></small></a></li>			
							</ul>
                        </div>
                    </div>					
				</div>
		        <!-- searchbox-side-login-button-end -->
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
				<div id="overlay"></div>
            </div>			
		</nav>	
		<div id="A9-STORE-overlay"></div>	
		<!-- user's-search-hints-start -->	
            <div class="searchwrapper" id="searchwrapper">
			    <div id="datalist">
		            <ul>
		            </ul>					    
			    </div>
            </div>			
		<!-- user's-search-hints-end -->					
		<nav class="nav2">
            <div id="user" class="menu" aria-hidden="true">
			    <a href="javascript:void(0)" class="close" onclick="closeNav()"><span id="close" title="Close">&times;</span></a>
		        <span><i style='cursor: pointer; margin-left: 75px; font-size: 30px;'class="fa fa-user-tie" title="User"></i></span>
				<span class="sign-in" id="sign-in">Sign in</span> 
				<div class="nav-links">
			        <ul>
				       <h1>TRENDING</h1>
				       <li><a href="COMING SOON.php" class="btn">COMING SOON</a></li>
				       <h1>Departments</h1>
				       <li><a href="HEELS.php" class="btn">HEELS</a></li>
				       <li><a href="BOOTS.php" class="btn">BOOTS</a></li>
				       <li><a href="ACCESSORIES.php" class="btn">ACCESSORIES</a></li>
				       <h1>Ranges</h1>
				       <li><a href="499-999.php" class="btn"><i id="rupee" class="fa fa-inr"></i> 499 - <i id="rupee" class="fa fa-inr"></i> 999</a></li>
				       <li><a href="999-1,999.php" class="btn"><i id="rupee" class="fa fa-inr"></i> 999 - <i id="rupee" class="fa fa-inr"></i> 1,999</a></li>
				       <li><a href="1,999-2,999.php" class="btn"><i id="rupee" class="fa fa-inr"></i> 1,999 - <i id="rupee" class="fa fa-inr"></i> 2,999</a></li>
				       <li><a href="2,999-3,999.php" class="btn"><i id="rupee" class="fa fa-inr"></i> 2,999 - <i id="rupee" class="fa fa-inr"></i> 3,999</a></li>
				       <li><a href="3,999-4,999.php" class="btn"><i id="rupee" class="fa fa-inr"></i> 3,999 - <i id="rupee" class="fa fa-inr"></i> 4,999</a></li>				   
				       <li><a href="upto-4,999.php" class="btn">Upto <i id="rupee" class="fa fa-inr"></i> 4,999<a></li>				   				   
   				       <h1>Help & Settings</h1>				   
				       <li><a href="YOUR ACCOUNT.php" class="btn">ACCOUNT</a></li>
				       <li><a href="Terms-of-use.php" class="btn">TERMS OF USE</a></li>
				       <li><a href="Privacy-policy.php" class="btn">PRIVACY POLICY</a></li>
				       <li><a href="Return-policy.php" class="btn">RETURN POLICY</a></li>				   
				    </ul>
			    </div>
            </div>
            <span><i id="bars" onclick="openNav()" class="fa fa-bars" title="All"></i></span>
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); margin-left: 1.5%;"></div>							
            <div class="address" id="address" aria-hidden="true">
                <span class="address">Deliver To User</span>
		        <span><i id="mapicon" class="fa fa-map-marked"></i></span>
            </div>	
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); margin-left: 1.5%;"></div>	
            <div style="margin-left: 1.5%; cursor: pointer;" id="benefits-div">
			    <h5 style="text-shadow: 1px 1px 1px #DC134C;">Benefits</h5>
            </div>		
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); margin-left: 1.5%;"></div>				
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80);  position: absolute; right: 7.5%;"></div>				
            <div style="right: 2.5%; position: absolute; cursor: pointer;" id="benefits-div">
			    <a href="HELP.php" style="text-decoration: none; color: #000000;"><h5 style="text-shadow: 1px 1px 1px #DC134C;">Service</h5></a>
            </div>	
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); position: absolute; right: 1%;"></div>							
		    <div id="usercart" class="cart" aria-hidden="true"> 
                <a href="javascript:void(0)" class="close" onclick="closecart()" style="text-decoration: none;"><span id="close2" title="Close">&times;</span></a>
			    <h3 style="text-align: center;">SIDE CART</h3>
			    <div class="lineseparate"></div>
			    <a href="Shoppingcart.php"><button style="margin-left: 8%;" class="go-to-cart">GO TO CART</button></a>
			    <button class="proceed-to-pay">PROCEED TO PAY</button>
			    <div class="lineseparate2"></div>
				<h4 style="color: #000000; text-shadow: 1px 1px 1px #8B8000; margin-left: 10px;">Total : <i id="rupee" class="fa fa-inr"></i> <span class="cart-total"></span></h4>
                <div class="line-separate-1"></div>					
				<h4 class="selecteditems" style="text-align: center;">SELECTED ITEMS</h4>
				<div class="line-separate0"></div>
				<h5 style="margin-top: 10px; background: rgba(255, 165, 0); text-align: center; text-shadow: 1px 1px 1px #ff0000;" id="empty-message"><i class="fa fa-info-circle"></i> Cart is empty !</h5>
	            <div class="new-style" id="new-style">
				    
				</div>	   					
            </div>						
        </nav>	
		<div id="benefits-container1" style="display: none;">
			<svg height="20" width="20" id="benefits-arrow">
                <path d="M10 0 L0 20 L20 20 Z" fill="rgb(225, 165, 0)"/>
            </svg>					
		    <div class="benefits-container2">
			    <span id="benfits-close" style="font-size: 25px; cursor: pointer;">&times;</span>
		        <ul>
		    	    <a href="HELP.php"><li>Help Anytime</li></a>
		    		<li>Product Repair</li>					
		    		<a href="Return-policy.php"><li>Product Return</li></a>
		    		<li>Product Exchange</li>
					<li>Download The App</li>
		    	</ul>
		    </div>	
        </div>				
		<div id="address-pop-up">
		    <span style="cursor: pointer;"><i class="fa fa-times" id="address-pop-up-close" title="Close"></i></span>
		    <h4>Deliver To <span>User</span></h4>
			<span><img style="border-radius: 10%; width: 25px;" src="Images/A9-STORE.jpg" /></span>
			<h5 style="text-shadow: 1px 1px 1px #ffff00; margin-top: 5px;">Default Address</h5>
			<div id="address-pop-up-user-default-address-div" style="background: rgba(255, 165, 0); padding: 5px 5px;">
			    <h6 style="margin-top: 5px; text-shadow: 1px 1px 1px #ff0000;"><i class="fa fa-info-circle"></i> Login to see default address !</h6>
                <button id="default-address-login-button" style="padding: 0px 10px; margin-top: 2%;">Login</button>
			</div>
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
        <div id="user-login">
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
        <div id="create-an-account-div">
		    <span><i style="cursor: pointer;" class="fa fa-times" title="Close" id="signup-div-close"></i></span>
			<h1 style="background: rgba(255, 165, 0); text-shadow: 2px 2px 2px #DC143C;">Signup</h1>
			<div class="signup-details">
			    <form method="post">
				    <label for="mobile-number-for-signup">E-Mail ID</label>
				    <input style="padding: 3px 3px 3px 5px; width: 97%; border-radius: 5px;" id="email-input-of-signup" name="mobile-number-for-signup" autocomplete="off" />
					<span id="field-validation-3" style="font-size: 11px; color: #ff0000; font-weight: bold; text-shadow: none; display: none;"><i class="fa fa-info-circle"></i> Required !</span>
					<span id="field-validation-4" style="font-size: 11px; color: #ff0000; font-weight: bold; text-shadow: none; display: none;" class="error"><i class="fa fa-info-circle"></i> Not a valid E-mail ID !</span>
					<p style="font-size: 11px; text-align: left; text-shadow: 0.5px 0.5px 0.5px #ffff00; margin-top: 5px;"><i class="fa fa-info-circle"></i> By proceeding, you are agreeing to A9 STORE's <a href="Terms-of-use.php">Terms Of Use</a> and <a href="Privacy-policy.php">Privacy Policy.</a></p>						
					<button type="button" id="proceed-button" style="margin-top: 5px; padding: 2px 2px;" onclick="send_otp();">Proceed</button>
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
		<div id="login-button-options-hover-main" style="display: none;">
            <div id="login-button-options-hover">
		        <span style="cursor: pointer;" id="login-button-options-hover-close"><i class="fa fa-times" title="Close"></i></span>
                <div id="login-button-options-hover-signup"><small>Looks like new here ?</small> <strong id="strong">Signup</strong></div>
                <div id="login-button-options-hover-orders"><a href="Orders.php"><small><strong><i class="fa fa-shopping-bag"></i> Orders</strong></small></a></div>				
                <div id="login-button-options-hover-wishlist"><a href="Wishlist.php"><small><strong><i class="fa fa-heart"></i> Wishlist</strong></small></a></div>				
                <div id="login-button-options-hover-account"><a href="YOUR ACCOUNT.php"><small><strong><i class="fa fa-user-tie"></i> Account</strong></small></a></div>				
            </div>	
        </div>			
		<div id="big-image-screen"><img id="big-image-screen-image" src="images/aa9.png" /></div>
		<div class="left-side-fixed-div">
		    <div class="location-div-main">
		        <div id="location-div" style="text-align: center; padding: 5px 3px;">
		            <h6><a href="HOME.php">Home</a> > In Demand</h6>
		        </div>
		    </div>
		    <div class="filters-div">
		        <div class="filter-heading" style="text-align: center; padding: 5px 5px; text-shadow: 1.5px 1.5px 1.5px #ffffff;">
		            <h3>Filter Time</h3>
					<div style="width: 48%; height: 3px; box-shadow: 0px 0px 10px 2px #ffffff; margin-left: 25.5%;"></div>
					<div class="sort-by-heading-sub-div" style="margin-top: 10%;">	
					    <h5>Wedges</h5>
					    <h5>T-Straps</h5>
						<h5>Stilettoes</h5>	
					    <h5>High-Heels</h5>
						<h5>Ankle-Straps</h5>
					    <h5>Heeled-Boots</h5>							
					</div>							
		    	</div>
		    </div>
		    <div class="sort-by-div">
		        <div class="sort-by-heading" style="text-align: center; padding: 5px 5px; text-shadow: 1.5px 1.5px 1.5px #ffffff;">
		            <h3>Sort By</h3>
					<div style="width: 32%; height: 3px; box-shadow: 0px 0px 10px 2px #ffffff; margin-left: 34%;"></div>
					<div id="sort-by-heading-sub-div-id" class="sort-by-heading-sub-div" style="margin-top: 20%;">
					    <h5 value="NewestFirst">Newest First</h5>							
					    <h5 value="hightolow">Price: High To Low</h5>
					    <h5 value="lowtohigh">Price: Low To High</h5>							
					</div>
		    	</div>
		    </div>	
        </div>	
		<div style="position: absolute; margin-top: 7.3%; width: 4px; height: 335%; background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.5) 3%, rgba(0, 0, 0, 0.7) 5%, rgba(255, 165, 0) 100%);  margin-left: 18%;"></div>							
        <div id="pagenumber-1-all-details">				
		    <div class="title-of-main-div">
		        <h3>In Demand</h3>
				<h5 style="text-shadow: 1px 1px 1px #ffff00; padding: 0px 10px;">Contains 1 - 12 of 36</h5>
		    </div>
		    <div class="main-div-all-designs"> 	
                <div class="main-div-all-designs-sub-1">	
                    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1100">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-1.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1100</div>	
					    </div></a>								
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="900">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-2.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 900</div>																		
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1250">MOVE TO CART</button>													
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-3.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1250</div>																		
					    </div></a>
 					</div>
		    	</div>
		    	<div class="main-div-all-designs-sub-2">
				    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1130">MOVE TO CART</button>													
		                <div class="main-div-design-img-div" data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-4.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1130</div>																		
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="590">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-5.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 590</div>																		
					    </div></a>
 					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="720">MOVE TO CART</button>														
		    	        <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-6.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 720</div>									
					    </div></a>
					</div>
                </div>	
                <div class="main-div-all-designs-sub-3">
 				    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="600">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-7.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 600</div>									
					    </div></a>		
 					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="890">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-8.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 890</div>									
					    </div></a>	
 					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="700">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-9.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 700</div>									
					    </div></a>	
					</div>
                </div>						
                <div class="main-div-all-designs-sub-4">
    				<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1450">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-10.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1450</div>									
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="6500">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-11.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 6500</div>									
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="3450">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-12.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 3450</div>									
					    </div></a>	
					</div>
                </div>					
		    </div>						
		</div>	
        <div id="pagenumber-2-all-details" style="display: none;">				
		    <div class="title-of-main-div">
		        <h3>In Demand</h3>
		    	<h5 style="text-shadow: 1px 1px 1px #ffff00; padding: 0px 10px;">Contains 13 - 24 of 36</h5>
		    </div>
		    <div class="main-div-all-designs"> 	
                <div class="main-div-all-designs-sub-1">	
 				    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1290">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-13.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1290</div>								
					    </div></a>
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1680">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
				        	<img class="main-div-design-imgs" src="Images/in-demand-image-14.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1680</div>									
					    </div></a>
 					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1450">MOVE TO CART</button>														
		                <div class="main-div-design-img-div" data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-15.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1450</div>								
					    </div></a>	
					</div>
		    	</div>
		    	<div class="main-div-all-designs-sub-2">
				    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="2300">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-16.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 2300</div>									
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1500">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-17.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1500</div>									
					    </div></a>		
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="7600">MOVE TO CART</button>														
		    	        <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-18.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 7600</div>								
					    </div></a>	
					</div>
                </div>	
                <div class="main-div-all-designs-sub-3">	
		            <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="6700">MOVE TO CART</button>														
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-19.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 6700</div>							
					    </div></a>		
 					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="3300">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-20.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 3300</div>								
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="2500">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-21.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 2500</div>									
					    </div></a>	
					</div>
                </div>						
                <div class="main-div-all-designs-sub-4">	
				    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1780">MOVE TO CART</button> 						
		                <div class="main-div-design-img-div" data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-22.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1780</div>									
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1900">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-23.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1900</div>									
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="610">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-24.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 610</div>									
					    </div></a>	
					</div>
                </div>					
		    </div>	
		</div>	
        <div id="pagenumber-3-all-details" style="display: none;">				
		    <div class="title-of-main-div">
		        <h3>In Demand</h3>
		    	<h5 style="text-shadow: 1px 1px 1px #ffff00; padding: 0px 10px;">Contains 25 - 36 of 36</h5>
		    </div>
		    <div class="main-div-all-designs"> 	
                <div class="main-div-all-designs-sub-1">
     				<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1200">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-25.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1200</div>
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="870">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/slide-image14.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 870</div>
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1700">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/slide-image15.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1700</div>
					    </div></a>
					</div>
		    	</div>
		    	<div class="main-div-all-designs-sub-2">
				    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="3200">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/slide-image16.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 3200</div>
					    </div></a>		
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1890">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/stiletto.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1890</div>
					    </div></a>
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="4200">MOVE TO CART</button>							
		    	        <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/T-Strap.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 4200</div>
					    </div></a>	
					</div>
                </div>	
                <div class="main-div-all-designs-sub-3">
                    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1920">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/Wedge.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1920</div>
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="8700">MOVE TO CART</button>
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-26.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 8700</div>
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="6600">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/zoom-img-2.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 6600</div>
					    </div></a>	
					</div>
                </div>						
                <div class="main-div-all-designs-sub-4">
				    <div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="6523">MOVE TO CART</button>							
		                <div class="main-div-design-img-div"  data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/zoom-img-more-color.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 6523</div>
					    </div></a>	
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="">MOVE TO CART</button>							
		                <div class="main-div-design-img-div" data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/in-demand-image-27.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1200</div>
					    </div></a>
					</div>
					<div id="super-main-div-design-img-div"><a href="high-heel(product)(black).php">
					    <button style="margin-left: 50%; width: 50%; margin-top: 0%;" class="move-to-cart" data-name="" data-price="1780">MOVE TO CART</button>							
		                <div class="main-div-design-img-div" data-category="" data-price="">
					        <img class="main-div-design-imgs" src="Images/Heeled-Boot.jpg" />
							<div>Price: <i id="rupee" class="fa fa-inr"></i> 1780</div>
					    </div></a>	
					</div>
                </div>					
		    </div>	
		</div>					
        <div class="next-previous-option-div">
		    <div style="position: absolute; left: 0; width: 20%;">
		        <h4>You are at : <span id="you-are-at">1</span></h4>
			    <h4>Total : <span style="border-radius: 10%; background: gold; color: #000000; padding: 0px 5px; border: 2px solid #ffff00;">3</span></h4>
			</div>
			<div style="text-shadow: 1px 1px 1px #DC134C; margin-left: 44%; width: 12%; height: 100%; position: absolute; margin-top: 0%;">
                <div style="display: flex; justify-content: space-between; padding: 15px 10px;">
				    <a href="#" style="text-decoration: none; color: #000000;"><h3 class="pagenumber radium"  id="pagenumber1" onclick="pagenumbershow('1')">1</h3></a>
				    <a href="#" style="text-decoration: none; color: #000000;"><h3 class="pagenumber" id="pagenumber2" onclick="pagenumbershow('2')">2</h3></a>
				    <a href="#" style="text-decoration: none; color: #000000;"><h3 class="pagenumber" id="pagenumber3" onclick="pagenumbershow('3')">3</h3></a>
				</div>
			</div>
        </div>	
		<!-- description(release-date)-start -->																											
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
	    <div class="nav-links-main-div">
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
		        	<li><a href="" class="btn">RELEASING DATE</a></li>
		        	<li><a id="our-events" class="btn">OUR EVENTS</a></li>
                    <li><a href="ABOUT.php" class="btn">ABOUT US</a></li>			
                </ul>  		
            </div>
		    <div class="nav-links4">
 	            <ul>
		            <h1>LET US HELP</h1>
                    <li><a href="YOUR ACCOUNT.php" class="btn">YOUR ACCOUNT</a></li>
		    		<li><a href="OTHER HELPS.php" class="btn">CONTACT US</a></li>
		        	<li><a href="Privacy-policy.php" class="btn">SECURITY</a></li>
					<li><a href="Terms-of-use.php" class="btn">POLICY</a></li>
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
		
		let pagenumber = document.getElementsByClassName("pagenumber");
		let radium = document.getElementsByClassName("radium");
		for(var i = 0; i < pagenumber.length; i++){
		    pagenumber[i].addEventListener('click', function(){
			    if(radium.length > 0){
				    radium[0].classList.remove('radium');
                }
                this.classList.add("radium");						
			});
		}
		function pagenumbershow(text){
		    document.getElementById('you-are-at').innerHTML = text;
		}
		$('#pagenumber1').click(function(){
		    document.getElementById('pagenumber-1-all-details').style.display = "block";
		    document.getElementById('pagenumber-2-all-details').style.display = "none";
		    document.getElementById('pagenumber-3-all-details').style.display = "none";
		});
		$('#pagenumber2').click(function(){
		    document.getElementById('pagenumber-2-all-details').style.display = "block";
		    document.getElementById('pagenumber-3-all-details').style.display = "none";
		    document.getElementById('pagenumber-1-all-details').style.display = "none";
		});
		$('#pagenumber3').click(function(){
		    document.getElementById('pagenumber-3-all-details').style.display = "block";
		    document.getElementById('pagenumber-1-all-details').style.display = "none";
		    document.getElementById('pagenumber-2-all-details').style.display = "none";
		});					

        var on = document.getElementsByClassName("main-div-design-imgs");
        var off = document.getElementsByClassName("main-div-design-img-div");
		for(var i = 0; i < on.length; i++){
		    on[i].addEventListener('mouseover', function(){
			    document.getElementById('big-image-screen').style.display = "block";
			    document.getElementById('big-image-screen-image').src = this.src;
			});	
		}	
        for(var i = 0; i < off.length; i++){
		    off[i].addEventListener("mouseleave", function(){
			    document.getElementById("big-image-screen").style.display = "none";
			});
		}	

		var open = document.getElementById("strong");
		open.addEventListener('click',function(){
		    document.getElementById("create-an-account-div").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";
		});	
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
		const loginpasswordicon = document.querySelector('#login-password-icon');
		const loginpassword = document.querySelector('#login-password');
		
		loginpasswordicon.addEventListener('click', function(e){
		    const type = loginpassword.getAttribute('type') === 'password'? 'text' : 'password';
			loginpassword.setAttribute('type', type);
			this.classList.toggle('bi-eye');
		});				

		var openaddresspopup = document.getElementById("sign-in");
		openaddresspopup.addEventListener('click',function(){
		    document.getElementById("user-login").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";
		});		
		var closeaddresspopup = document.getElementById("login-div-close");
		closeaddresspopup.addEventListener('click',function(){
		    document.getElementById("user-login").style.display = "none";
			document.getElementById("A9-STORE-overlay").style.display = "none";
		});		
		var open = document.getElementById("login-open-span");
		open.addEventListener('click',function(){
		    document.getElementById("user-login").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";
		});			
		var close = document.getElementById("login-div-close");
		close.addEventListener('click',function(){
		    document.getElementById("user-login").style.display = "none";
			document.getElementById("A9-STORE-overlay").style.display = "none";
		});	 
		var openaddresspopup = document.getElementById("address");
		openaddresspopup.addEventListener('click',function(){
		    document.getElementById("address-pop-up").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";
		});		
		var closeaddresspopup = document.getElementById("address-pop-up-close");
		closeaddresspopup.addEventListener('click',function(){
		    document.getElementById("address-pop-up").style.display = "none";
			document.getElementById("A9-STORE-overlay").style.display = "none";
		});	
        var defaultaddressloginopener = document.getElementById('default-address-login-button');				
        defaultaddressloginopener.addEventListener('click', function(){
		    document.getElementById("address-pop-up").style.display = "none";
		    document.getElementById("user-login").style.display = "block";
			document.getElementById("A9-STORE-overlay").style.display = "block";					
		});		
		$('#benefits-div').click(function(){
		    document.getElementById("benefits-container1").style.display = "block";
		});
		$('#benfits-close').click(function(){
		    document.getElementById("benefits-container1").style.display = "none";
		});		
		$('#search').click(function(){
		    var padding = $('#all-search-options').css('padding');
			var newpadding = (padding == '0px')? '3px' : '3px';
			$('#all-search-options').css('padding',newpadding);
			document.getElementById("searchwrapper").style.display = "block";										
		})	
		
        $('#overlay').click(function(){
		    var padding = $('#all-search-options').css('padding');
			var nopadding = (padding == '3px')? '0px' : '0px';
			$('#all-search-options').css('padding',nopadding);
			document.getElementById("searchwrapper").style.display = "none";										
		})	
		
		$('#search').click(function(){
		    document.getElementById("overlay").style.display = "block";
		})
		
		$('#overlay').click(function(){
		    document.getElementById("overlay").style.display = "none";
		})	
		
        $("#search").click(function(){
		    document.getElementById("clearspan").style.display = "block";
		});	
		
        $("#overlay").click(function(){
		    document.getElementById("clearspan").style.display = "none";
		});	
		
		$(document).ready(function(){
		    $('.drop-down').change(function(){
			    $('#auto-resize-of-drop-down-select-option').html($('.drop-down option:selected').text());
			    $(this).width($('#auto-resize-of-drop-down-select').width());
			});
		});	
				
    	let options = [
		    'women footwear',
		    't straps',
		    'ankle straps',
		    'high heels',
		    'wedges',
		    'stilettoes',
		    'heeled boots',					
		    'women stilettoes',
		    'women ankle straps',
		    'women t straps',
		    'women heeled boots',
		    'women high heels',
		    'women wedges',
		    'socks',
		    'footwear',
		];	
        var topics = options.length;
        function show(value){
			document.getElementById("datalist").innerHTML = "";
		    list = value.length;
            for(var i=0; i<topics; i++){
			    if(((options[i].toLowerCase()).indexOf(value.toLowerCase())) > -1){
			        var n = document.createElement("div");
					n.className = "searchoptions";								
					var link0 = document.createElement("a");var link1 = document.createElement("a");var link2 = document.createElement("a");var link3 = document.createElement("a");var link4 = document.createElement("a");var link5 = document.createElement("a");var link6 = document.createElement("a");var link7 = document.createElement("a");var link8 = document.createElement("a");var link9 = document.createElement("a");var link10 = document.createElement("a");var link11 = document.createElement("a");var link12 = document.createElement("a");var link13 = document.createElement("a");var link14 = document.createElement("a");
					link0.className = "searchoptionslinkage";link1.className = "searchoptionslinkage";link2.className = "searchoptionslinkage";link3.className = "searchoptionslinkage";link4.className = "searchoptionslinkage";link5.className = "searchoptionslinkage";link6.className = "searchoptionslinkage";link7.className = "searchoptionslinkage";link8.className = "searchoptionslinkage";link9.className = "searchoptionslinkage";link10.className = "searchoptionslinkage";link11.className = "searchoptionslinkage";link12.className = "searchoptionslinkage";link13.className = "searchoptionslinkage";link14.className = "searchoptionslinkage";
					if(options[i] == options[0]){
					    link0.setAttribute("href","women-footwear.php");	
                        link0.innerText = options[0];
	                    n.appendChild(link0);								 
					}else if(options[i] == options[1]){								
					    link1.setAttribute("href","T-Straps.php");	
                        link1.innerText = options[1];
                        n.appendChild(link1);
					}else if(options[i] == options[2]){
					    link2.setAttribute("href","Ankle-Straps.php");	
                        link2.innerText = options[2];
                        n.appendChild(link2);
					}else if(options[i] == options[3]){
					    link3.setAttribute("href","High-Heels.php");	
                        link3.innerText = options[3];
                        n.appendChild(link3);
					}else if(options[i] == options[4]){
					    link4.setAttribute("href","Wedges.php");	
                        link4.innerText = options[4];
                        n.appendChild(link4);
					}else if(options[i] == options[5]){
					    link5.setAttribute("href","Stilettoes.php");	
                        link5.innerText = options[5];
                        n.appendChild(link5);
					}else if(options[i] == options[6]){
					    link6.setAttribute("href","Heeled-Boots.php");	
                        link6.innerText = options[6];
                        n.appendChild(link6);
					}else if(options[i] == options[7]){
					    link7.setAttribute("href","Stilettoes.php");	
                        link7.innerText = options[7];
                        n.appendChild(link7);
					}else if(options[i] == options[8]){
					    link8.setAttribute("href","Ankle-Straps.php");	
                        link8.innerText = options[8];
                        n.appendChild(link8);
					}else if(options[i] == options[9]){
					    link9.setAttribute("href","T-Straps.php");	
                        link9.innerText = options[9];
                        n.appendChild(link9);
                    }else if(options[i] == options[10]){								
					    link10.setAttribute("href","Heeled-Boots.php");	
                        link10.innerText = options[10];
                        n.appendChild(link10);
					}else if(options[i] == options[11]){
					    link11.setAttribute("href","High-Heels.php");	
                        link11.innerText = options[11];
                        n.appendChild(link11);
					}else if(options[i] == options[12]){
					    link12.setAttribute("href","Wedges.php");	
                        link12.innerText = options[12];
                        n.appendChild(link12);
					}else if(options[i] == options[13]){
					    link13.setAttribute("href","ACCESSORIES.php");	
                        link13.innerText = options[13];
                        n.appendChild(link13);
					}else if(options[i] == options[14]){
					    link14.setAttribute("href","women-footwear.php");	
                        link14.innerText = options[14];
                        n.appendChild(link14);
                    }									
					document.getElementById("datalist").appendChild(n);
				}
			}						
		}	
					
        function openNav(){
            document.getElementById("user").style.width = "250px";
        }

        function closeNav(){
            document.getElementById("user").style.width = "0px";
        }			
        function opencart(){
            document.getElementById("usercart").style.width = "22%";
        }
        function closecart(){
            document.getElementById("usercart").style.width = "0px";
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
		    }else{
		        document.getElementById('empty-message').style.display = 'none';
		    }				
		}			
		$('.move-to-cart').click(function(event){
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
		
		$('#login-button').click(function(){
		    var mobileorid = document.getElementById("email-number-input").value;
		    var password = document.getElementById("login-password").value;
		    if(mobileorid === ""){
		        document.getElementById('field-validation-1').style.display = "block";
				document.getElementById("email-number-input").style.border = "2px solid #DC143C";
				document.getElementById("email-number-input").style.backgroundColor = "#FFF8DC";
				document.getElementById("email-number-input").style.boxShadow = "0px 0px 5px 1px #DC134C";
				return false;
		    }else if(password === ""){
                document.getElementById('field-validation-2').style.display = "block";
				document.getElementById("login-password").style.border = "2px solid #DC143C";
				document.getElementById("login-password").style.backgroundColor = "#FFF8DC";
				document.getElementById("login-password").style.boxShadow = "0px 0px 5px 1px #DC134C";
				return false;
            }else{
			    document.getElementById('field-validation-1').style.display = "none";
                document.getElementById('field-validation-2').style.display = "none";
				return true;  
            }					
        });		
		$('#forget-legend').click(function(){
		    var mobileoridforforgetpassword = document.getElementById("email-number-input").value;
		    if(mobileoridforforgetpassword === ""){
		        document.getElementById('field-validation-1').style.display = "block";
				document.getElementById("email-number-input").style.border = "2px solid #DC143C";
				document.getElementById("email-number-input").style.backgroundColor = "#FFF8DC";
				document.getElementById("email-number-input").style.boxShadow = "0px 0px 5px 1px #DC134C";					
				return false;
			}else{
			    document.getElementById('field-validation-1').style.display = "none";
			    return true;
			}
		});	
		$('#OTP-request').click(function(){
		    var mobileoridforforgetpassword = document.getElementById("email-number-input").value;
		    if(mobileoridforforgetpassword === ""){
		        document.getElementById('field-validation-1').style.display = "block";
				document.getElementById("email-number-input").style.border = "2px solid #DC143C";
				document.getElementById("email-number-input").style.backgroundColor = "#FFF8DC";
				document.getElementById("email-number-input").style.boxShadow = "0px 0px 5px 1px #DC134C";					
				return false;
			}else{
			    document.getElementById('field-validation-1').style.display = "none";
			    return true;
			}
		});			
		$('#proceed-button').click(function(){
		    var numberforotp = document.getElementById("email-input-of-signup").value;
		    if(numberforotp === ""){
		        document.getElementById('field-validation-3').style.display = "block";
				document.getElementById("email-input-of-signup").style.border = "2px solid #DC143C";
				document.getElementById("email-input-of-signup").style.backgroundColor = "#FFF8DC";
				document.getElementById("email-input-of-signup").style.boxShadow = "0px 0px 5px 1px #DC134C";					
				return false;
			}else{
			    document.getElementById('field-validation-3').style.display = "none";
			    return true;
			}
		});	
        $('#login-button').mouseover(function(){
		    var loginbuttonnumberorid = document.getElementById("email-number-input").value;
		    var loginbuttonpassword = document.getElementById("login-password").value;
			if(loginbuttonnumberorid === '' || loginbuttonpassword === ''){
                document.getElementById('login-button').style.cursor = "not-allowed";
            }else{
                document.getElementById('login-button').style.cursor = "pointer";
            }					
		});	
        $('#login-button').mouseover(function(){
		    var otprequestbutton = document.getElementById("email-number-input").value;	
			if(otprequestbutton === ''){
                document.getElementById('OTP-request').style.cursor = "not-allowed";
            }else{
                document.getElementById('OTP-request').style.cursor = "pointer";
            }	
        });	
        $('#proceed-button').mouseover(function(){
		    var mobilebutton = document.getElementById("email-input-of-signup").value;	
			if(mobilebutton === ''){
                document.getElementById('proceed-button').style.cursor = "not-allowed";
            }else{
                document.getElementById('proceed-button').style.cursor = "pointer";
            }	
        });					
	</script>
<!--     <script type="text/javascript"> 
	    var itemcount = document.querySelector('h2');
		var newstyle = document.querySelector('.new-style');
	    var button = document.getElementsByClassName('move-to-cart');
        for(but of button){
		    but.addEventListener('click', (e)=>{
			    var add = Number(itemcount.getAttribute('data-count')|| 0);
				itemcount.setAttribute('data-count', add + 1);		
				var parent = e.target.parentNode;
				var clone = parent.cloneNode(true);
				newstyle.appendChild(clone);
                clone.lastElementChild.innerHTML = '<i id="remove" class="fas fa-trash"></i>';
                $('#remove').click(function(){
		            clone.style.display = "none";
		        });						
			})  
        }		
    </script>	 -->
	<script>
	    let field = document.querySelector('.main-div-design-img-div');
	    let li = Array.from(field.children);
	    let select = document.getElementById('sort-by-heading-sub-div-id');
		let ar = [];
		for(let i of li){
		    const last = i.lastElementChild;
			const x = last.textContent.trim();
			const y = Number(x.substring(1));
			i.setAttribute('data-price', y);
			ar.push(i);
		}
		select.onchange = sortingvalue;
		function sortingvalue(){
		    if(this.value === 'NewestFirst'){
			    while(field.firstChild){
				    field.removeChild(field.firstChild);
				}
				field.append(...ar);
			}
		    if(this.value === 'hightolow'){
                 sortElem(field, li, false);
			}
		    if(this.value === 'lowtohigh'){
                sortElem(field, li, true);
			}				
		}
		function sortElem(filed, li, asc){
		    let dm, sortli;
            dm = asc ? 1 : -1; 
			sortli = li.sort((a, b)=>{
			    const ax = a.getAttribute('data-price');
			    const bx = b.getAttribute('data-price');
				return ax > bx ? (1*dm) : (-1*dm);
			});
	        while(field.firstChild){
	    	    field.removeChild(field.firstChild);
	    	}
			field.append(...sortli);
		}			
	</script>	
</body>
</html>