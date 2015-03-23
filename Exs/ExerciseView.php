
<!doctype html>

<head>
<link href="e_css/style.css" rel='stylesheet' type='text/css' />
<!-- .............. -->
<script type="text/javascript" src="js/calorie.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../assets/css/style.css" rel="stylesheet" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/table.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
	
		<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--DatePicker Css-->
 <link rel="stylesheet" href="../CSS/jquery-ui.css">
	<!--DatePicker Css-->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

	<!--DatePicker js-->
<script src="../js/jquery-ui.js"></script>
<!--  -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/exer_alarm.js"></script>
<script type="text/javascript" src="js/exer_alarm.js"></script>
<script src="../js/med_alarm.js"></script>

<!-- //grid-slider -->
</head>
<body>
 <!-- start header_top -->
 <div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-3 col-md-3 col-xs-12 hidden-xs">
        <div class="logo"> <a href="#"><img src="../images/logo.png" class="img-responsive" alt=""/></a> </div>
      </div>
      <div class="col-lg-8 col-sm-9 col-md-9 col-xs-12 no-padding">
        <nav class="navbar navbar-default bg" role="navigation"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Medicine Assistant</a></li>
              <li class="active"><a href="#">Exercise Assistant</a></li>
              <li class="active"><a href="#">Food Assistant</a></li>
              <li class="active"><a href="#">Social Activities</a></li>
              <li class="active"><a href="#">Account</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
          
        </nav>
      </div>
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 hidden-lg hidden-sm hidden-md">
        <div class="logo"> <a href="#"><img src="../images/logo.png" class="img-responsive"  alt=""/></a> </div>
      </div>
    </div>
 </div>
</div>
 
          <!-- /.navbar-collapse --> 
	<div class="header1">
	   <div class="container">
		  <div class="header-text">
			<h1>Don't Get worried </h1>
			<h2>Fitness Solutions Are there For u</h2>
			<br>
			<br>

			<div class="banner_btn"  >
				<a  data-toggle="modal" data-target="#myModal" href="#">Reminder</a>
				<a  data-toggle="modal" data-target="#myModal1 " href="#">Fats</a>
				<a data-toggle="modal" data-target="#myModal2" href="#">Workouts</a>
				
			</div>
		  </div>
		  <!-- Model -->
	 <div class="col-lg-12 contact-form">
      <div class="clearfix"></div>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3> Exercise Reminder</h3>
              </h4>
            </div>
            <div class="modal-body">
              <form role="form"  data-toggle="validator" method="post" name="form1" id="form1">
                <div class="form-group">
                 <label>Reminder</label>
                  <input  type="time" data-minlength="6"  placeholder="Reminder" required name='daliy_reminder2' id='daliy_reminder2'></input>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" onclick="return validate_form3();"   class="btn pull-right">Save</button> <!-- button pull right will pull the button right -->
            </div>
          </div>
        </div>
      </div>
    </div>
		  <!--Model1  -->
		  
		   <!-- Model -->
	 <div class="col-lg-12 contact-form">
      <div class="clearfix"></div>
      <!-- Modal -->
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <form id="cal_frm"  name="frm" onsubmit="return false">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3>Calculate Your Body FATS Here</h3>
              </h4>
            </div>
            
            
            <!-- Form Table-->
            <form id="cal_frm" style="width:100%; margin:10px 10px 10px 10px;" name="frm" onsubmit="return false">

<table style="width:400px; margin:0px 10px 20px 10px;">
<tr><td style="width: 275px;">
<table id="cal_data">
<tr>
<td style="padding-left:5px;">Height:</td>
<td><input class="cal_text" type="text" name="txtHeight" size="20" ></td>
<td><select class="cal_option" name="opHeight">
<option value="0">Cm</option>
<option value="1">In</option>
</select></td>
</tr>
<tr>
<td style="padding-left:5px;">Neck:</td>
<td><input class="cal_text" type="text" name="txtNeck" size="20" ></td>
<td><select class="cal_option" name="opNeck">
<option value="0">Cm</option>
<option value="1">In</option>
</select></td>
</tr>
<tr>
<td style="padding-left:5px;">Waist:</td>
<td><input class="cal_text" type="text" name="txtWaist" size="20" ></td>
<td><select class="cal_option" name="opWaist">
<option value="0">Cm</option>
<option value="1">In</option>
</select></td>
</tr>
<tr>
<td style="padding-left:5px;">Hip (Female):</td>
<td><input class="cal_text" type="text" name="txtHip" size="20" ></td>
<td><select class="cal_option" name="opHip">
<option value="0">Cm</option>
<option value="1">In</option>
</select></td>
</tr>
<tr>
<td style="padding-left:5px;">Weight:</td>
<td><input class="cal_text" type="text" name="txtWeight" size="20" ></td>
<td><select class="cal_option" name="opWeight">
<option value="0">Kg</option>
<option value="1">Pnd</option>
</select></td>
</tr>
</table>
</td>

</tr>
<tr>
<td colspan="2" style="padding:10px 0 10px 0;"><span style="padding:0 2px;">Activity:</span>
<select id="Select7" class="cal_option" style="width:50%; border:1px solid silver;" name="opActivity">
<option selected="selected" value="0">Sedentary (Very little )</option>
<option value="1">Lightly active (sports 1-3 days/week)</option>
<option value="2">Moderately active (sports 3-5 days/week)</option>
<option value="3">Very active (hard exercise)</option>
<option value="4">Extra active (very hard exercis)</option>
</select>
</td>
</tr>
<tr>
<td style="padding: 10px 0 0 10px;">
Gender:<br >
<select class="cal_option" style="width:72%;border: solid 1px silver;" name="opGender">
<option value="0">Male</option>
<option value="1">Female</option>
</select><br ><br >
Age:<br >
<input class="cal_text" style="width:60%;border: solid 1px silver;" type="text" name="txtAge" size="20" > yrs.
</td>
</tr>
<tr>
<td id="feedback" colspan="2" style="padding:0 0 5px 0; font-family:arial; font-size:11px; color:#333333;" ><a style="font-size:1px;color:#ffffff;line-height:1%;" href="http://ramui.com">http://ramui.com</a></td>
</tr>
<tr>
<td colspan="2">
<input onclick="Calculate()" class="cal_button" type="button" value="Calculate" >&nbsp;<input type="reset" class="cal_button" value="Reset" onclick="resetAll()" >&nbsp;<input name="btnDownload" type="button" class="cal_button" disabled value="Download" onclick="download()" ></td>
</tr></table>
</form>
          </div>
        </div>
      </div>
    </div>
		  <!--Model1  -->
		  
		  
		  
		  
		  <div class="header-arrow">
		     <a href="#menu" class="class scroll"><span> </span </a>
		  </div>
	    </div>
	  </div>
	
	<!-- end header_bottom -->
	<!-- start menu -->
    <div class="menu" id="menu">
	  <div class="container">
		 
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	 <!-- MODEL2 -->
		  <div class="col-lg-12 contact-form">
      <div class="clearfix"></div>
      <!-- Modal -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">
                <h3>Workouts</h3>
              </h4>
            </div>
            <div class="modal-body">
              <form role="form"  data-toggle="validator" method="post" name="form1" id="form1">
              
				<div class="player"   id ="player">
			<div class="list">
				<ul>
					<li>Jumping jacks <small>Total body</small></li>
					<li>Wall sit <small>Lower body</small></li>
					<li>Push-up <small>Upper body</small></li>
					<li>Abdominal crunch <small>Core</small></li>
					<li>Step-up onto chair <small>Total body</small></li>
					<li>Squat <small>Lower body</small></li>
					<li>Triceps dip on chair <small>Upper body</small></li>
					<li>Plank <small>Core</small></li>
					<li>High knees/running in place <small>Total body</small></li>
					<li>Lunge <small>Lower body</small></li>
					<li>Push-up and rotation <small>Upper body</small></li>
					<li>Side plank <small>Core</small></li>
					<li><em>Pause</em></li>
				</ul>
			</div>
			<div class="timer">
				<span id="timeDisplay"></span>
			</div>
			<div class="modal-footer">
			<div class="control">
				<a href="#" class="btn" id="play">Play</a>&nbsp<a href="#" class="btn" id="reset">Reset</a>
			</div>
			</div>
		</div>
		<audio src="audio/go.wav" id="audioGo"></audio>
		<audio src="audio/pause.wav" id="audioPause"></audio>
		<audio src="audio/win.wav" id="audioWin"></audio>
		<script src="js/main.js"></script>
			
              </form>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
		  
		  <!-- MODEL2 -->
		  
	<!-- end menu -->
	 <div class="main">
	 	 <div class="container">
			<!-- start content-top -->
			<div class="row content-top">
				 <div class="col-md-5">
				  <img src="e_images/pic.png" class="img-responsive" alt=""/> 
			     </div>
				 <div class="col-md-7 content_left_text">
				   <h3>Do you Wana  Watch how to get Smart !!!!! click!</h3>
				   <a href="vidios.html">VIDIO Tutorials</a>
				   <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				 </div>
            </div>
		 </div>
		<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
	 	    	<div class="col-md-4"  ><a href="YOGA.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">YOGA</li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic3.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="ABS.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">Ab & Mucsles</span></li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic2.jpg" class="img-responsive"  alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="GYM.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">GYM </li>
	 	    			
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="e_images/pic1.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				<div class="clear"></div>
		   </div>
		  
	     </div>
	     <Script>
	     function validate_form3()
	     {
	     	error_message = 'Please enter correct values for below mentioned fields.\n';
	     	var daliy_reminder2= document.getElementById('daliy_reminder2').value;
	     		
	     	
	     	
	     	if( daliy_reminder2== '')
	     		{
	     			error_message += 'reminder\n';
	     		}
	     	
	     	
	     	
	     	if(error_message=='Please enter correct values for below mentioned fields.\n')
	     	{
	     		alert('data saved');
	    		
	    		$.ajax({
	    			url: 'https://sitarahussain.com/lifeSupporter_v3/function_exs.php',
	    			type: 'POST',
	    			dataType: 'json',
	    			data: {daliy_reminder2:daliy_reminder2},
	    		})
	    		.done(function(data) {
	    				alert(data.responce_message);
	    				window.location.reload();
	    		})
	    		.fail(function() {
	    			console.log("error");
	    		})
	    		.always(function() {
	    			console.log("complete");
	    		});
	    		return true;
	     		
	     		
	 

	     	}
	     	
	     	
	     	else
	     		{
	     		alert(error_message);
	     		return false;
	     		}
	     }

	    
	   
	     </Script>
	    
</body>

	 
	     
	<div id="showHtml">

	</div>
</html>
