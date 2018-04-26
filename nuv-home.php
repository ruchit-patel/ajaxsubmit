<html>
<head>
    <title>Navrachana University-Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="unite.css" rel="stylesheet">
  <script src="drp.js"></script>


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

                       @media (min-width: 767px) {
    .navbar-nav .dropdown-menu .caret {
	transform: rotate(-90deg);
    }
}
</style>

 <script>
                    $(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }

        $('.nav li.open').not($(this).parents("li")).removeClass("open");

        return false;
    });
});
</script>

<body>
    <?php session_start(); ?>
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
<div class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Navrachana University</a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li></li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schools <b class="caret"></b></a>
            
                                        <ul class="dropdown-menu">
                                            
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp('School Of Business and Law')" data-toggle="dropdown">School Of Busness And Law <b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp1('School Of Engineering and Technology')" data-toggle="dropdown">School Of Engineering and Technology<b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg1"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp2('School Of Environmental Design and Architecture')" data-toggle="dropdown">School Of Environmental Design and Architecture<b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg2"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" onclick="fetchp3('School Of Libral Studies and Education')" data-toggle="dropdown">School Of Libral Studies and Education<b class="caret"></b></a>
            
                                                <ul class="dropdown-menu" id="prg3"> 
                                                    <li><a href="#">Loading..</a></li> 
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li></li>
                                        <li class="active navbar-right" ><a href="#" id="usr" > Welcome: <?php  echo $_SESSION['login_user'] ?></a></li>
                                    </ul>

                                <form class="navbar-form navbar-right" action="#">
                                    <div class="input-group" style="z-index: 0;">
                                      <input type="text" class="form-control" placeholder="Search" name="search">
                                      <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                          <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                      </div>
                                    </div>
                                  </form>
                                  <ul class="nav navbar-nav">
                                  <li class="active"><a href="#" onclick="logout()" id="log">Logout</a></li> 
                                  </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
<script>
    function logout()
    {
        var http = new XMLHttpRequest();
    var url = "logout.php";
    http.open("GET", url, true);
   
    http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        document.getElementById("usr").innerHTML="Welcome: Guest";
        document.getElementById("log").innerHTML="";
        alert(http.responseText);  
    }
  }
	http.send(); 
    }
function loadCard(str)
{
    var http = new XMLHttpRequest();
    var url = "rtcont.php";
    var data = new FormData();
    data.append('prg',str);
    http.open("POST", url, true);
    http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        document.getElementById("ttl").innerHTML=str;
		document.getElementById("bd").innerHTML=http.responseText;   
    }
  }
	http.send(data);
}
</script>
<div class="container-fluid">
<div class="row">
<style>
    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.cont {
    padding: 2px 16px;
}
    </style>
<div class="col-md-10">
    <br><br>
<div class="card">
  <div class="container">
  <iframe src="http://www.nuv.ac.in/gallery3/index.html" width="2000px" height="270px" frameborder="0" scrolling="no" style="z-index:-111;" ></iframe>
    <h4 id="ttl"><b>Navrachana University</b></h4> 
    <p id="bd">Navrachana University was established through the Gujarat Private Universities Act, 2009 with the intent to offer superior education that befits the high educational standards of the Navrachana Educational Society in Vadodara. The University has embarked on a new educational paradigm that lays simultaneous emphasis on disciplinary education, inter-disciplinary education, professional education and general education. This paradigm is facilitated by the University's unitary character and offers comprehensive learning and helps develop T-Shape students who have a breadth of knowledge though general and inter-disciplinary education and a depth of knowledge though focused disciplinary education.
</p> 
  </div>
</div>
</div>

  <div class="col-md-2" >
  
        <div class="row container-fluid">
        <h2>Photo Gallery</h2>
        </div>
          <div class="row" >
              <div class="col-sm-12" >
                <style>
                

                            #myImg {
                                border-radius: 5px;
                                cursor: pointer;
                                transition: 0.3s;
                            }

                            #myImg:hover {opacity: 0.7;}

                            /* The Modal (background) */
                            .modal {
                                display: none; /* Hidden by default */
                                position: fixed; /* Stay in place */
                                z-index: 1; /* Sit on top */
                                padding-top: 100px; /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%; /* Full width */
                                height: 100%; /* Full height */
                                overflow: auto; /* Enable scroll if needed */
                                background-color: rgb(0,0,0); /* Fallback color */
                                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
                            }

                            /* Modal Content (image) */
                            .modal-content {
                                margin: auto;
                                display: block;
                                width: 80%;
                                max-width: 700px;
                            }

                            /* Caption of Modal Image */
                            #caption {
                                margin: auto;
                                display: block;
                                width: 80%;
                                max-width: 700px;
                                text-align: center;
                                color: #ccc;
                                padding: 10px 0;
                                height: 150px;
                            }

                            /* Add Animation */
                            .modal-content, #caption {    
                                -webkit-animation-name: zoom;
                                -webkit-animation-duration: 0.6s;
                                animation-name: zoom;
                                animation-duration: 0.6s;
                            }

                            @-webkit-keyframes zoom {
                                from {-webkit-transform:scale(0)} 
                                to {-webkit-transform:scale(1)}
                            }

                            @keyframes zoom {
                                from {transform:scale(0)} 
                                to {transform:scale(1)}
                            }

                            /* The Close Button */
                            .closee {
                                position: absolute;
                                top: 15px;
                                right: 35px;
                                color: #f1f1f1;
                                font-size: 40px;
                                font-weight: bold;
                                transition: 0.3s;
                            }

                            .closee:hover,
                            .closee:focus {
                                color: #bbb;
                                text-decoration: none;
                                cursor: pointer;
                            }

                            /* 100% Image Width on Smaller Screens */
                            @media only screen and (max-width: 700px){
                                .modal-content {
                                    width: 100%;
                                }
                            }

                </style>
                  <img id="myImg"  class="img-fluid img-thumbnail" src="Images/img1.jpg" alt="Seminars @ BCA">
              </div>
              <div id="myModal" class="modal">
                <span class="closee">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>

              <script>
                // Get the modal
                var modal = document.getElementById('myModal');
                
                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById('myImg');
                var modalImg = document.getElementById("img01");
              
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
                
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("closee")[0];
                
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() { 
                    modal.style.display = "none";
                }
                </script>
        


          </div><br>
          <div class="row">
              <div class="col-sm-12">
                <style>
                

                      #myImg2 {
                          border-radius: 5px;
                          cursor: pointer;
                          transition: 0.3s;
                      }

                      #myImg2:hover {opacity: 0.7;}

                      /* The Modal (background) */
                      .modal2 {
                          display: none; /* Hidden by default */
                          position: fixed; /* Stay in place */
                          z-index: 1; /* Sit on top */
                          padding-top: 100px; /* Location of the box */
                          left: 0;
                          top: 0;
                          width: 100%; /* Full width */
                          height: 100%; /* Full height */
                          overflow: auto; /* Enable scroll if needed */
                          background-color: rgb(0,0,0); /* Fallback color */
                          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
                      }

                      /* Modal Content (image) */
                      .modal2-content {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                      }

                      /* Caption of Modal Image */
                      #caption2 {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                          text-align: center;
                          color: #ccc;
                          padding: 10px 0;
                          height: 150px;
                      }

                      /* Add Animation */
                      .modal2-content, #caption2 {    
                          -webkit-animation-name: zoom;
                          -webkit-animation-duration: 0.6s;
                          animation-name: zoom;
                          animation-duration: 0.6s;
                      }

                      @-webkit-keyframes zoom {
                          from {-webkit-transform:scale(0)} 
                          to {-webkit-transform:scale(1)}
                      }

                      @keyframes zoom {
                          from {transform:scale(0)} 
                          to {transform:scale(1)}
                      }

                      /* The Close Button */
                      .closee2 {
                          position: absolute;
                          top: 15px;
                          right: 35px;
                          color: #f1f1f1;
                          font-size: 40px;
                          font-weight: bold;
                          transition: 0.3s;
                      }

                      .closee2:hover,
                      .closee2:focus {
                          color: #bbb;
                          text-decoration: none;
                          cursor: pointer;
                      }

                      /* 100% Image Width on Smaller Screens */
                      @media only screen and (max-width: 700px){
                          .modal2-content {
                              width: 100%;
                          }
                      }

                </style>
                  <img id="myImg2" class="img-fluid img-thumbnail" src="Images/img2.jpg" alt="Winners @ BCA">
              </div>
              <div id="myModal2" class="modal2">
                <span class="closee2">&times;</span>
                <img class="modal2-content" id="img02">
                <div id="caption2"></div>
              </div>

              <script>
                var modal = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
                  var img = document.getElementById('myImg2');
                  var modalImg = document.getElementById("img02");
                  var captionText = document.getElementById("caption2");
                  img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                  }

                  // Get the <span> element that closes the modal
                  var span = document.getElementsByClassName("closee2")[0];

                  // When the user clicks on <span> (x), close the modal
                  span.onclick = function() { 
                      modal.style.display = "none";
                  }
              </script>


          </div><br>
          <div class="row">
              <div class="col-sm-12">

                  <style>
                

                      #myImg3 {
                          border-radius: 5px;
                          cursor: pointer;
                          transition: 0.3s;
                      }

                      #myImg3:hover {opacity: 0.7;}

                      /* The Modal (background) */
                      .modal3 {
                          display: none; /* Hidden by default */
                          position: fixed; /* Stay in place */
                          z-index: 1; /* Sit on top */
                          padding-top: 100px; /* Location of the box */
                          left: 0;
                          top: 0;
                          width: 100%; /* Full width */
                          height: 100%; /* Full height */
                          overflow: auto; /* Enable scroll if needed */
                          background-color: rgb(0,0,0); /* Fallback color */
                          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
                      }

                      /* Modal Content (image) */
                      .modal3-content {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                      }

                      /* Caption of Modal Image */
                      #caption3 {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                          text-align: center;
                          color: #ccc;
                          padding: 10px 0;
                          height: 150px;
                      }

                      /* Add Animation */
                      .modal3-content, #caption3 {    
                          -webkit-animation-name: zoom;
                          -webkit-animation-duration: 0.6s;
                          animation-name: zoom;
                          animation-duration: 0.6s;
                      }

                      @-webkit-keyframes zoom {
                          from {-webkit-transform:scale(0)} 
                          to {-webkit-transform:scale(1)}
                      }

                      @keyframes zoom {
                          from {transform:scale(0)} 
                          to {transform:scale(1)}
                      }

                      /* The Close Button */
                      .closee3 {
                          position: absolute;
                          top: 15px;
                          right: 35px;
                          color: #f1f1f1;
                          font-size: 40px;
                          font-weight: bold;
                          transition: 0.3s;
                      }

                      .closee3:hover,
                      .closee3:focus {
                          color: #bbb;
                          text-decoration: none;
                          cursor: pointer;
                      }

                      /* 100% Image Width on Smaller Screens */
                      @media only screen and (max-width: 700px){
                          .modal3-content {
                              width: 100%;
                          }
                      }

                </style>

                  <img id="myImg3" class="img-fluid img-thumbnail" src="Images/img3.jpg" alt="TechNUVate 2018">
              </div> 
              
              <div id="myModal3" class="modal3">
                  <span class="closee3">&times;</span>
                  <img class="modal3-content" id="img03">
                  <div id="caption3"></div>
                </div>
  
                <script>
                  var modal = document.getElementById('myModal3');
  
  // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById('myImg3');
                    var modalImg = document.getElementById("img03");
                    var captionText = document.getElementById("caption3");
                    img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }
  
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("closee3")[0];
  
                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() { 
                        modal.style.display = "none";
                    }
                </script>
  
              
          </div><br>
          <div class="row">
              <div class="col-sm-12">

                  <style>
                

                      #myImg4 {
                          border-radius: 5px;
                          cursor: pointer;
                          transition: 0.3s;
                      }

                      #myImg4:hover {opacity: 0.7;}

                      /* The Modal (background) */
                      .modal4 {
                          display: none; /* Hidden by default */
                          position: fixed; /* Stay in place */
                          z-index: 1; /* Sit on top */
                          padding-top: 100px; /* Location of the box */
                          left: 0;
                          top: 0;
                          width: 100%; /* Full width */
                          height: 100%; /* Full height */
                          overflow: auto; /* Enable scroll if needed */
                          background-color: rgb(0,0,0); /* Fallback color */
                          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
                      }

                      /* Modal Content (image) */
                      .modal4-content {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                      }

                      /* Caption of Modal Image */
                      #caption4 {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                          text-align: center;
                          color: #ccc;
                          padding: 10px 0;
                          height: 150px;
                      }

                      /* Add Animation */
                      .modal4-content, #caption4 {    
                          -webkit-animation-name: zoom;
                          -webkit-animation-duration: 0.6s;
                          animation-name: zoom;
                          animation-duration: 0.6s;
                      }

                      @-webkit-keyframes zoom {
                          from {-webkit-transform:scale(0)} 
                          to {-webkit-transform:scale(1)}
                      }

                      @keyframes zoom {
                          from {transform:scale(0)} 
                          to {transform:scale(1)}
                      }

                      /* The Close Button */
                      .closee4 {
                          position: absolute;
                          top: 15px;
                          right: 35px;
                          color: #f1f1f1;
                          font-size: 40px;
                          font-weight: bold;
                          transition: 0.3s;
                      }

                      .closee4:hover,
                      .closee4:focus {
                          color: #bbb;
                          text-decoration: none;
                          cursor: pointer;
                      }

                      /* 100% Image Width on Smaller Screens */
                      @media only screen and (max-width: 700px){
                          .modal4-content {
                              width: 100%;
                          }
                      }

                </style>

                  <img id="myImg4" class="img-fluid img-thumbnail" src="Images/img4.jpg" alt="Organizers @ BCA">
              </div>   

              <div id="myModal4" class="modal4">
                  <span class="closee4">&times;</span>
                  <img class="modal4-content" id="img04">
                  <div id="caption4"></div>
                </div>
  
                <script>
                  var modal = document.getElementById('myModal4');
  
  // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById('myImg4');
                    var modalImg = document.getElementById("img04");
                    var captionText = document.getElementById("caption4");
                    img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }
  
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("closee4")[0];
  
                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() { 
                        modal.style.display = "none";
                    }
                </script>

          </div><br>
          <div class="row">
              <div class="col-sm-12">

                  <style>
                

                      #myImg5 {
                          border-radius: 5px;
                          cursor: pointer;
                          transition: 0.3s;
                      }

                      #myImg5:hover {opacity: 0.7;}

                      /* The Modal (background) */
                      .modal5 {
                          display: none; /* Hidden by default */
                          position: fixed; /* Stay in place */
                          z-index: 1; /* Sit on top */
                          padding-top: 100px; /* Location of the box */
                          left: 0;
                          top: 0;
                          width: 100%; /* Full width */
                          height: 100%; /* Full height */
                          overflow: auto; /* Enable scroll if needed */
                          background-color: rgb(0,0,0); /* Fallback color */
                          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
                      }

                      /* Modal Content (image) */
                      .modal5-content {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                      }

                      /* Caption of Modal Image */
                      #caption5 {
                          margin: auto;
                          display: block;
                          width: 80%;
                          max-width: 700px;
                          text-align: center;
                          color: #ccc;
                          padding: 10px 0;
                          height: 150px;
                      }

                      /* Add Animation */
                      .modal5-content, #caption5 {    
                          -webkit-animation-name: zoom;
                          -webkit-animation-duration: 0.6s;
                          animation-name: zoom;
                          animation-duration: 0.6s;
                      }

                      @-webkit-keyframes zoom {
                          from {-webkit-transform:scale(0)} 
                          to {-webkit-transform:scale(1)}
                      }

                      @keyframes zoom {
                          from {transform:scale(0)} 
                          to {transform:scale(1)}
                      }

                      /* The Close Button */
                      .closee5 {
                          position: absolute;
                          top: 15px;
                          right: 35px;
                          color: #f1f1f1;
                          font-size: 40px;
                          font-weight: bold;
                          transition: 0.3s;
                      }

                      .closee5:hover,
                      .closee5:focus {
                          color: #bbb;
                          text-decoration: none;
                          cursor: pointer;
                      }

                      /* 100% Image Width on Smaller Screens */
                      @media only screen and (max-width: 700px){
                          .modal5-content {
                              width: 100%;
                          }
                      }

                </style>

                  <img id="myImg5" class="img-fluid img-thumbnail" src="Images/img5.jpg" alt="Unity @ BCA">
              </div>   

              <div id="myModal5" class="modal5">
                  <span class="closee5">&times;</span>
                  <img class="modal5-content" id="img05">
                  <div id="caption5"></div>
                </div>
  
                <script>
                  var modal = document.getElementById('myModal5');
  
  // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById('myImg5');
                    var modalImg = document.getElementById("img05");
                    var captionText = document.getElementById("caption5");
                    img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }
  
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("closee5")[0];
  
                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() { 
                        modal.style.display = "none";
                    }
                </script>

          </div>
       
  </div>
</div>
</div><br>
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style="border: 3px solid; border-radius: 2px;">
<center><h1>Contact Us: <a href="http://nuv.ac.in">Nuv@ac.in</a> </h1></center>
</div>
</div>
</div>



</body>
</html>