<?php if(!isset($lz->location[1])){?>
<h1>The Program</h1>
<h3>The Music Composition Major</h3>
<p>The BM Composition program is designed for self-starters who are looking to pursue professional careers as composers, arrangers, publishers, or music technologists. Our program is flexible yet thorough, and includes study in Music Theory, Music History, Instrumental or Vocal Performance, and Piano in addition to Composition.</p>

<p>In addition, students are required to pick courses and credentials that support their future career goals. Some examples include:</p>
<ul>
	<li>If business is your thing, you can get a minor or certificate in Entrepreneurship, or minors in Accounting, Business Administration, or Management Information Systems.</li>
	<li>If you're interested in music and software design, you might consider minoring in Computer Science.</li>
	<li>If you're interested in sheet music, you can pursue publishing work with the NDSU Press.</li>
	<li>If graduate school is in your future, you might take additional music theory and history classes</li>
	<li>If you're interested in writing music AND lyrics, or if you have your eye on Broadway, minoring in Creative Writing, English, or Theatre Arts might be for you.</li>
</ul>

<p><a href="/the-program/the-curriculum/" class="btn btn-lg btn-success">The Curriculum</a></p>


<p>If you're interested in the composition major at NDSU, let's talk. <br /><br /><a href="https://calendly.com/kylevanderburg/composition-lesson-25-minute" class="btn btn-lg btn-success">Request a Lesson</a></p>

<h3>Opportunities for all music majors:</h3>

<p><strong><em>I'm interested in composition, but I'm also interested in [something else]. Can I do both?</em></strong><br />
While it's possible to double-major in Music Composition and another field, the BM in Composition is geared toward students pursuing one degree, and adding to that may take more than the 4-5 years needed for a bachelor's degree. However, NDSU also offers the Bachelor of Arts (BA) or Bachelor of Science (BS) in Music as well.</p>

<p>The BA requires two years of a foreign language, while the BS requires a minor or a second major. Students can minor in Entrepreneurship through NDSU’s <a href="https://www.ndsu.edu/business/" target="_blank" style="">College of Business</a> (which accepts credit from MUSC 385: Music Entrepreneurship), or pick from <a href="https://www.ndsu.edu/majors/" target="_blank" style="">NDSU's catalog of majors/minors</a>.</p>

<p><strong><em>But what if I'm not interested in majoring in music composition? Can I still take composition lessons?</em></strong><br />We keep the composition program artificially small—around 10% of the population of the Challey School of Music. However, we do allow non-composition music majors to take composition lessons depending on how much room is available in the studio.</p>

<?php }else{
	include "the-studio-".$lz->location[1].".php";
	
}