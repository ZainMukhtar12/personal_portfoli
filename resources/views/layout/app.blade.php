<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rishabh Mishra Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">



<style>

/*======================================
//--//-->   ABOUT
======================================*/

.about-mf .box-shadow-full {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.about-mf .about-img {
  margin-bottom: 2rem;
}

.about-mf .about-img img {
  margin-left: 10px;
}


.skill-mf .progress {
  /* background-color: #cde1f8; */
  margin: .5rem 0 1.2rem 0;
  border-radius: 0;
  height: .7rem;
}

.skill-mf .progress .progress-bar {
  height: .7rem;
  background-color: #ffbd39;
}


/* Animation styles */
#typing-animation {
  position: relative;
  font-size: 30px;
  font-weight: bold;
  color: rgb(255, 255, 255);
  overflow: hidden;
  white-space: nowrap;
  animation: typing 3s steps(20, end) infinite;
}

#typing-animation:before {
  content: "";
  /* position: absolute; */
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-color: #ccc;
  animation: typing-cursor 0.5s ease-in-out infinite;
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

@keyframes typing-cursor {
  from {
    width: 5px;
  }
  to {
    width: 0;
  }
}


/* project image zoom effect */

.zoom-effect {
  overflow: hidden;
  transition: transform 0.3s ease-out;
}

.zoom-effect:hover {
  transform: scale(1.1);
}


</style>


  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Rishabh Mishra</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="{{ route('resume') }}" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="{{ route('project') }}" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

       <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

      <footer class="ftco-footer ftco-section">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 text-center">

			  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		  </div>
		</div>
	  </footer>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
