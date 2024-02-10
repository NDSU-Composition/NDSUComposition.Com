<!DOCTYPE html>
<html lang="en">
<?php
$options['vanguard']=FALSE;
require "/var/www/api.ntfg.net/htdocs/hammer/vanilla.php";
$hammer->setHS(1);
// $hammer->debug();
$hammer->clientUrlParse();
$title = "NDSU Composition";foreach($hammer->location as $loc){$title .= " - " . ucwords(str_replace("-"," ",$loc));}

$includes = "";
$hammer->head($title,$includes,"NDSU Composition");

$hammer->setHS("6500E897-DAAD-473B-90FC-9C1034A04AFD");
$hc = new hammer_content($hammer);
// $hammer->debug();
// die();

?>
<body>
<nav class="navbar navbar-expand-lg navbar-light d-print-none" id="ndsucompnav" role="navigation" style="background-color:#fff;">
	<div class="container">
		<a class="navbar-brand" href="/">
			<img src="/MusicComposition_2.svg" class="d-sm-inline" alt="NoteForge Logo" border="0" style="width:219px;" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-content">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			<li class="nav-item"><a class="nav-link<?php if(!empty($hammer->location[0])){if($hammer->location[0]=="apply"){echo " active";}}?>" aria-current="page" href="/apply/">Apply</a></li>
			<li class="nav-item"><a class="nav-link<?php if(!empty($hammer->location[0])){if($hammer->location[0]=="the-program"){echo " active";}}?>" aria-current="page" href="/the-program/">The Program</a></li>
			<li class="nav-item"><a class="nav-link<?php if(!empty($hammer->location[0])){if($hammer->location[0]=="the-studio"){echo " active";}}?>" aria-current="page" href="/the-studio/">The Studio</a></li>
			<li class="nav-item"><a class="nav-link<?php if(!empty($hammer->location[0])){if($hammer->location[0]=="resources"){echo " active";}}?>" aria-current="page" href="/resources/">Resources</a></li>
			<li class="nav-item"><a class="nav-link<?php if(!empty($hammer->location[0])){if($hammer->location[0]=="thundering-heard"){echo " active";}}?>" aria-current="page" href="/thundering-heard/">Thundering Heard</a></li>
			</ul>
		</div><!-- nav-collapse -->
	</div><!-- contianer --> 
</nav><!--navbar-->

		
<div class="container-fluid">	
	<div class="container">
		<div class="d-none d-print-inline"><img src="/assets/NoteForge-Horizontal.svg" style="width:300px;" class="d-none d-print-inline" alt="NoteForge Logo" /><br /></div>
	</div><!--container-->
	
	<?php
	$content = new hammer_content($hammer);
	
	if(!empty($hammer->location[0])){
		echo "<div class=\"container\">";
		//First element is set. See if there's a page
		if (file_exists($hammer->location[0].".php")){include $hammer->location[0].".php";}
		else{
			echo "<div class=\"container\">";
			$page = $content->getPageByPathway(end($_GET),$_GET,"2");
			if(empty($page)){
				echo "No such page exists.";
			}else{
				// echo $content->breadcrumb($page['id']);
				
				if(!empty($hammer->location[0])){echo "<h1>" . $hammer->unsanitize($page['title']) . "</h1>";}
				if(empty($hammer->unsanitize($page['content']))){
					$content->getFamilyMenu($page['id'],$page['site'],1);
				}else{
					echo $hammer->unsanitize($page['content']);
				}
				echo "<br />";
			}
			echo "</div>";
		}
		echo "<br />";
		echo "</div>";
	}else{
		
		$hammer->debug();
	?>
	<div class="container">
		<br />
			<h1>Composition @ NDSU<br /><small>New Music and Entrepreneurial Training</small></h1>
			
			<!--<div class="alert alert-info">Thundering Heard 2023 is scheduled for November 16 at 7:30pm!</div>-->
			
			<p><!--<a href="#spring23" class="btn btn-lg btn-success">Spring 2023 Lesson Sign-up</a><br /><br />-->
			North Dakota State University offers the first and only <strong>Bachelor of Music in Composition</strong> program in the Dakotas, and one of the few in the region. NDSU Music Composition combines the robust educational opportunities available at a large research university (13,000 students) with the personal attention available through the Challey School of Music.</p>

			<p>NDSU's Music Composition curriculum focuses on the entire composition workflow. Students write music, seek commissions, produce professional scores, market their sheet music, and produce concerts. Composition majors have the opportunity to pursue additional topics, such as publishing, computer science, and entrepreneurship as part of their degree plan.</p>

			<p>Some of our current and upcoming new music initiatives include:</p>
			<ul>
				<li>The <a href="//noisedots.com">NoiseDots Composer Collective</a>, a student-run music press for real-world work in self-publishing music.</li>
				<li>A student composer-in-residence program for NDSU ensembles.</li>
				<li><a href="/thundering-heard/"><em>Thundering Heard</em></a>, a new music series.</li>
			</ul>
		</div>
	
			
			
			<!-- Spring 23 --
			<section id="spring23">
				<div>
					<h2>Spring 2023</h2>
					
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfSwbdBqU3ykKfRLauuNjyB4frh5-y5ewmJHCTQ2XFaTMXGaw/viewform?embedded=true" width="100%" height="1259" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
				</div>
			</section>
			<hr>
			<!-- -->
			
			
	</div><!--Container-->


</div>
</div>	
	<?php } ?>
		
	</div><!--container-fluid-->
<div class="d-print-none mt-auto NDSU-footer" style="background-color:#ddd;">
	<div class="mt-auto">
	<br />
		<footer class="mt-auto footer container">
		<div class="row">
		<div class="col-md-4">
		<img src="/MusicComposition%20Square.png" style="height:175px;" alt="NDSU Composition Logo" /><br /><br />
		</div>
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4 text-end">
			&copy; <?php echo $hammer->getHT('roman'); ?> NDSU Composition<br />
			PO Box 6050, Dept. 2540<br />
			Fargo, ND 58108<br />
			(701) 231-5670<br />
			<a href="mailto:hi@ndsucomposition.com">hi@ndsucomposition.com</a>
			<br /><br />
		</div>
		</div>
		</footer>
	</div><!--Container-->
</div><!--row-->

<?php require_once "/var/www/cdn.ntfg.net/htdocs/footer-scripts.php"; ?>
<!--<script rel="preload" as="script" src="//cdn.ntfg.net/footer-scripts.php?ts=<?php echo $hammer->getHT('timestamp');?>">-->
</body>  
</html>  