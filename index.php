 <?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$mehdiImage   = file_get_contents(__DIR__."/incl/breakfast_in_barcelona.html");
$mehdiByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h3>Om mig själv</h3>

<a href="http://www.mehdykhayyami.weebly.com">
<figure class="right top">
{$mehdiImage}
</figure>
</a>

<p>Mitt namn är Mehdy Khayyami och är ursprungligen från Mashhad som är den andra största staden i Iran efter huvudstaden, Tehran. Sedan min barndom, var jag förtjust i måleri och teckning. Samtidigt var jag väldigt intresserad av att spela fotboll, då fortsatte jag att spela professionellt fotboll tills jag var 15 år gammal.</p>
<p>Eftersom min familj värdesätter utbildning som högst var det naturligt för mig att fokusera på min utbildning istället.</p>
<p>Jag studerade det naturvetenskapliga programmet på gymnasiet. Efter avslutningen följde jag min passion och började studera konst på professionell nivå. Då klarade jag nationella provet och började studera grafisk design och måleri på kandidat från Tehrans Art University. Jag vidareutbildade mig inom samma linje och fick därefter min magisterexamen.</p>
<p>När jag var klar med min Master studier i Iran, beslutade jag att flytta utomlands för att vidareutbilda mig och lära mig nya saker, så jag valde Sverige som har bra kvalité på sina utbildningar som min första destination. Jag blev intagen på Interaktionsdesign mastersprogram på Malmö högskola. flyttade jag till Sverige i augusti 2009.</p>
<p>Sedan dess har jag varit upptagen med olika interaktionsdesigns projekt. Jag har gjort en del forskningar, och har arbetat med människor i den akademiska världen och marknaden.</p>
<p>Varför valde jag att studera igen? Jag insåg att interaktion designers som har en design bakgrund har mindre fördel för att hitta bra jobb jämfört med dem som har programmering bakgrund, trots att designers har mer att säga när det gäller kreativitet och estetik. Därför ser jag denna utbildning som en stor möjlighet och en perfekt komplement till mina tidigare kunskaper som kan öka mina chanser för att nå mitt mål, dvs. hitta ett bra jobb.</p>
<p>Här (<a href="http://www.mehdykhayyami.weebly.com">www.mehdykhayyami.weebly.com</a>) kan ni hitta min online portfolio.</p>

{$mehdiByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 