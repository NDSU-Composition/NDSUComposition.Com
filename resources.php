
<?php 
if(empty($hammer->location[1])){
	?>
	<h1>Resources</h1>
	<h2><a href="https://github.com/NDSU-Composition/Handbook" target="_BLANK">Studio Handbook</a></h2>
	<hr>
	<h2><a href="/resources/books/">Books</a></h2>
	<h2><a href="/resources/commissioning/">Resources for Commissioning Music</a></h2>
	<h2><a href="/resources/organizations/">Organizations</a></h2>
	
	<hr>
	<h3>Files</h3>
	
	<a href="/files/Creative Brief-Composer.pdf" class="btn btn-lg btn-success mb-2" target="_BLANK"><i class="fas fa-download"></i> Creative Brief for Composers</a><br />
	<a href="/files/Creative Brief-Music.pdf" class="btn btn-lg btn-success mb-2" target="_BLANK"><i class="fas fa-download"></i> Creative Brief for Music</a><br />
	<hr>
	<a href="/files/Publishing-Bibliography.pdf" class="btn btn-lg btn-success mb-2" target="_BLANK"><i class="fas fa-download"></i> Publishing Bibliography</a> <br />
	<a href="/files/Publishing-Music Editorial Preferences.pdf" class="btn btn-lg btn-success mb-2" target="_BLANK"><i class="fas fa-download"></i> Publishing-Music Editorial Preferences</a><br />
	<a href="/files/Publishing-Music Proofing.pdf" class="btn btn-lg btn-success mb-2" target="_BLANK"><i class="fas fa-download"></i> Publishing-Music Proofing Checklist</a><br />
		
	<?php
}else{
	echo "<h1><a href=\"/resources/\"><i class=\"fa fa-chevron-left\"></i></a> Resources</h1>";
	include "resources-".$hammer->location[1].".php";
}