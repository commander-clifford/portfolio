<!--
	SUB_PAGE NAVIGATION
	this nav lives in the home page under the under_cover

	UPDATE: DEPRECIATED
	- simplifying nav to only side drawer nav
	- this component was part of the old design and is no longer used
	- leaving in directory for archive and reference sake.
-->

<nav id="sub_page-nav" class="sub_page-nav navbar navbar-default container layer-margin" style="display:none;">
	<div class="container-fluid" >
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#work-nav" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- <a class="navbar-brand" href="#">Brand</a> -->
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="work-nav collapse navbar-collapse" id="work-nav">
			<ul class="nav navbar-nav navbar-right">

				<?php if($project != "work-home"): ?>
				<!-- <li><a class="secondary-link" href="<?=$index?>">back</a></li> -->
				<?php endif; ?>

				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web Animations <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?=$index?>&project=loading-indicators">Loading Indicators</a></li>
						<li><a href="<?=$index?>&project=morphing-menus">Morphing Menus</a></li>
						<li><a href="http://codepen.io/commander-clifford" target="_blank"><span class="cliphicon-codeopen"></span>CodePen.io</a></li>
					</ul>
				</li> -->
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marketing <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?=$index?>&project=fundraisr">Fundraisr</a></li>
						<li><a href="<?=$index?>&project=style-tile">Style Tile</a></li>
					</ul>
				</li> -->
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prototypes <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?=$index?>&project=simon">Simon</a></li>
						<li><a href="<?=$index?>&project=lights-out">Lights Out</a></li>
						<li><a href="<?=$index?>&project=logistics-data-tool">Logistics Data Tool</a></li>
						<li><a href="<?=$index?>&project=logistics-portal">Logistics Portal</a></li>
					</ul>
				</li> -->
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
					<ul class="dropdown-menu">

						</ul>
				</li> -->
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
