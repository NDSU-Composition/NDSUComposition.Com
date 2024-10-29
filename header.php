<nav class="navbar navbar-expand-lg navbar-light d-print-none" id="ndsucompnav" role="navigation" style="background-color:#fff;">
	<div class="container">
		<a class="navbar-brand" href="/">
			<img src="//ndsucomposition.com/assets/MusicComposition_2.svg" class="d-sm-inline" alt="NDSU Composition Logo" border="0" style="width:219px;" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-content">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">The Program</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="//ndsucomposition.com/the-program/">About NDSU Composition</a></li>
					<li><a class="dropdown-item" href="//ndsucomposition.com/the-program/the-curriculum/">The Composition Curriculum</a></li>
					<li><a class="dropdown-item" href="//ndsucomposition.com/apply/">Apply</a></li>
				</ul>
			</li>
			
			<li class="nav-item"><a class="nav-link<?php if(!empty($hammer->location[0])){if($hammer->location[0]=="resources"){echo " active";}}?>" aria-current="page" href="//ndsucomposition.com/resources/">Resources</a></li>
			<!--<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Events
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="//ndsucomposition.com/thundering-heard">Thundering Heard</a></li>
					<li><a class="dropdown-item" href="//scorewars.org">Score Wars</a></li>
				</ul>
			</li>-->
			<li class="nav-item"><a class="nav-link<?php if($_SERVER['SERVER_NAME']=="fargocomposers.com"){echo " active";}?>" aria-current="page" href="//fargocomposers.com">Fargo Composers Press</a></li>
			<li class="nav-item"><a class="nav-link<?php if(!empty($hammer->location[0])){if($hammer->location[0]=="thundering-heard"){echo " active";}}?>" aria-current="page" href="//ndsucomposition.com/thundering-heard/">Thundering Heard</a></li>
			<li class="nav-item"><a class="nav-link<?php if($_SERVER['SERVER_NAME']=="scorewars.org"){echo " active";}?>" aria-current="page" href="//scorewars.org">SCORE WARS</a></li>
			</ul>
		</div><!-- nav-collapse -->
	</div><!-- contianer --> 
</nav><!--navbar-->
<style>
#ndsucompnav .active{
	font-weight:bold;
}
A {color:#0a5640}
</style>