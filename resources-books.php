<?php
function book($author,$title,$url="",$have="",$publisher=""){
    echo "<tr><td>".$author."</td><td>";
    if($url){echo "<a href=\"".$url."\" target=\"_BLANK\"><em>".$title."</em></a>";}else{echo "<em>".$title."</em>";}
    echo "</td><td>";
    if($have){echo "<i class=\"fa-solid fa-check text-success\"></i>";}
    echo "</td></tr>";
}

function libheader(){echo "<thead><th>Author(s)</th><th>Title</th><th>In Library</th></thead>";}
?>
<h2>Books</h2>
<p>† <em>denotes books available in the NDSU Music Composition library.</em></p>


<table class="table">
<thead><th colspan="3"><h3 class="text-center">Composition Texts</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Belkin, Alan", "Musical Composition: Craft and Art","https://www.alibris.com/Musical-Composition-Craft-and-Art-Alan-Belkin/book/39828494",1);
book("Brindle, Reginald Smith", "Musical Composition","https://www.alibris.com/Musical-Composition-Reginald-Smith-Brindle/book/4522386",0);
book("Carl, Robert", "Music Composition in the 21st Century: A Practical Guide for the New Common Practice","https://www.alibris.com/Music-Composition-in-the-21st-Century-A-Practical-Guide-for-the-New-Common-Practice-Robert-Carl/book/47541699",1);
book("D’Indy, Vincent", "Course in Musical Composition, vol. 1","https://www.alibris.com/Course-in-Musical-Composition-Volume-1-Vincent-DIndy/book/28854298",1);
book("Dallin, Leon", "Techniques of Twentieth Century Composition","https://www.alibris.com/Techniques-of-Twentieth-Century-Composition-A-Guide-to-the-Materials-of-Modern-Music-Leon-Dallin/book/6583832",1);
book("DeSantis, Dennis", "Making Music: 74 Creative Strategies for Electronic Music Producers","https://cdn-resources.ableton.com/resources/uploads/makingmusic/MakingMusic_DennisDeSantis.pdf",1);
book("Fux, Johann Joseph", "The Study of Counterpoint/Gradus Ad Parnassum","https://www.alibris.com/The-Study-of-Counterpoint-From-Johann-Joseph-Fuxs-Gradus-Ad-Parnassum-Johann-Joseph-Fux/book/12760865",1);
book("Hindemith, Paul", "Craft of Musical Composition, Books 1-3","https://www.alibris.com/The-Craft-of-Musical-Composition-Book-I-Theory/book/29680347",1);
book("Middleton, Jonathan", "Essentials for Composers–Creative Process by Design","https://www.alibris.com/search/ebooks/isbn/9781478632498",1);
book("Persichetti, Vincent", "Twentieth Century Harmony","https://www.alibris.com/Twentieth-century-harmony-creative-aspects-and-practice-Vincent-Persichetti/book/6856202",1);
book("Schoenberg, Arnold", "Fundamentals of Musical Composition","https://www.alibris.com/Fundamentals-of-Musical-Composition-Arnold-Schoenberg/book/2496193",1);
book("Variego, Jorge", "Composing with Constraints","www.alibris.com/Composing-with-Constraints-100-Practical-Exercises-in-Music-Composition-Jorge-Variego/book/49491149",1);
book("Wuorinen, Charles", "Simple Composition","https://www.alibris.com/Simple-composition-Charles-Wuorinen/book/6092516",1);
?>

<thead><th colspan="3"><h3 class="text-center">Composing for Media</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Phillips, Winifred", "A Composer's Guide to Game Music","",1,"Cambridge, MA: MIT Press, 2014");
book("Moorefield, Virgil", "The Producer as Composer","https://www.alibris.com/The-Producer-as-Composer-Shaping-the-Sounds-of-Popular-Music-Virgil-Moorefield/book/9198330",1,"Cambridge, MA: MIT Press, 2010");
book("Rona, Jeff", "The Reel World: Scoring for Pictures, Television, and Video Games, 3rd ed","",1,"Rowman &amp; Littlefield, 2022");
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Improvisatory and Aleatoric Music, Tunings</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Gann, Kyle", "The Arithmetic of Listening: Tuning Theory &amp; History for the Impractical Musician","",1,"Urbana: University of Illinois Press, 2019");
book("Oliveros, Pauline", "Deep Listening","",1);
book("Schafer, R. Murray", "The Soundscape","",1);
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Orchestration</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Adler, Samuel", "The Study of Orchestration, 3rd Ed.","",1);
book("Adler, Samuel", "The Study of Orchestration, 4th Ed.","https://www.alibris.com/search/books/isbn/9780393600520",1);
book("Blatter, Alfred", "Instrumentation and Orchestration","https://www.alibris.com/Instrumentation-orchestration-Alfred-Blatter/book/3256100",1);
book("Kennan, Kent and Donald Grantham", "The Technique of Orchestration","https://www.alibris.com/The-Technique-of-Orchestration-Kent-Wheeler-Kennan/book/6582482",0);
book("Piston, Walter", "Orchestration","https://www.alibris.com/search/books/isbn/9780575026025",1);
book("Read, Gardner", "Compendium of Modern Instrumental Techniques","https://www.alibris.com/Compendium-of-Modern-Instrumental-Techniques-Gardner-Read/book/1230089",1);
book("Read, Gardner", "Style and Orchestration","https://www.alibris.com/Style-and-Orchestration-Gardner-Read/book/6431574",1);
book("Read, Gardner", "Thesaurus of Orchestral Devices","https://www.alibris.com/Thesaurus-of-Orchestral-Devices-Classic-Reprint-Gardner-Read/book/39511718?matches=11",1);
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Historical Orchestration Texts</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Berlioz, Hector and Richard Strauss", "Treatise on Instrumentation","https://www.alibris.com/Treatise-on-Instrumentation-Hector-Berlioz/book/6804216",1);
book("Carse, Adam", "The History of Orchestration","https://www.alibris.com/The-History-of-Orchestration-Adam-Carse/book/2943147",1);
book("Carse, Adam", "Musical Wind Instruments","https://www.alibris.com/Musical-Wind-Instruments-Adam-Carse/book/4523050",1);
book("Forsyth, Cecil", "Orchestration","https://www.alibris.com/Orchestration-Cecil-Forsyth/book/4882069",1);
book("Rimsky-Korsakov, Nickolay", "Principles of Orchestration","https://www.alibris.com/Principles-of-Orchestrattion-N-Rimsky-Korsakov/book/48425164",1);
book("Sachs, Curt", "The History of Musical Instruments","https://store.doverpublications.com/0486452654.html",1);
book("Widor, Charles-Marie", "Manual of Practical Instrumentation","https://www.alibris.com/Manual-of-Practical-Instrumentation-Charles-Marie-Widor/book/8746590",1);
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Choral Writing</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php

book("Davison, Archibald T.", "The Technique of Choral Composition","https://www.alibris.com/The-Technique-of-Choral-Composition-Archibald-T-Davison/book/9089913?matches=7",1);
book("Forsyth, Cecil", "Choral Orchestration","https://www.alibris.com/Choral-Orchestration-Cecil-Forsyth/book/1077028",1);
book("Nielsen, Matthew D.", "The Technique of Choral Writing","https://www.alibris.com/The-Technique-of-Choral-Writing-A-Comprehensive-Guide-to-Composing-and-Arranging-for-Vocal-Ensembles-Matthew-D-Nielsen/book/55037377?matches=4",1);
book("Ades, Hawley", "Choral Arranging: Expanded Edition","https://www.alibris.com/Choral-arranging-Hawley-Ades/book/1076952?matches=15",1);
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">The Business of Composing</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Bellis, Richard", "The Emerging Film Composer","https://www.alibris.com/The-Emerging-Film-Composer-Richard-Bellis/book/41376092",1);
book("Moorefield, Virgil", "The Producer as Composer","https://www.alibris.com/The-Producer-as-Composer-Shaping-the-Sounds-of-Popular-Music-Virgil-Moorefield/book/9198330",1,"Cambridge, MA: MIT Press, 2010");
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Musicianship and Entrepreneurship</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Beeching, Angela Myles", "Beyond Talent","https://www.alibris.com/search/books/isbn/9780190670580",1);
book("Klickstein, Gerald", "The Musician's Way","https://www.alibris.com/search/books/isbn/9780195343137",1);
book("Baskerville, David and Tim Baskerville", "Music Business Handbook and Career Guide 12th Ed.","https://www.alibris.com/search/books/isbn/9781544341200",1);
book("Cutler, David", "The Savvy Musician","https://www.alibris.com/The-Savvy-Musician-Building-a-Career-Earning-a-Living-Making-a-Difference-David-Cutler/book/29385014",1);
book("Rabideau, Mark", "Creating the Revolutionary Artist","https://www.alibris.com/Creating-the-Revolutionary-Artist-Entrepreneurship-for-the-21st-Century-Musician-Mark-Rabideau/book/39801287",1);
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Notation</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Gould, Elaine", "Behind Bars: The Definitive Guide to Music Notation","https://www.alibris.com/booksearch†mtype=B&amp;keyword=behind+bars+gould&amp;hs.x=0&amp;hs.y=0",1,"London: Faber Music, 2011");
book("Gould, Elaine", "Behind Bars: General Conventions","www.alibris.com/Behind-Bars-General-Conventions-Elaine-Gould/book/53078031",1,"London: Faber Music, 2011");
book("Powell, Steven", "Music Engraving Today, 2nd Ed.","https://www.alibris.com/search/books/isbn/9780965891028",1,"New York: Brichtmark Music, 2007");
book("Read, Gardner", "20th Century Microtonal Notation","https://www.alibris.com/20th-Century-Microtonal-Notation-Gardner-Read/book/50240",1,"New York: Greenwood Press, 1990");
book("Read, Gardner", "Modern Rhythmic Notation","https://www.alibris.com/Modern-Rhythmic-Notation-Gardner-Read/book/4425628",1,"Bloomington: Indiana University Press, 1978");
book("Read, Gardner", "Music Notation: A Manual of Modern Practice","https://www.alibris.com/Music-Notation-A-Manual-of-Modern-Practice-Gardner-Read/book/4520666?matches=5",1,"New York: Taplinger Publishing Company, 1979");
book("Read, Gardner", "Pictographic Score Notation: A Compendium","https://www.alibris.com/Pictographic-Score-Notation-A-Compendium-Gardner-Read/book/5126259",1);
book("Risatti, Howard", "New Music Vocabulary","https://www.alibris.com/New-Music-Vocabulary-Howard-Risatti/book/32530428",1);
book("G. Schirmer/AMP", "G. Schirmer Manual of Style","https://classicalondemand.com/manual-of-style.html",1);
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Composer Autobiographies/Memoirs</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Adams, John", "Hallelujah Junction","https://www.alibris.com/Hallelujah-Junction-Composing-an-American-Life-John-Adams/book/10973511",1);
book("Adams, John Luther", "Silences so Deep","https://www.alibris.com/Silences-So-Deep-Music-Solitude-Alaska-John-Luther-Adams/book/47657972",1);
book("Adolphe, Bruce", "Of Mozart, Parrots, and Cherry Blossoms in the Wind: A composer explores mysteries of the musical mind","",1,"New York: Limelight Editions, 1999");
book("Adolphe, Bruce", "The Mind's Ear","",1);
book("Glass, Philip", "Words Without Music","https://www.alibris.com/Words-Without-Music-A-Memoir-Philip-Glass/book/29704669",1);
book("Ives, Charles", "Essays before a Sonata","",1);
book("Reich, Steve", "Conversations","https://www.alibris.com/Conversations-Steve-Reich/book/50719967?matches=17",1);
book("Ross, Alex", "The Rest is Noise","",1,"New York, Farrar, Straus and Giroux, 2007");
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Electronic Music</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Ballora, Mark", "Digital Audio and Acoustics for the Creative Arts","https://www.alibris.com/Digital-Audio-and-Acoustics-for-the-Creative-Arts-Mark-Ballora/book/35305132",1);
book("Bianchi, Frederick and V.J. Manzo, eds", "Environmental Sound Artists in their own words","https://www.alibris.com/Environmental-Sound-Artists-In-Their-Own-Words/book/34082569?matches=11",1,"Oxford: Oxford University Press, 2016");
book("Clarke, Michael, Frederic Dufeu, and Peter Manning", "Inside Computer Music","https://www.alibris.com/Inside-Computer-Music-Michael-Clarke/book/47620451?matches=20",1,"Oxford: Oxford University Press, 2020");
book("Landy, Leigh", "Understanding the Art of Sound Organization","https://www.alibris.com/Understanding-the-Art-of-Sound-Organization-Leigh-Landy/book/10147329",1);
book("Roads, Curtis", "Composing Electronic Music. A New Aesthetic","https://www.alibris.com/Composing-Electronic-Music-A-New-Aesthetic-Curtis-Roads/book/29638683",1);
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Publishing</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Bargfrede, Allen", "Music Law in the Digital Age, 2nd Ed.","https://www.alibris.com/Music-Law-in-the-Digital-Age-3rd-Edition-Copyright-Essentials-for-Todays-Music-Business-Allen-Bargfrede/book/51280684?matches=14",1,"Boston: Berklee Press, 2017");
book("Gillen, Stephen E.", "Guide to Rights, Clearance, and Permissions in Scholarly, Educational, and Trade Publishing","https://www.ibpa-online.org/store/ViewProduct.aspx?id=11655954",1);
book("Mower, Allyson", "Developing Authorship and Copyright Ownership Policies","https://www.alibris.com/Developing-Authorship-and-Copyright-Ownership-Policies-Best-Practices-Allyson-Mower/book/53655402?matches=16",1,"Lanham: Rowman and Littlefield, 2024");
book("Phillips, Pam and Andrew Surmani", "Copyright Handbook for Music Educators and Directors","https://www.alibris.com/Copyright-Handbook-for-Music-Educators-and-Directors-A-Practical-Easy-To-Read-Guide-Pam-Phillips/book/38189651?matches=5",1,"Van Nuys, CA: Alfred, 2017");
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Creativity (and other Misc.)</h3></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Abrahamson, Eric and David H. Freedman", "A Perfect Mess","https://www.alibris.com/A-Perfect-Mess-The-Hidden-Benefits-of-Disorder-How-Crammed-Closets-Cluttered-Offices-and-On-The-Fly-Planning-Make-the-World-a-Better-Place-Eric-Abrahamson/book/28335939?matches=33",1,"New York: Back Bay Books, 2007");
book("Ariely, Dan", "Predictably Irrational: The Hidden Forces That Shape Our Decisions","https://www.alibris.com/The-Predictably-Irrational-Dr-Dan-Ariely/book/11411581?matches=5",1,"New York: Harper Perennial, 2010");
book("Csikszentmihalyi, Mihaly", "Creativity: The Psychology of Discovery and Invention","https://www.alibris.com/Creativity-The-Psychology-of-Discovery-and-Invention-Dr-Mihaly-Csikszentmihalyi-PhD/book/24422519?matches=40",1,"New York: Harper Perennial, 2013");
book("Csikszentmihalyi, Mihaly", "Flow: The Psychology of Optimal Experience","https://www.alibris.com/Flow-The-Psychology-of-Optimal-Experience/book/2369772?matches=192",1,"New York: Harper Perennial, 2008");
book("Coyle, Daniel", "The Talent Code","https://www.alibris.com/The-Talent-Code-Greatness-Isnt-Born-Its-Grown-Heres-How-Daniel-Coyle/book/11323949?matches=204",1,"New York: Bantam, 2009");
book("Duckworth, Angela", "Grit: The Power of Passion and Perseverance","https://www.alibris.com/Grit-The-Power-of-Passion-and-Perseverance-Angela-Duckworth/book/33591808?matches=671",1,"New York: Scribner, 2016");
book("Epstein, David", "Range: Why Generalists Triumph in a Specialized World","https://www.alibris.com/Range-Why-Generalists-Triumph-in-a-Specialized-World-David-Epstein/book/42548742?matches=228",1,"New York: Riverhead Books, 2019");
book("Gardner, Howard", "Creating Minds","https://www.alibris.com/Creating-Minds-An-Anatomy-of-Creativity-Seen-Through-the-Lives-of-Freud-Einstein-Picasso-Stravinsky-Eliot-Graham-and-Ghandi-Howard-E-Gardner/book/32646233?matches=66",1,"New York: Basic Books, 2011");
book("Grant, Adam", "Originals: How Non-Conformists Move The World","https://www.alibris.com/Originals-How-Non-Conformists-Move-the-World-Adam-Grant/book/33100284?matches=367",1,"New York; Viking, 2016");
book("Jourdain, Robert", "Music, The Brain, and Ecstasy: How Music Captures our Imagination","https://www.alibris.com/Music-the-Brain-and-Ecstasy-How-Music-Captures-Our-Imagination-Robert-Jourdain/book/28632172?matches=112",1,"New York: Harper Perennial, 2002");
book("Kahneman, Daniel, Olivier Sibony, Cass R. Sunstein", "Noise: A Flaw in Human Judgment","https://www.alibris.com/Noise-A-Flaw-in-Human-Judgment-Daniel-Kahneman/book/49116799?matches=118",1,"New York: Little, Brown Spark, 2021");
book("Kahneman, Daniel", "Thinking, Fast and Slow","https://www.alibris.com/Thinking-Fast-and-Slow-Daniel-Kahneman-PhD/book/28274912?matches=313",1,"New York: Farrar, Straus and Giroux, 2011");
book("Kaufman, Scott Barry and Carolyn Gregoire", "Wired to Create: Unraveling the Mysteries of the Creative Mind","https://www.alibris.com/Wired-to-Create-Unraveling-the-Mysteries-of-the-Creative-Mind-Scott-Barry-Kaufman-PhD/book/32833440?matches=54",1,"New York: TarcherPerigee, 2015");
book("King, Stephen", "On Writing: A memoir of the craft","https://www.alibris.com/On-Writing-A-Memoir-of-the-Craft-Stephen-King/book/4846561?matches=601",1,"New York: Scribner, 2000");
book("Lamott, Anne", "Bird By Bird: Some Instructions on Writing and Life","https://www.alibris.com/Bird-by-Bird-Some-Instructions-on-Writing-and-Life-Anne-Lamott/book/716623?matches=573",1,"New York: Anchor Books, 1994");
book("McPhee, John", "Draft No. 4: On the Writing Process","https://www.alibris.com/Draft-No-4-John-McPhee/book/55150341?matches=5",1,"New York: Farrar, Straus and Giroux, 2017");
book("Montague, Read", "Why Choose this Book: How we make decisions","https://www.alibris.com/Why-Choose-This-Book-How-We-Make-Decisions-Read-Montague/book/9626458?matches=26",1,"New York: Dutton, 2006");
book("Savage, Adam", "Every Tool's A Hammer: Life is What You Make It","https://www.alibris.com/Every-Tools-a-Hammer-Life-Is-What-You-Make-It-Adam-Savage/book/42409302?matches=47",1,"New York: Atria, 2020");
book("Thaler, Richard H. and Cass R. Sunstein", "Nudge: The Final Edition","https://www.alibris.com/search/books/isbn/9780143137009?matches=33",1,"New York: Penguin, 2021");
book("Tharp, Twyla", "The Creative Habit","https://www.alibris.com/The-Creative-Habit-Learn-It-and-Use-It-for-Life-Twyla-Tharp/book/7865468?matches=229",1,"New York, Simon &amp; Schuster, 2003");
book("Tough, Paul", "How Children Succeed: Grit, Curiosity, and the Hidden Power of Character","https://www.alibris.com/How-Children-Succeed-Grit-Curiosity-and-the-Hidden-Power-of-Character-Paul-Tough/book/28074313?matches=289",1,"Boston: Mariner Books, 2013");
book("Zander, Rosamund Stone and Benjamin Zander", "The Art of Possibility","https://www.alibris.com/Art-of-Possibility-Transforming-Professional-and-Personal-Life-R-Zander/book/432106?matches=375",1,"New York: Penguin, 2000");
?>
</tbody>

<thead><th colspan="3"><h3 class="text-center">Instrument-Specific Writing</h3></th></thead>
<thead><th colspan="3"><h4 class="text-center">Flute</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Dick, Robert", "The Other Flute","https://www.alibris.com/The-Other-Flute-Manual/book/12135624",0);
book("Dick, Robert", "Tone Development through Extended Techniques","https://www.alibris.com/Tone-Development-Through-Extended-Techniques-Robert-Dick/book/48427112",0);
book("Hudelson, Brandy", "The Art of Beatboxing","https://www.fluteworld.com/product/art-of-beatboxing-the/",0);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Oboe</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Van Cleve, Libby", "Oboe Unbound","https://www.alibris.com/Oboe-Unbound-Contemporary-Techniques-Revised-Ms-Libby-Van-Cleve/book/42696891",1);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Clarinet</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Caravan, Ronald L.","Preliminary Exercises &amp; Etudes in Contemporary Techniques for Clarinet","https://ethospublications.com/ecc_eps/music-for-clarinet/collections--study-volumes/preliminary-exercises-etudes-in-contemporary-techniques/",0);
book("Rehfeldt, Phillip","New Directions for Clarinet","https://www.alibris.com/New-Directions-for-Clarinet-Phillip-Rehfeldt/book/48340717",0);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Saxophone</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Weiss, Marcus","Techniques of Saxophone Playing","https://www.alibris.com/Techniques-of-Saxophone-Playing-Marcus-Weiss/book/23708410",1);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Bassoon</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Sampson, Jamie Leigh","Contemporary Techniques for the Bassoon: Multiphonics","https://www.alibris.com/Contemporary-Techniques-for-the-Bassoon-Multiphonics-Jamie-Leigh-Sampson/book/26808508?matches=6",0);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Horn</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Hill, Douglas","Extended Techniques for the Horn","",0);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Trumpet</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Stevens, Thomas","Contemporary Trumpet Studies","",0);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Euphonium</h4></th></thead>
<thead><th colspan="3"><h4 class="text-center">Trombone</h4></th></thead>
<thead><th colspan="3"><h4 class="text-center">Tuba</h4></th></thead>

<thead><th colspan="3"><h4 class="text-center">Percussion</h4></th></thead>
<?php libheader(); ?>
<tbody>
<?php
book("Solomon, Samuel Z.","How to Write for Percussion: A Comprehensive Guide to Percussion Composition","https://www.alibris.com/How-to-Write-for-Percussion-A-Comprehensive-Guide-to-Percussion-Composition-Samuel-Z-Solomon/book/33210493",1);
book("Berry, Mick and Jason Gianni","The Drummer's Bible","https://www.alibris.com/The-Drummers-Bible-How-to-Play-Every-Drum-Style-from-Afro-Cuban-to-Zydeco-Mick-Berry/book/8178134",1);
?>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Strings</h4></th></thead>
<?php libheader(); ?>
<tbody>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Piano</h4></th></thead>
<?php libheader(); ?>
<tbody>
</tbody>

<thead><th colspan="3"><h4 class="text-center">Organ</h4></th></thead>
<?php libheader(); ?>
<tbody>
</tbody>
</table>