<?php

	$index = "index.php?page=work"; // used inside sub_page_nav for back button
	$project = $_GET['project']; // what project to display, if any
	if(!$project){$project = 'work-home';} // if no project just go home

?>

<div id="about-page" class="sub-page">

	<?php include('components/sub_page_nav.php'); ?>

	<main id="work-page__main" class="work-page__main layer-margin">
		<div id="work" class="work container">
			<?php
				if(file_exists('pages/projects/'.$project.'.php')): // make sure $project has a matching file
					include('pages/projects/'.$project.'.php');
				else:
					include('pages/projects/work-home.php'); // if no matching file, just go home
				endif;
			?>
		</div>
	</main>

</div>
