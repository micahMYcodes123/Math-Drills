@extends('layout.layout')
	<body>

		


		<div id="site-content">
			<header class="site-header">
				
				<div class="primary-header">
					<div class="container">
						<a href="index.html" id="branding">
							<img src="web/dummy/mug.png" alt="Lincoln high School">
							<h1 class="site-title">{{config('app.name')}}</h1>
						</a> <!-- #branding -->
						
						<div class="main-navigation">

							<button type="button" id= "playSound" class="menu-toggle"><i class="fa fa-bars"></i></button>


							<ul class="menu">
							<audio id="playSoundHome" src="web/audio/clickdrop.wav"></audio>

								<li class="menu-item current-menu-item"><a href="http://127.0.0.1:8000/"><img src="web/dummy/home.png"  onclick="document.getElementById('playSoundHome').play()"> </a></li>
								<li class="menu-item"><a href="http://127.0.0.1:8000/random"><img src="web/dummy/dice.png" onclick="document.getElementById('playSoundHome').play()"alt=""></a></li>
								<li class="menu-item"><a id="playSoundHome" href="http://127.0.0.1:8000/divi"><img src="web/dummy/division.png" onclick="document.getElementById('playSoundHome').play()" alt=""></a></li>
								<li class="menu-item"><a href="http://127.0.0.1:8000/multi"><img src="web/dummy/multiplication.png" onclick="document.getElementById('playSoundHome').play()" alt=""></a></li>
								<li class="menu-item"><a href="http://127.0.0.1:8000/add"><img src="web/dummy/plus.png" onclick="document.getElementById('playSoundHome').play()"alt=""></a></li>
								<li class="menu-item"><a href="http://127.0.0.1:8000/sub"><img src="web/dummy/minus.png" onclick="document.getElementById('playSoundHome').play()"alt=""></a></li>

								<li class="menu-item"><a href="http://127.0.0.1:8000/register"><img src="web/dummy/register.png" onclick="document.getElementById('playSoundHome').play()"alt=""></a></li>
								<li class="menu-item"><a href="http://127.0.0.1:8000/login"><img src="web/dummy/log-in.png" onclick="document.getElementById('playSoundHome').play()"alt=""></a></li>

							</ul> <!-- .menu -->

							<script>
									const clickSound = new Audio('web/audio/clickdrop.wav');
									const playSound_btn = document.getElementById('playSound');
       								const divi_link = document.getElementById('divi_link');


									playSound_btn.onclick = () => {
										clickSound.play();
									};

									

							</script>
						</div> <!-- .main-navigation -->

							

						<div class="mobile-navigation"></div>
					</div> <!-- .container -->
				</div> <!-- .primary-header -->

				<div class="home-slider">
					<div class="container">
						<div class="slider">
							<ul class="slides">
								<li>
									<!-- <img src="dummy/computer-game.png" alt=""> -->

									<div class="slide-caption">
									<h2 class="slide-title" >I Love to learn! <br> Welcome back {{config('app.name')}}!</h2>
										<p>Get ready to explore the exciting world of math with MathsDrills! Let's dive in and discover the fun of learning together!</p>
										<a href="#" class="button primary large"><img src="web/dummy/gamepad.png" alt=""></a>

									</div>
									<img src="web/dummy/kid.png" alt="">
								</li>
								<li>
									<div class="slide-caption">
										<h2 class="slide-title">I Love to Solve! <br> Welcome back  {{config('app.name')}}!</h2>
										<p>Unleash your math superpowers with MathsDrills! Welcome back, math whizzes! 🚀</p>
										<a href="#" class="button primary large"><img src="web/dummy/play.png" alt=""></a></a>
									</div>
									<img src="web/dummy/kid.png" alt="">
								</li>
								<li>
									<div class="slide-caption">
										<h2 class="slide-title">I Love to Play! <br> Welcome back  {{config('app.name')}}!</h2>
										<p>"Calling all math adventurers! Welcome back to the world of MathsDrills, where every problem is a puzzle waiting to be solved!</p>
										<a href="#" class="button primary large"><img src="web/dummy/play.png" alt=""></a></a>
									</div>
									<img src="web/dummy/kid.png" alt="">

								</li>
							</ul> <!-- .slides -->
						</div> <!-- .slider -->
					</div> <!-- .container -->
				</div> <!-- .home-slider -->
			</header>
		</div>

  
	
	</body>
