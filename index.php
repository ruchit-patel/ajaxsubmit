<!DOCTYPE html>
<html lang="en" >

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="unite.css" rel="stylesheet">
  <script src="formsproduct.js"></script>
    </head>

    <body style="background: url('bg.png') no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover; background-size: cover;">

		<!-- Top menu -->
		<style>

				body
				{
					overflow-x: hidden;
				}
					.div-border-right
					{
						border-right-style: 3px;
						border-color: black;
						border-style: solid;
						border-left-color: transparent;
						border-top-color: transparent;
						border-bottom-color: transparent;
					}
					.login-font-size
					{
						font-size: 50px;
						text-align: center;
					}
					.img-res
					{
						height: 150px;
						padding-left: 12px;
					}
					@media only screen and (max-width: 768px) {
					/* For mobile phones: */
					[class*="div-border-right"] {
						border-bottom-style: 3px;
						border-color: black;
						border-style: solid;
						border-left-color: transparent;
						border-top-color: transparent;
						border-right-color: transparent;
					}
					[class*="img-res"] {
					   height: 200px;
					
					}
					[class*="login-font-size"] {
					   text-align: center;
					
					}
				}
				.panel-heading{
				  background-color: #5e2750 !important;
				  color: #fff !important;
				}
				
				
				</style>
<div >
<div style="background-color: 	#dd4814; color:black; font-family: 'Merriweather', serif;">
		<div class="container-fluid">
			<div class="row">
		 <div class="col-md-2"><br><br><center>
		<input type="image" src="https://www.nuv.ac.in/images/logo.png" class="img-res">     
		</center></div>
				<div class="col-md-8 div-border-right">
					<BR><BR> <br>
					<div class="login-font-size">Navrachana University</div><BR><BR></div>
			 <div class="col-md-2"><h2>Follow Us:</h2>
				<div class="row">
					<div class="col-md-6"><h1><a href="#"><i class="fa fa-facebook"></i></a> </h1></div>
					<div class="col-md-6"><h1><a href="#"><i class="fa fa-twitter"></i></a> </h1></div>
				</div>
				<div class="row">
						<div class="col-md-6"><h1>	<a href="#"><i class="fa fa-envelope"></i></a></h1> </div>
						<div class="col-md-6"><h1><a href="#"><i class="fa fa-skype"></i></a></h1></div>
					</div>																						
			</div>
			</div>
			</div>
		</div>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box" >
                        	
                        	<form role="form" name="myForm"  onsubmit="loadDoc()"  method="POST" class="registration-form">
                        		
                        		<fieldset >
		                        	<div class="form-top" style="background-color: rgba(255, 102, 0, 0.87);">
		                        		<div class="form-top-left">
		                        			<h3>Step 1 / 3</h3>
		                            		<p>Tell us who you are:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-bday">Birth Day</label>
				                        	<input type="date" name="dt" placeholder="dd/mm/yy" class="form-last-name form-control" id="form-bday">
										</div>
										<div class="form-group">
												<label class="sr-only" for="form-address">Address</label>
												<input type="text" name="form-address" placeholder="Address..." class="form-first-name form-control" id="form-address">
											</div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
				                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>
				                        <button type="button" class="btn btn-next">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top" style="background-color: rgba(255, 102, 0, 0.87);">
		                        		<div class="form-top-left">
		                        			<h3>Step 2 / 3</h3>
		                            		<p>Set up your account:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-key"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                    		<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-repeat-password">Repeat password</label>
				                        	<input type="password" name="form-repeat-password" placeholder="Repeat password..." 
				                        				class="form-repeat-password form-control" id="form-repeat-password">
				                        </div>
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="button" class="btn btn-next">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top" style="background-color: rgba(255, 102, 0, 0.87);">
		                        		<div class="form-top-left">
		                        			<h3>Step 3 / 3</h3>
		                            		<p>Select Your Stream</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-graduation-cap"></i>
		                        		</div>
									</div>
									
		                            <div class="form-bottom">
				                    	<div class="form-group">
											<label  for="form-school">Select School</label>
											<select class="form-control" id="form-school" onchange="fetchptype(this.value)" name="school">
												<option>--Select School--</option>
												<option>School Of Business and Law</option>
												<option>School Of Engineering and Technology</option>
												<option>School Of Environmental Design and Architecture</option>
												<option>School Of Libral Studies and Education</option>
											  </select>
				                        </div>
				                        <div class="form-group">
											<label  for="form-school">Select Program</label>
											<select class="form-control" id="prg" name="prg">
												<option>--Select Program--</option>	
											  </select>
										</div>
				                        
				                        <button type="button" class="btn btn-previous" id="prev">Previous</button>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </div>
			                    </fieldset>
		                    
		                    </form><br><br>
							<div style="background-color:rgb(255, 255, 255,0.7)" id="stat"></div>
		                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
	

	<script>
   function loadDoc() {
	
	event.preventDefault();
	var fname=$('#form-first-name').val();
	var lname=$('#form-last-name').val();
	var bday=$('#form-bday').val();
	var adr=$('#form-address').val();
	var ayr=$('#form-about-yourself').val();
	var email=$('#form-email').val();
	var pass=$('#form-password').val();
	var repass=$('#form-repeat-password').val();
	var school=$('#form-school').val();
	var prg=$('#prg').val();
		
	var x = document.forms["myForm"]["form-email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		document.getElementById("stat").innerHTML="<center>Not a valid e-mail address</center>";   
	    document.getElementById('prev').click(); 
        
	 }
	else if(pass.length<8)
		{  
 			document.getElementById("stat").innerHTML="<center>Password must be at least 8 characters long.</center>";   
			 document.getElementById('prev').click(); 
 		 }  
	else if(pass!=repass)
        {
			document.getElementById("stat").innerHTML="<center>Passwords do not match</center>";   
			 document.getElementById('prev').click(); 
       
		}
		else if(school=='--Select School--')
        {
            alert("School is missing");
		}
		else if(prg=='--Select Program Type--')
        {
            alert("Program is missing");
		}
		else{
           var http = new XMLHttpRequest();
	     var url = "ins.php";
		 var data = new FormData();
	data.append('form-first-name',fname);
	data.append('form-last-name', lname);
	data.append('dt', bday);
	data.append('form-address', adr);
	data.append('form-about-yourself',ayr);
	data.append('form-email', email);
	data.append('form-password',pass);
	data.append('school', school);
	data.append('prg', prg);
	//alert(data.toString());
	
	http.open("POST", url, true);

//Send the proper header information along with the request
	//http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
		document.getElementById("stat").innerHTML="<center> <h1><img src='succes.gif'  style='height:50px; width:50px;' />"+http.responseText+"<h1></center>";   
		//alert(http.responseText);
		setTimeout(function(){
		if(http.responseText=="All Good!! Registered!!")
		{
			window.location.replace("Login");
		}
		}, 2000); 
		
    }
  }
	http.send(data);
	}
}
   </script>
    
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

	
		<!-- Javascript -->
		




        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->


    </body>

</html>

