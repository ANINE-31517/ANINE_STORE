<!DOCTYPE html>
<html>
<head>
<title>A9 STORE (High Heel with zip (chain) and heel cap) Review</title>
<link rel="icon" type="image/jpg" href="Images/A9-STORE.jpg"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="Css/style1.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,600;1,700&display=swap"/>	
<script src="https://kit.fontawesome.com/8f45f87de7.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <nav>
	    <h2 style="color: #ffffff;text-decoration: underline dotted; margin-left: 2%; margin-top: 0%; text-shadow: 2px 2px 2px #DC143C;">Share Your Experience With Us</h2> 			
	    <a href="HOME.php" id="A9-STORE-logo" style="margin-left: 17%;">
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
	</nav>
	<div class="line-separate1"></div>
    <section class="header2" style="min-height: 150vh;">
        <div style="margin-top: 1%;"><span class="page-way" style="margin-left: 2%;"><a href="HOME.php" class="home-way">HOME</a> > <a href="Stiletto.php" class="home-way">A9 Stilleto's</a> > Stiletto-Review</span></div> 		    	
	    <div class="row9">
	        <div class="review-page">
	            <span style="color: #777; font-weight: bold;"><img id="reviewimg" src="images/zoom-img-1.jpg" />A9 , High Heel with 10cm heel-height , 3cm heel-width , zip (chain) and heel cap</span>
				<div class="line-separate-review1"></div>
				<h5 style="color: #777; font-weight: normal; opacity: 0.6; margin-top: 2px;">Optional</h5>
				<div class="line-separate-review2"></div>
				<h4 style="color: #777; margin-top: 5px;">Upload Photo Or Video</h4>
				<label id="upload-way" for="upload-image-video"><span style="color: #C9A9A6;">Add</span>
			    <span style="color: #C9A9A6;"><i class="fa fa-camera" aria-hidden="true"> / <i class="fa fa-video-camera" aria-hidden="true"></i></i></span></label>
				<form action="" method="post">
				    <input name="photovideo" id="upload-image-video" type="file" accept="images/*|video/*" style="display: none;" />
				    <div class="line-separate-review3"></div>
				    <h5 style="color: #777; font-weight: normal; opacity: 0.6; margin-top: 2px;">Mandatory</h5>
				    <div class="line-separate-review4" style="width: 9.5%;"></div>
				    <h4 style="color: #777; margin-top: 5px;">Your Review</h4>
				    <textarea type="text" rows="6" cols="100" style="margin-top: 10px; color: crimson" id="user-detail1" name="review-text"></textarea>
					<div id="field-validation-1" style="font-size: 11px; color: #ff0000; font-weight: bold; display: none;"><i class="fa fa-info-circle"></i> Required !</div>
				    <div class="line-separate-review3"></div>
				    <h5 style="color: #777; font-weight: normal; opacity: 0.6; margin-top: 2px;">Mandatory</h5>
				    <div class="line-separate-review4" style="width: 9.5%;"></div>
				    <h4 style="color: #777; margin-top: 5px;">Star Rating</h4>
				        <ul>
					        <li><i class="fas fa-star"></i> <input style="margin-left: 104px;" id="radio-for-star" type="radio" name="star-select" value="1" /> <i onclick="starinfoon1()" style="color: #A9A9A9; font-size: 13px; cursor: pointer;" class="fa fa-info-circle" title="Info"></i>
							<div id="star-info1">
							    <span><i id="star-info-close1" onclick="starinfooff1()" class="fa fa-times" title="Close"></i></span>
								<h5>You hate the product 😣</h5>
							</div>
							</li>
						    <li><i class="fas fa-star"></i><i class="fas fa-star"></i> <input style="margin-left: 86px; " id="radio-for-star" type="radio" name="star-select" value="2" /> <i onclick="starinfoon2()" style="color: #A9A9A9; font-size: 13px; cursor: pointer;" class="fa fa-info-circle" title="Info"></i>
							<div id="star-info2">
							    <span><i id="star-info-close2" onclick="starinfooff2()" class="fa fa-times" title="Close"></i></span>
								<h5>The product is bad 😒</h5>
							</div>							
							</li>
						    <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <input style="margin-left: 68px; " id="radio-for-star" type="radio" name="star-select" value="3" /> <i onclick="starinfoon3()" style="color: #A9A9A9; font-size: 13px; cursor: pointer;" class="fa fa-info-circle" title="Info"></i>
							<div id="star-info3">
							    <span><i id="star-info-close3" onclick="starinfooff3()" class="fa fa-times" title="Close"></i></span>
								<h5>The product is good 🙂</h5>
							</div>							
							</li>
							<li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <input style="margin-left: 50px; " id="radio-for-star" type="radio" name="star-select" value="4" /> <i onclick="starinfoon4()" style="color: #A9A9A9; font-size: 13px; cursor: pointer;" class="fa fa-info-circle" title="Info"></i>
							<div id="star-info4">
							    <span><i id="star-info-close4" onclick="starinfooff4()" class="fa fa-times" title="Close"></i></span>
								<h5>The product is awesome 😎</h5>
							</div>						
							</li>
						    <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <input style="margin-left: 32px; " id="radio-for-star" type="radio" name="star-select" value="5" /> <i onclick="starinfoon5()" style="color: #A9A9A9; font-size: 13px; cursor: pointer;" class="fa fa-info-circle" title="Info"></i>
							<div id="star-info5">
							    <span><i id="star-info-close5" onclick="starinfooff5()" class="fa fa-times" title="Close"></i></span>
								<h5>You love the product 😍</h5>
							</div>							
							</li>
						    <li><span style="color: #ff0000; font-weight: bold; cursor: pointer;" onclick="starradioclear('star-select');">Clear</span></li>	
							<div id="field-validation-4" style="font-size: 11px; color: #ff0000; font-weight: bold; display: none;"><i class="fa fa-info-circle"></i> Required !</div>
                        </ul>				
				    <div class="line-separate-review3"></div>
				    <h5 style="color: #777; font-weight: normal; opacity: 0.6; margin-top: 2px;">Mandatory</h5>
				    <div class="line-separate-review4" style="width: 9.5%;"></div>				
				    <h4 style="color: #777; margin-top: 5px;">Your Domicile Name</h4>
				    <input style="color: crimson" type="text" size="30" maxlength="20" id="user-detail2" title="" name="name" autocomplete="off" />
					<div id="field-validation-2" style="font-size: 11px; color: #ff0000; font-weight: bold; display: none;"><i class="fa fa-info-circle"></i> Required !</div>
				    <h4 style="color: #777; margin-top: 5px;">You Work As</h4>
				    <input style="color: crimson"  type="text"size="60" maxlength="50" id="user-detail3" title="" name="work" autocomplete="off" />
					<div id="field-validation-3" style="font-size: 11px; color: #ff0000; font-weight: bold; display: none;"><i class="fa fa-info-circle"></i> Required !</div>
				    <div class="line-separate-review3"></div>
				    <button onclick="starradioclear1('star-select');" id="post-button" type="submit" name="post-button">Post</button>
				</form>
		    </div>	
		</div>
<?php	

$imagevideo = $_POST("photovideo");
$comment = $_POST("review-text");
$star = $_POST("star-select");
$name = $_POST("name");
$work = $_POST("work");
$postbutton = $_POST("post-button");

if($post){
$write = fopen("review.txt", "a+");
fwrite($write, "<u><b> $imagevideo</b></u><u><b> $comment</b></u><u><b> $star</b></u><u><b> $name</b></u><u><b> $work</b></u>");
fclose($write);

$read = fopen("review.txt", "r+t");
echo "Cutomers Experience";

while(!feof($read)){
echo fread($read, 1024);
}

fclose($read);

}

else{

$read = fopen("review.txt", "r+t");
echo "Cutomers Experience:<br>";

while(!feof($read)){
echo fread($read, 1024);
}

fclose($read);

}
?>

		<div class="event" id="event">
		    <span id="event-close">&times;</span>
		    <div class="event-image-div">
			    <img src="images/event-image-1.jpg" />
				<button id="book-tickets">Book Tickets</button>
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
	    $('#post-button').click(function(){
	        var textspace1 = document.getElementById('user-detail1').value;
			var textspace2 = document.getElementById('user-detail2').value;
			var textspace3 = document.getElementById('user-detail3').value;								
			if(textspace1 === ''){
			    document.getElementById('field-validation-1').style.display = 'block';
				document.getElementById("user-detail1").style.backgroundColor = "#FFF8DC";
				document.getElementById("user-detail1").style.boxShadow = "0px 2px 10px 2px #A9A9A9";				
				return false;
			}else if(textspace2 === ''){
			    document.getElementById('field-validation-2').style.display = 'block';
				document.getElementById("user-detail2").style.backgroundColor = "#FFF8DC";
				document.getElementById("user-detail2").style.boxShadow = "0px 2px 10px 2px #A9A9A9";				
				return false;  
            }else if( textspace3 === ''){
			    document.getElementById('field-validation-3').style.display = 'block';
			    document.getElementById("user-detail3").style.backgroundColor = "#FFF8DC";
			    document.getElementById("user-detail3").style.boxShadow = "0px 2px 10px 2px #A9A9A9";				
				return false;  			
			}else{
			    document.getElementById('field-validation-1').style.display = 'none';
				document.getElementById('field-validation-2').style.display = 'none';
				document.getElementById('field-validation-3').style.display = 'none';
				document.getElementById('field-validation-4').style.display = "none";		
				return true;
		    }			
		});		
	    const starradioclear1 = (name) => {
	        const radiosclear1 = document.querySelectorAll(
	            "input[type='radio'][name='" + name + "']"
	        );
	        radiosclear1.forEach((radioclear1) => {
	            if(radioclear1.checked === false){
	               document.getElementById('field-validation-4').style.display = "block";
				   return false;
				}else{
				   document.getElementById('field-validation-4').style.display = "none"; 
				   return true;
				}
            });
        };	
        $('#post-button').mouseover(function(){
	        var textspace4 = document.getElementById('user-detail1').value;
			var textspace5 = document.getElementById('user-detail2').value;
			var textspace6 = document.getElementById('user-detail3').value;	
	        if(textspace4 === '' || textspace5 === '' || textspace6 === '' ){
                 document.getElementById('post-button').style.cursor = "not-allowed";
            }else{
                 document.getElementById('post-button').style.cursor = "pointer";
            }					
        });		
		
		const starradioclear = (name) => {
		    const radiosclear = document.querySelectorAll(
		        "input[type='radio'][name='" + name + "']"
		    );
		    radiosclear.forEach((radioclear) => {
		        if(radioclear.checked === true)
				    document.getElementById('field-validation-4').style.display = "block";
		    	    radioclear.checked = false;
            });
        };	

		function starinfoon5(){
		    document.getElementById("star-info5").style.display = "block";
		}
		function starinfooff5(){
		    document.getElementById("star-info5").style.display = "none";
		}	
		function starinfoon4(){
		    document.getElementById("star-info4").style.display = "block";
		}
		function starinfooff4(){
		    document.getElementById("star-info4").style.display = "none";
		}	
		function starinfoon3(){
		    document.getElementById("star-info3").style.display = "block";
		}
		function starinfooff3(){
		    document.getElementById("star-info3").style.display = "none";
		}	
		function starinfoon2(){
		    document.getElementById("star-info2").style.display = "block";
		}
		function starinfooff2(){
		    document.getElementById("star-info2").style.display = "none";
		}	
		function starinfoon1(){
		    document.getElementById("star-info1").style.display = "block";
		}
		function starinfooff1(){
		    document.getElementById("star-info1").style.display = "none";
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
	</script>	
</body>	
</html>