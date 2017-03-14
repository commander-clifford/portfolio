<div id="cover-wrapper" class="cover-wrapper container-fluid ">
    <?php include('components/cover.php'); ?>
</div>   


<div id="inner-wrapper" class="inner-wrapper">
     <div id="page-wrapper" class="page-wrapper container-fluid">

		<div id="home" class="home container">
			
			<!-- Avatar -->

			<div id="home-avatar" class="home-avatar">
				<img class="img-responsive" src="img/handleBars.png" alt="Clifford's profile picture">
			</div>

			<!-- Header -->

			<header class="row">
				<div class="col-xs-12">
					<h1 class="heading-typ-1 main-heading">Designer &amp; Engineer</h1>
				</div>
			</header>

			<!-- Navigation -->

			<nav id="home-page__nav" class="home-page__nav navbar navbar-default">
				<!-- <div class="container-fluid"> -->
			    	<div class="navbar-header">
					    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#home-nav" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
					    <!-- <a class="navbar-brand" href="#">Brand</a> -->
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
				    <div id="home-nav" class="home-nav collapse navbar-collapse">
				    	<ul class="nav navbar-nav navbar-left">
				    		<li><a href="index.php?page=work">Porfolio</a></li>
				    		<li><a href="http://www.codepen.io/commander-clifford/" target="_blank"><span class="cliphicon-codeopen"></span>Codepen.io</a></li>
				    	</ul>
				      	<ul class="nav navbar-nav navbar-right navbar-secondary">
				        	<li><a href="mailto:cliffordryannelson@gmail.com" target="_top">Mail me</a></li>
				        	<li><a href="img/clifford_nelson_resume.pdf" target="_blank">Download my resume</a></li>
					    </ul>
				    </div><!-- /.navbar-collapse -->
				<!-- </div>/.container-fluid -->
			</nav>


			<!-- Main -->

			<main class="row">

				<div class="col-xs-12 col-md-7">

					<!--  -->

					<div id="aboutme">
						<p>
							I've been working with digital media for over <span class="bold">10 years</span>, and I love learning new things everyday. My enthusiasm for technology is the human factor, the user interface is the keystone to any good solution. With a background in design and engineering, I think with an artistic and scientific mindset - bringing a unique perspective to the table. 
						</p>
						<p>
							After high-school I did a tour in the <span class="bold">Navy</span> where I studied <span class="bold">electronics engineering</span>. While gaining experience working with complex electronic and electromechanical systems, I also gained a lot of other key values. 
		        		</p>
		        		<p>
		          			A few years later, I received an honorable discharge from the Navy and I joined a <span class="bold">Department of Defense Contractor</span> where I was able to use my talents to improve the Navy's shipboard entertainment systems. During my tenure with the Defense Media Activity I was the lead engineer for the prototyping and build of the next generation broadcast studio system for larger Navy vessels.
						</p>
						<p>
							Since then I've studied <span class="bold">psychology, design and engineering</span> where I've really honed in on user advocacy. Today, my favorite exercise is collaborating with team members to build game changing experiences from the ground up.	
						</p>
					</div>
				</div>

				<div class="col-xs-12 col-md-5">
					<div id="resume" class="resume-wrapper">
						<!-- Resume -->
						<?php include('components/resume.php'); ?>
					</div>
				</div>
				<!-- <div class="col-xs-12 col-sm-12 col-md-5">
					<img class="img-responsive" src="img/grey.png" alt="image change me">
				</div> -->

			</main>

			<!-- Projects Carousel -->

			<div class="row">
				<div class="col-xs-12">
					<div id="projects">
						
						<h2 class="heading-typ-1">Projects</h2>
						<p class="text-center">Check out these <a href="http://codepen.io/commander-clifford/" target="_blank">codepen.io&nbsp;projects</a> or check out my <a href="index.php?page=work">favorite&nbsp;projects.</a></p>

						<?php include 'components/projects-carousel.php'; ?>

					</div>
				</div>
			</div>
			
		</div>

		
	</div>
</div>



