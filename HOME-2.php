<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Online Shopping Site In India For Ladies Footwear(All)
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
    <section class="header">
		<!-- navigation-1-start -->
	    <nav class="nav1">
		    <div class="search-in">
			    <!-- company's-logo -->
			    <a href="#" id="A9-STORE-logo">
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
				<!-- drop-down, search-input, clear, search-button -->
				<div class="all-search-options" id="all-search-options">
			        <form>
                        <select id="searchDropdownbox" onchange="location=this.value;" name="Types" class="drop-down" title="Search in">
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
				<script type="text/javascript">
				    $(document).ready(function(){
					    $('.drop-down').change(function(){
						    $('#auto-resize-of-drop-down-select-option').php($('.drop-down option:selected').text()); 
						    $(this).width($('#auto-resize-of-drop-down-select').width()); 
						});
					});
				</script>
		        <!-- searchbox-side-login-button-start -->																		
				<div class="login-button-home">
				    <button type="button" id="login-button-home-nav1"><a href="#" style="text-decoration: none; color: #000000; text-shadow: 1px 1px 1px #DC134C;"><span id="login-open-span">My Account</span></a><div class="highlight"></div></button>
	                <div id="login-button-home-nav1-options"><i style="font-size: 20px;" title="Options" class="fa fa-caret-down"></i>	
                        <div id="login-button-options-hover">
						    <ul>
								<li><a href="Orders.php"><small><strong><i class="fa fa-shopping-bag"></i> Orders</strong></small></a></li>
								<li><a href="Wishlist.php"><small><strong><i class="fa fa-heart"></i> Wishlist</strong></small></a></li>
								<li><a href="YOUR ACCOUNT.php"><small><strong><i class="fa fa-user-tie"></i> Account</strong></small></a></li>
								<li><a href=""><small><strong><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</strong></small></a></li>
							</ul>
                        </div>
                    </div>					
				</div>
		        <!-- searchbox-side-login-button-end -->				
				<!-- cart-logo -->
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
            </div>		
		</nav>
        <!-- navigation-1-end -->		
			<!-- user's-search-hints-start -->	
                <div class="searchwrapper" id="searchwrapper">
				    <div id="datalist">
			            <ul>
			            </ul>					    
				    </div>
                </div>	
                <script type="text/javascript">	
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
                </script>		
			<!-- user's-search-hints-end -->								
            <div id="overlay"></div>
            <script type="text/javascript">
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
                $("#signup-from-login-message").click(function(){
				    document.getElementById("create-an-account-div").style.display = "block";
				});	
                $("#signup-from-login-message").click(function(){
				    document.getElementById("A9-STORE-overlay").style.display = "block";
				});					
            </script>				
            <!-- company's-info -->			
			<div class="A9-STORE-info" id="A9-STORE-info">
			    <span><i class="fa fa-times" style="cursor: pointer;" id="A9-STORE-info-close"></i></span>
		        <h3>Hello, Welcome To A9 STORE</h3>
			    <p>A9 STORE is a 21<sup>st</sup> century based online shopping, site that deals with the women's lower extremity, from the knee to the foot in various departments.
			        <a href="ABOUT.php" title="More Aboutb Us" style="text-decoration: none;"><button type="button" id="more-info">Know More</button></a>
			    </p>
			    <h4 style="margin-top: 25px;">Special Option</h4>
				<h6 style="text-shadow: 1px 1px 1px #ffff00; margin-top: 5px;">Background Music For Home</h6>
				<h6 style="text-shadow: 1px 1px 1px #ffff00; margin-top: 5px;">Comming Soon</h6>	
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
			<div id="A9-STORE-overlay"></div>
			<script>
			    var open = document.getElementById("A9-STORE-logo");
				open.addEventListener('click',function(){
				    document.getElementById("A9-STORE-info").style.display = "block";
					document.getElementById("A9-STORE-overlay").style.display = "block";
				});			
			    var close = document.getElementById("A9-STORE-info-close");
				close.addEventListener('click',function(){
				    document.getElementById("A9-STORE-info").style.display = "none";
					document.getElementById("A9-STORE-overlay").style.display = "none";
				});						
			</script>
        <!-- navigation-2-start -->			
		<nav class="nav2">
		    <!-- side-menu-start -->
            <div id="user" class="menu" aria-hidden="true">
			    <a href="javascript:void(0)" class="close" onclick="closeNav()"><span id="close" title="Close">&times;</span></a>
		        <span><i style='cursor: pointer; margin-left: 75px; font-size: 30px;'class="fa fa-user-tie" title="User"></i></span>
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
				       <li><a href="" class="btn">Sign Out</a></li>				   
				    </ul>
			    </div>
            </div>
			<!-- side-menu-end -->
            <span><i id="bars" onclick="openNav()" class="fa fa-bars" title="All"></i></span>
            <script>
                function openNav(){
                    document.getElementById("user").style.width = "250px";
                }

                function closeNav(){
                    document.getElementById("user").style.width = "0px";
                }
            </script>
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); margin-left: 1.5%;"></div>	
            <!-- default-delivery-address-start -->			
            <div class="address" id="address" aria-hidden="true">
                <span class="address">Deliver To User</span>
		        <span><i id="mapicon" class="fa fa-map-marked"></i></span>
            </div>	
            <!-- default-delivery-address-end -->					
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); margin-left: 1.5%;"></div>	
            <!-- benefits-start -->					
            <div style="margin-left: 1.5%; cursor: pointer;" id="benefits-div">
			    <h5 style="text-shadow: 1px 1px 1px #DC134C;">Benefits</h5>
            </div>		
            <!-- benefits-end -->								
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); margin-left: 1.5%;"></div>				
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80);  position: absolute; right: 7.5%;"></div>
            <!-- service-start -->								
            <div style="right: 2.5%; position: absolute; cursor: pointer;" id="benefits-div">
			    <a href="HELP.php" style="text-decoration: none; color: #000000;"><h5 style="text-shadow: 1px 1px 1px #DC134C;">Service</h5></a>
            </div>	
            <!-- service-end -->								
            <div style="width: 2px; height: 20px; background: RGB(239, 192, 80); box-shadow: 0px 0px 5px 1px RGB(239, 192, 80); position: absolute; right: 1%;"></div>	
            <!-- side-cart-start -->			
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
            <!-- side-cart-end -->			
            <script>
                function opencart(){
                    document.getElementById("usercart").style.width = "22%";
                }
                function closecart(){
                    document.getElementById("usercart").style.width = "0px";
		        }	
            </script>			
        </nav>	
		<!-- navigation-2-end -->
		    <!-- benefits-contents-start -->
			<div id="benefits-container1" style="display: none;">
				<svg height="20" width="20" id="benefits-arrow">
                    <path d="M10 0 L0 20 L20 20 Z" fill="rgb(225, 165, 0)"/>
                </svg>					
			    <div class="benefits-container2">
				    <span id="benfits-close" style="font-size: 25px; cursor: pointer;">&times;</span>
			        <ul>
			    	    <a href="HELP.php"><li>Help Anytime</li></a>
			    		<a href="Repair-policy.php"><li>Product Repair</li></a>					
			    		<a href="Return-policy.php"><li>Product Return</li></a>
			    		<a href="Exchange-policy.php"><li>Product Exchange</li></a>
						<li>Download The App</li>
			    	</ul>
			    </div>	
            </div>	
		    <!-- benefits-contents-end -->			
            <script>
			    $('#benefits-div').click(function(){
				    document.getElementById("benefits-container1").style.display = "block";
				});
			    $('#benfits-close').click(function(){
				    document.getElementById("benefits-container1").style.display = "none";
				});				
            </script>	
		    <!-- default-address-pop-up-start -->			
			<div id="address-pop-up">
			    <span style="cursor: pointer;"><i class="fa fa-times" id="address-pop-up-close" title="Close"></i></span>
			    <h4>Deliver To <span>User</span></h4>
				<span><img style="border-radius: 10%; width: 25px;" src="Images/A9-STORE.jpg" /></span>
				<h5 style="text-shadow: 1px 1px 1px #ffff00; margin-top: 5px;">Default Address</h5>
				<div id="address-pop-up-user-default-address-div" style="background: rgba(255, 165, 0); padding: 5px 5px;">

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
		    <!-- default-address-pop-up-end -->						
            <script>
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
            </script>
		    <!-- user's-first-div -->									
			<div class="userintro">
			    <h4>Hello User ,</h4>
				<h4>Welcome To <img style="border-radius: 50%; width: 25px;" src="Images/A9-STORE.jpg" /></h4>
 				<div class="line-separate-2"></div>
				<ul>
					<li><a style="text-decoration: none" href="">Press</a></li>						
				    <li><a style="text-decoration: none; cursor: pointer;" id="eventopen">Events</a></li>			
				    <li><a style="text-decoration: none; cursor: pointer;" id="galleryopen">Gallery</a></li>
				</ul>
				<div class="line-separate-4" style="margin-top: 10px;"></div>
			</div>
		    <!-- user's-second-div -->												
			<div class="anything-more-in-future">
			    <h4>Coming Soon</h4>
 				<div class="line-separate-2"></div>
				<div style="display: flex; padding: 5px 5px;">
				    <a href="COMING SOON.php" style="text-decoration: none; margin-left: 10%;"><img style="width: 80px; height: 80px; box-shadow: 0px 5px 10px 2px rgba(255, 165, 0);"  src="images/coming-soon-img-1.jpg" /></a>
				    <a href="COMING SOON.php" style="text-decoration: none; margin-left: 20%;"><img style="width: 80px; height: 80px; box-shadow: 0px 5px 10px 2px rgba(255, 165, 0);" src="images/coming-soon-img-2.jpg" /></a>
                </div>				
				<a href="COMING SOON.php"><button class="coming-soon-explore-all-button">Explore All</button></a>
			</div>	
		    <!-- user's-animation-of-offers/deals -->												
			<div class="inner-div-animated-images">		
                <figure>				
		            <!-- <img style="width: 332px; height: 500px;" src="Images/slide-image1.jpg" alt=""/>
		            <img style="width: 332px; height: 500px;" src="Images/slide-image2.jpg" alt=""/>
		            <img style="width: 332px; height: 500px;" src="Images/slide-image3.jpg" alt=""/>
		            <img style="width: 332px; height: 500px;" src="Images/slide-image4.jpg" alt=""/> -->
					<img style="width: 1345px; height: 500px; box-shadow: 0px 60px 60px 5px #333;" src="images/slide-img-1.jpg" alt="" />
		            <!-- <img style="width: 333px; height: 500px;" src="Images/slide-image5.jpg" alt=""/>
		            <img style="width: 333px; height: 500px;" src="Images/slide-image6.jpg" alt=""/>
		            <img style="width: 333px; height: 500px;" src="Images/slide-image7.jpg" alt=""/>
		            <img style="width: 333px; height: 500px;" src="Images/slide-image8.jpg" alt=""/> -->
					<img style="width: 1355px; height: 500px; box-shadow: 0px 60px 60px 5px #bb0a1e;" src="images/slide-img-2.jpg" alt="" />
<!-- 		            <img style="width: 334px; height: 500px;" src="Images/slide-image9.jpg" alt=""/>
		            <img style="width: 334px; height: 500px;" src="Images/slide-image10.jpg" alt=""/>
		            <img style="width: 334px; height: 500px;" src="Images/slide-image11.jpg" alt=""/>
		            <img style="width: 334px; height: 500px;" src="Images/slide-image12.jpg" alt=""/> -->
					<img style="width: 1340px; height: 500px; box-shadow: 0px 60px 60px 5px #222;" src="images/slide-img-4.jpg" alt="" />					
<!-- 		            <img style="width: 335px; height: 500px;" src="Images/slide-image13.jpg" alt=""/>
		            <img style="width: 335px; height: 500px;" src="Images/slide-image14.jpg" alt=""/>
		            <img style="width: 335px; height: 500px;" src="Images/slide-image15.jpg" alt=""/>
		            <img style="width: 335px; height: 500px;" src="Images/slide-image16.jpg" alt=""/> -->	
					<img style="width: 1355px; height: 500px; box-shadow: 0px 60px 60px 5px #999;" src="images/slide-img-5.jpg" alt="" />										
<!-- 		            <img style="width: 332px; height: 500px;" src="Images/slide-image1.jpg" alt=""/>
		            <img style="width: 332px; height: 500px;" src="Images/slide-image2.jpg" alt=""/>
		            <img style="width: 332px; height: 500px;" src="Images/slide-image3.jpg" alt=""/>
		            <img style="width: 332px; height: 500px;" src="Images/slide-image4.jpg" alt=""/> -->	
					<img style="width: 1347px; height: 500px; box-shadow: 0px 60px 60px 5px #333;" src="images/slide-img-1.jpg" alt="" />									
                </figure>					
            </div>	
		    <!-- user's-third-div -->												
			<div class="learn-and-apply">
			    <h4>Glimpse</h4>				
				<div class="line-separate-5"></div>
				<p style="margin-top: 15px; font-weight: bold; padding: 20px 20px; font-size: 13px;">Money can't buy happiness, but it can buy <strong style="color: rgba(255, 165, 0); text-shadow: 1px 1px 2px #dddddd;">fabulous</strong> shoes & that, can lift one's "sole".</p>
				<div class="line-separate-6" style="margin-top: 10px;"></div>
			</div>		
		    <!-- user's-forth(today's offer's)-div -->												
            <div class="todays-offers">
			    <h3>Today's Offers <i style="left: 1%; top: 2%; position: absolute;" class="fas fa-user-clock"></i></h3>
				<div id="timeout-clock"></div>
				<a href="Today's-offers.php"><button class="view-all-button">View All</button></a>
				<div class="line-separate-10"></div>
				<div class="on-screen-images" id="on-screen-images1"> 
			    	<button class="more-option-btn" id="btn-for-left-1" style=" opacity: 0.5; margin-top: 3%;"><i class="fa fa-chevron-left"></i></button> 
			        <a href="Stilettoes.php"><span><img src="Images/show-image-1.jpg" id="show-image1" /></span></a>
				    <a href="Ankle-Straps.php"><span><img src="Images/show-image-2.jpg" id="show-image2" /></span></a>
				    <a href="Stilettoes.php"><span><img src="Images/show-image-3.jpg" id="show-image3" /></span></a>	
				    <a href="Stilettoes.php"><span><img src="Images/show-image-4.jpg" id="show-image4" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-5.jpg" id="show-image5" /></span></a>
			    	<a href="Ankle-Straps.php"><span><img src="Images/show-image-6.jpg" id="show-image6" /></span></a>
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-7.jpg" id="show-image7" /></span></a>						
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-8.jpg" id="show-image8" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-9.jpg" id="show-image9" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-10.jpg" id="show-image10" /></span></a>
			    	<button class="more-option-btn" id="btn-for-right-1" style="left: 98.7%; margin-top: 3%;"><i class="fa fa-chevron-right"></i></button> 									
				</div>	
            </div>	
			<script>
                var run = setInterval(function(){
				    var till = new Date('dec 31, 2023 24:00:00').getTime();
					var now = new Date().getTime();
					var diff = till - now;
					var days = Math.floor(diff /(1000*24*60*60));
					var hours = Math.floor(diff % (1000*24*60*60)/(1000*60*60));
					var minutes = Math.floor(diff % (1000*60*60)/(1000*60));
					var seconds = Math.floor(diff % (1000*60)/(1000));
					document.getElementById('timeout-clock').innerHTML = days + " : " + hours + " : " + minutes + " : " + seconds + " Left";
				}, 1000);				
			</script>
		    <!-- user's-fifth(in demand)-div -->												
            <div class="in-demand">
			    <h3>In Demand</h3>
				<a href="In-demand.php"><button class="view-all-button">View All</button></a>
				<div class="line-separate-10"></div>
				<div class="on-screen-images" id="on-screen-images2"> 
			    	<button class="more-option-btn" id="btn-for-left-2" style=" opacity: 0.5; margin-top: 3%;"><i class="fa fa-chevron-left"></i></button> 
			        <a href="Stilettoes.php"><span><img src="Images/show-image-1.jpg" id="show-image1" /></span></a>
				    <a href="Ankle-Straps.php"><span><img src="Images/show-image-2.jpg" id="show-image2" /></span></a>
				    <a href="Stilettoes.php"><span><img src="Images/show-image-3.jpg" id="show-image3" /></span></a>	
				    <a href="Stilettoes.php"><span><img src="Images/show-image-4.jpg" id="show-image4" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-5.jpg" id="show-image5" /></span></a>
			    	<a href="Ankle-Straps.php"><span><img src="Images/show-image-6.jpg" id="show-image6" /></span></a>
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-7.jpg" id="show-image7" /></span></a>						
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-8.jpg" id="show-image8" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-9.jpg" id="show-image9" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-10.jpg" id="show-image10" /></span></a>
			    	<button class="more-option-btn" id="btn-for-right-2" style="left: 98.7%; margin-top: 3%;"><i class="fa fa-chevron-right"></i></button> 									
				</div>				
            </div>															
            <script>	
			    var open = document.getElementById("strong");
				open.addEventListener('click',function(){
				    document.getElementById("create-an-account-div").style.display = "block";
					document.getElementById("A9-STORE-overlay").style.display = "block";
				});								
            </script>	
		    <!-- aisle-of-top-div-start -->															
			<div class="top-recommended-images">
			    <h3>Aisle Of Top</h3>
				<a href="Aisle-of-top.php"><button class="view-all-button">View All</button></a>				
				<div class="line-separate-7"></div>
				<div class="on-screen-images" id="on-screen-images3"> 
			    	<button class="more-option-btn" id="btn-for-left-3" style=" opacity: 0.5; margin-top: 3%;"><i class="fa fa-chevron-left"></i></button> 
			        <a href="Stilettoes.php"><span><img src="Images/show-image-1.jpg" id="show-image1" /> </span></a>
				    <a href="Ankle-Straps.php"><span><img src="Images/show-image-2.jpg" id="show-image2" /></span></a>
				    <a href="Stilettoes.php"><span><img src="Images/show-image-3.jpg" id="show-image3" /></span></a>	
				    <a href="Stilettoes.php"><span><img src="Images/show-image-4.jpg" id="show-image4" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-5.jpg" id="show-image5" /></span></a>
			    	<a href="Ankle-Straps.php"><span><img src="Images/show-image-6.jpg" id="show-image6" /></span></a>
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-7.jpg" id="show-image7" /></span></a>						
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-8.jpg" id="show-image8" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-9.jpg" id="show-image9" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-10.jpg" id="show-image10" /></span></a>
			    	<button class="more-option-btn" id="btn-for-right-3" style="left: 98.7%; margin-top: 3%;"><i class="fa fa-chevron-right"></i></button> 									
				</div>							
			</div>
		    <!-- aisle-of-top-div-end -->
		    <!-- advertisements-start -->																		
			<div class="advertisement-2">
<!--                 <div style="background: #FF1493; z-index: 0; width: 11%; height: 12%; left: 10.4%; top: 54.9%; position: fixed; font-weight: bold; text-shadow: none; font-size: 20px;"><em style="color: #ffffff;">on</em></div>										
                <div style="background: #FF1493; width: 15%; height: 5%; left: 72%; top: 95.5%; position: fixed; font-weight: bold; text-shadow: none; font-size: 10px;"><em>www.A9 STORE.com</em></div> -->										
			</div>				
			<div class="advertisement">	
<!--                 <div style="background: linear-gradient(200deg, rgba(0, 0, 0, 0) 0%, #8b324d 12%, #f198b3 80%, rgba(0, 0, 0, 0) 100%); width: 45%; height: 9%; margin-left: 5%; margin-top: 25.5%; position: absolute; font-weight: bold; text-shadow: none; font-size: 20px;"><em>ANINE STORE &trade;</em></div>							
 -->			</div>	
		    <!-- advertisements-end -->		
		    <!-- recently-viewed-start -->																					
			<div class="recently-viewed">
                <h3>Latterly Viewed</h3>
				<a href="Latterly-Viewed.php"><button class="view-all-button">View All</button></a>				
				<div class="line-separate-7"></div>				
			</div>	
		    <!-- recently-viewed-end -->	
		    <!-- perhaps-these-start -->																					
            <div class="more-products">	
                <h3>Perhaps These</h3>	
				<a href="Perhaps-These.php"><button class="view-all-button">View All</button></a>				
				<div class="line-separate-7"></div>				
				<div class="on-screen-images" id="on-screen-images4"> 
			    	<button class="more-option-btn" id="btn-for-left-4" style=" opacity: 0.5; margin-top: 3%;"><i class="fa fa-chevron-left"></i></button> 
			        <a href="Stilettoes.php"><span><img src="Images/show-image-1.jpg" id="show-image1" /></span></a>
				    <a href="Ankle-Straps.php"><span><img src="Images/show-image-2.jpg" id="show-image2" /></span></a>
				    <a href="Stilettoes.php"><span><img src="Images/show-image-3.jpg" id="show-image3" /></span></a>	
				    <a href="Stilettoes.php"><span><img src="Images/show-image-4.jpg" id="show-image4" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-5.jpg" id="show-image5" /></span></a>
			    	<a href="Ankle-Straps.php"><span><img src="Images/show-image-6.jpg" id="show-image6" /></span></a>
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-7.jpg" id="show-image7" /></span></a>						
				    <a href="Heeled-Boots.php"><span><img src="Images/show-image-8.jpg" id="show-image8" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-9.jpg" id="show-image9" /></span></a>						
				    <a href="Stilettoes.php"><span><img src="Images/show-image-10.jpg" id="show-image10" /></span></a>
			    	<button class="more-option-btn" id="btn-for-right-4" style="left: 98.7%; margin-top: 3%;"><i class="fa fa-chevron-right"></i></button> 									
				</div>				
		    </div>	
		    <!-- perhaps-these-end -->		
		    <!-- gallery(user's-first-div-third-option)-start -->																								
            <div class="gallery" id="gallery">
			    <span id="gallery-close">&times;</span>
			    <div class="sliding-images-gallery-main-div">
				    <div class="sliding-image-div">
					    <img src="images/sliding-img-1.jpg" />
					</div>
				    <div class="sliding-image-div">
					    <img src="images/sliding-img-2.jpg" />
					</div>					
				    <div class="sliding-image-div">
					    <img src="images/sliding-img-3.jpg" />
					</div>
				    <div class="sliding-image-div">
					    <img src="images/sliding-img-4.jpg" />
					</div>
				    <div class="sliding-image-div">
					    <img src="images/sliding-img-5.jpg" />
					</div>
				    <div class="sliding-image-div">
					    <img src="images/sliding-img-6.jpg" />
					</div>	
                    <button id="prev" onclick="plusslide(-1)"> < </button>					
                    <button id="next" onclick="plusslide(1)"> > </button>					
				</div>
				<div class="sliding-images-thumbnails">
				    <div class="sliding-image-thumbnails-div" onclick="currentslide(1)">
				        <img src="images/sliding-img-1.jpg">
				    </div>
				    <div class="sliding-image-thumbnails-div" onclick="currentslide(2)">
				        <img src="images/sliding-img-2.jpg">
				    </div>
				    <div class="sliding-image-thumbnails-div" onclick="currentslide(3)">
				        <img src="images/sliding-img-3.jpg">
				    </div>
				    <div class="sliding-image-thumbnails-div" onclick="currentslide(4)">
				        <img src="images/sliding-img-4.jpg">
				    </div>
				    <div class="sliding-image-thumbnails-div" onclick="currentslide(5)">
				        <img src="images/sliding-img-5.jpg">
				    </div>
				    <div class="sliding-image-thumbnails-div" onclick="currentslide(6)">
				        <img src="images/sliding-img-6.jpg">
				    </div>						
				</div>
            </div>
		    <!-- gallery(user's-first-div-third-option)-end -->		
		    <!-- events(user's-first-div-second-option)-start -->																											
			<div class="event" id="event">
			    <span id="event-close">&times;</span>
			    <div class="event-image-div">
				    <img src="images/event-image-1.jpg" />
					<button id="book-tickets">Book Tickets</button>
				</div>
			</div>
		    <!-- events(user's-first-div-third-option)-end -->		
		    <!-- description(release-date)-start -->																											
			<div id="releasing-date">
			    <span id="releasing-date-close">&times;</span>
				<div class="releasing-date-sub-div">
				    <h2>Release Date</h2>
					<a href="COMING SOON.php" style="text-decoration: none;"><button id="release-date-details-button">Details</button></a>
				</div>
		    </div>
		    <!-- description(release-date)-end -->																														
            <script type="text/javascript">
		        var slideindex = 1;
		    	showslide(slideindex);
		    	function plusslide(n){
		    	    showslide(slideindex += n);
		    	}
		    	function currentslide(n){
		    	    showslide(slideindex = n);
		    	}	
                function showslide(n){			
		            var image = document.getElementsByClassName('sliding-image-div');
		            var thumbnail = document.getElementsByClassName('sliding-image-thumbnails-div');
		    		if(n > image.length){
		    		    slideindex = 1;
		    		}
		    		if(n < 1){
		    		    slideindex = image.length;
		    		}				
		    		for(var i = 0; i < image.length; i++){
		    		    image[i].style.display = "none";
		    		}
		    		for(var i = 0; i < thumbnail.length; i++){
		    		    thumbnail[i].className = thumbnail[i].className.replace(' thumbnailactive', '');
		    		}	
                    image[slideindex-1].style.display = "block";
                    thumbnail[slideindex-1].className += " thumbnailactive";
                }
		    	$('#galleryopen').click(function(){
		    	    document.getElementById('gallery').style.display = "block";
		    	});
		    	$('#gallery-close').click(function(){
		    	    document.getElementById('gallery').style.display = "none";
		    	});				
		    	$('#eventopen').click(function(){
		    	    document.getElementById('event').style.display = "block";
		    	});
		    	$('#event-close').click(function(){
		    	    document.getElementById('event').style.display = "none";
		    	});		
		    	$('#our-events').click(function(){
		    	    document.getElementById('event').style.display = "block";
		    	});				
            </script>		
		    <script type="text/javascript">
		        var buttonleft = document.getElementById("btn-for-left-1");
		        var buttonright = document.getElementById("btn-for-right-1");
		        var buttonleft2 = document.getElementById("btn-for-left-2");
		        var buttonright2 = document.getElementById("btn-for-right-2");	
		        var buttonleft3 = document.getElementById("btn-for-left-3");
		        var buttonright3 = document.getElementById("btn-for-right-3");
		        var buttonleft4 = document.getElementById("btn-for-left-4");
		        var buttonright4 = document.getElementById("btn-for-right-4");				
		    
                buttonleft.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images1").scrollLeft -= 750;
		    		document.getElementById("btn-for-left-1").style.opacity = 0.5;				
		    		document.getElementById("btn-for-right-1").style.opacity = 1;					
		    	});
                buttonright.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images1").scrollLeft += 750;
		    		document.getElementById("btn-for-left-1").style.opacity = 1;				
		    		document.getElementById("btn-for-right-1").style.opacity = 0.5;								
		    	});		
		    
                buttonleft2.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images2").scrollLeft -= 750;
		    		document.getElementById("btn-for-left-2").style.opacity = 0.5;				
		    		document.getElementById("btn-for-right-2").style.opacity = 1;					
		    	});
                buttonright2.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images2").scrollLeft += 750;
		    		document.getElementById("btn-for-left-2").style.opacity = 1;				
		    		document.getElementById("btn-for-right-2").style.opacity = 0.5;								
		    	});		
		    
                buttonleft3.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images3").scrollLeft -= 750;
		    		document.getElementById("btn-for-left-3").style.opacity = 0.5;				
		    		document.getElementById("btn-for-right-3").style.opacity = 1;					
		    	});
                buttonright3.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images3").scrollLeft += 750;
		    		document.getElementById("btn-for-left-3").style.opacity = 1;				
		    		document.getElementById("btn-for-right-3").style.opacity = 0.5;								
		    	});	

                buttonleft4.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images4").scrollLeft -= 750;
		    		document.getElementById("btn-for-left-4").style.opacity = 0.5;				
		    		document.getElementById("btn-for-right-4").style.opacity = 1;					
		    	});
                buttonright4.addEventListener('click', function(){
		    	    document.getElementById("on-screen-images4").scrollLeft += 750;
		    		document.getElementById("btn-for-left-4").style.opacity = 1;				
		    		document.getElementById("btn-for-right-4").style.opacity = 0.5;								
		    	});				
		    </script>`
            <script type="text/javascript">
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
            </script>	
            <script type="text/javascript">
		        $('#login-button').click(function(){
		            var mobileorid = document.getElementById("email-number-input").value;
		            var password = document.getElementById("login-password").value;
		    	    if(mobileorid === ""){
		    	        document.getElementById('field-validation-1').style.display = "block";
		    			document.getElementById("email-number-input").style.border = "2px solid #DC143C";
		    			document.getElementById("email-number-input").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("email-number-input").style.boxShadow = "0px 0px 5px 1px #DC134C";
		    			return false;
		    	    }else if(!mobileorid.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
		    	        document.getElementById('field-validation-0').style.display = "block";
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
                        document.getElementById('field-validation-0').style.display = "none";
		    			return true;  
                    }					
                });		
		        $('#login-button2').click(function(){
		            var forotp = document.getElementById("otp").value;
		    	    if(forotp === ""){
		    	        document.getElementById('field-validation-5').style.display = "block";
		    			document.getElementById("otp").style.border = "2px solid #DC143C";
		    			document.getElementById("otp").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("otp").style.boxShadow = "0px 0px 5px 1px #DC134C";
		    			return false;
                    }else{
		    		    document.getElementById('field-validation-1').style.display = "none";
		    			return true;  
                    }					
                });	
		        $('#login-button3').click(function(){
				    document.getElementById("why").style.display = "none";
		            var forotp3 = document.getElementById("otp").value;
		            var reprisepassword = document.getElementById("passwordreprise").value;
		            var resetpassword = document.getElementById("passwordreset").value;
		    	    if(resetpassword === ""){
		    	        document.getElementById('field-validation-6').style.display = "block";
		    			document.getElementById("passwordreset").style.border = "2px solid #DC143C";
		    			document.getElementById("passwordreset").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("passwordreset").style.boxShadow = "0px 0px 5px 1px #DC134C";
		    			return false;
                    }else if(reprisepassword === ""){
					    document.getElementById('field-validation-6').style.display = "none";
                        document.getElementById('field-validation-7').style.display = "block";
		    			document.getElementById("passwordreprise").style.border = "2px solid #DC143C";
		    			document.getElementById("passwordreprise").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("passwordreprise").style.boxShadow = "0px 0px 5px 1px #DC134C";
		    			return false;
                    }else if(forotp3 === ""){
                        document.getElementById('field-validation-7').style.display = "none";					
                        document.getElementById('field-validation-5').style.display = "block";
		    			document.getElementById("otp").style.border = "2px solid #DC143C";
		    			document.getElementById("otp").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("otp").style.boxShadow = "0px 0px 5px 1px #DC134C";
		    			return false;
					}else if(resetpassword !== reprisepassword){
                        document.getElementById('field-validation-5').style.display = "none";					
                        document.getElementById('field-validation-8').style.display = "block";
		    			document.getElementById("passwordreprise").style.border = "2px solid #DC143C";
		    			document.getElementById("passwordreprise").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("passwordreprise").style.boxShadow = "0px 0px 5px 1px #DC134C";					
		    			document.getElementById("passwordreset").style.border = "2px solid #DC143C";
		    			document.getElementById("passwordreset").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("passwordreset").style.boxShadow = "0px 0px 5px 1px #DC134C";		
                        return false;						
					}else{
		    		    document.getElementById('field-validation-5').style.display = "none";
		    		    document.getElementById('field-validation-6').style.display = "none";
		    		    document.getElementById('field-validation-7').style.display = "none";
		    		    document.getElementById('field-validation-8').style.display = "none";
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
		    		    document.getElementById('otp').style.display = "block";
		    		    document.getElementById('or').style.display = "none";
		    			document.getElementById("login-password-fieldset").style.display = "none";							
		    			document.getElementById("label3").style.display = "block";						
		    			document.getElementById("label1").style.display = "none";						
		    			document.getElementById("label5").style.display = "block";						
		    			document.getElementById("label6").style.display = "block";						
		    			document.getElementById("passwordreset").style.display = "block";						
		    			document.getElementById("passwordreprise").style.display = "block";						
		    			document.getElementById("email-number-input").style.display = "none";												
		    			document.getElementById("login-button").style.display = "none";												
		    			document.getElementById("login-button3").style.display = "block";												
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
		    			document.getElementById("login-password-fieldset").style.display = "none";							
		    			document.getElementById("label3").style.display = "block";							
		    			document.getElementById("otp").style.display = "block";	
		    			document.getElementById("otp").style.border = "2px solid #DC143C";
		    			document.getElementById("otp").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("otp").style.boxShadow = "0px 0px 5px 1px #DC134C";	
		    			document.getElementById("email-number-input").style.border = "none";
		    			document.getElementById("email-number-input").style.backgroundColor = "none";
		    			document.getElementById("email-number-input").style.boxShadow = "none";							
		    			document.getElementById("or").style.display = "none";							
		    			document.getElementById("login-button").style.display = "none";							
		    			document.getElementById("login-button2").style.display = "block";							
		    		    return false;
		    		}
		    	});			
		        $('#proceed-button').click(function(){
		    	    var numberforotp = document.getElementById("mobile-number-input-of-signup").value;
		    	    if(numberforotp === ""){
		    	        document.getElementById('field-validation-3').style.display = "block";
		    			document.getElementById("mobile-number-input-of-signup").style.border = "2px solid #DC143C";
		    			document.getElementById("mobile-number-input-of-signup").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("mobile-number-input-of-signup").style.boxShadow = "0px 0px 5px 1px #DC134C";					
		    			return false;
					}else if(!numberforotp.match(/^\d{10}$/)){
		    	        document.getElementById('field-validation-4').style.display = "block";
		    	        document.getElementById('field-validation-3').style.display = "none";						
		    			document.getElementById("mobile-number-input-of-signup").style.border = "2px solid #DC143C";
		    			document.getElementById("mobile-number-input-of-signup").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("mobile-number-input-of-signup").style.boxShadow = "0px 0px 5px 1px #DC134C";					
		    			return false;					    					
		    		}else if(numberforotp.length !== 10){
		    	        document.getElementById('field-validation-4').style.display = "block";
		    	        document.getElementById('field-validation-3').style.display = "none";
		    			document.getElementById("mobile-number-input-of-signup").style.border = "2px solid #DC143C";
		    			document.getElementById("mobile-number-input-of-signup").style.backgroundColor = "#FFF8DC";
		    			document.getElementById("mobile-number-input-of-signup").style.boxShadow = "0px 0px 5px 1px #DC134C";	
                        return false;						
					}else{
		    		    document.getElementById('field-validation-3').style.display = "none";
		    	        document.getElementById('field-validation-4').style.display = "none";						
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
		    		if(loginbuttonnumberorid === ''){
                        document.getElementById('OTP-request').style.cursor = "not-allowed";
                    }else{
                        document.getElementById('OTP-request').style.cursor = "pointer";
                    }					
		    	});	
                $('#login-button2').mouseover(function(){
		            var otpinput = document.getElementById("otp").value;
		    		if(otpinput === ''){
                        document.getElementById('login-button2').style.cursor = "not-allowed";
                    }else{
                        document.getElementById('login-button2').style.cursor = "pointer";
                    }					
		    	});		
                $('#login-button3').mouseover(function(){
		            var otpinput = document.getElementById("otp").value;
		            var passwordresetinput = document.getElementById("passwordreset").value;
		            var passwordrepriseinput = document.getElementById("passwordreprise").value;
		    		if(otpinput === '' || passwordrepriseinput === '' || passwordresetinput === ''){
                        document.getElementById('login-button3').style.cursor = "not-allowed";
                    }else{
                        document.getElementById('login-button3').style.cursor = "pointer";
                    }					
		    	});					
                $('#proceed-button').mouseover(function(){
		            var mobilebutton = document.getElementById("mobile-number-input-of-signup").value;	
		    		if(mobilebutton === ''){
                        document.getElementById('proceed-button').style.cursor = "not-allowed";
                    }else{
                        document.getElementById('proceed-button').style.cursor = "pointer";
                    }	
                });				
            </script>		
    </section>	
    <!-- section-end -->
    <!-- description-start -->
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
		        	<li><a id="release-date-opener" class="btn">RELEASING DATE</a></li>
		        	<li><a class="btn" id="our-events">OUR EVENTS</a></li>
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
		    <h6>&#169; 2021-2023 , A9 STORE.com, Inc. | <a href="Terms-of-use.php">Terms Of Use</a> | <a href="Privacy-policy.php">Privacy Policy</a> | <a href="Return-policy.php">Return Policy</a></h6>
		</div>		
	</nav>
    <!-- description-end -->																												
	<script>
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
	</script>
</body>
</html>
<?php
	$email_number_input=$_POST['email_number_input'];
	$password_input=$_POST['password_input'];
	
	/* DATABASE CONNECTION */
	$conn=new mysqli('localhost','root','','user_details');
	if($conn->connect_error){
		die('connection failed :' .$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into user_data(EMAIL,PASSWORD)
			values(?,?)");
		$stmt->bind_param("ss",$email_number_input,$password_input);
		$stmt->execute();
		echo "completed";
		$stmt->close();
		$conn->close();
	}
?>