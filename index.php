<!DOCTYPE html>
<html lang="en">
<?php
$options['vanguard']=FALSE;
require "/var/www/api.ntfg.net/htdocs/hammer/vanilla.php";
$hammer->setHS(1);
// $hammer->debug();
$hammer->clientUrlParse();
$title = "NDSU Composition";foreach($hammer->location as $loc){$title .= " - " . ucwords(str_replace("-"," ",$loc));}

$includes = "<link rel=\"shortcut icon\" href=\"//ndsucomposition.com/assets/favicon.png\"/>";
$hammer->head($title,$includes,"NDSU Composition");

$hammer->setHS("6500E897-DAAD-473B-90FC-9C1034A04AFD");
$hc = new hammer_content($hammer);
// $hammer->debug();
// die();

?>
<body>
<?php include '/var/www/ndsucomposition.com/htdocs/header.php'; ?>

		
<div class="container-fluid">	
	<div class="container">
		<div class="d-none d-print-inline"><img src="/assets/MusicComposition_2.svg" style="width:300px;" class="d-none d-print-inline" alt="NoteForge Logo" /><br /></div>
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
	<?php include '/var/www/ndsucomposition.com/htdocs/footer.php'; ?>

<?php require_once "/var/www/cdn.ntfg.net/htdocs/footer-scripts.php"; ?>
<!--<script rel="preload" as="script" src="//cdn.ntfg.net/footer-scripts.php?ts=<?php echo $hammer->getHT('timestamp');?>">-->
</body>  
</html>  