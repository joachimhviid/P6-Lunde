<!doctype html>
<html lang="da">
<head>
  <meta charset="utf-8">

  <title>Style Guide - Lunde by</title>
  <meta name="description" content="Style Guide - Lunde by" />
  <meta name="keywords" content="">
  <meta name="author" content="Lunde by" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- Icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="images/favicon/site.webmanifest">
  <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#313133">
  <link rel="shortcut icon" href="images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#313133">
  <meta name="msapplication-config" content="images/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!--      -->

  <link rel="stylesheet" href="css/main.css?v=<?php print filemtime("css/main.css"); ?>" />

</head>
<body>

<main id="styleguide">

  <section>
	<div class="container">
	  <div class="row">
		
		<div class="grid-xs-12">
		  <h3>Farver</h3>
		  <a class="explanation">Farverne på siden er holdt dæmpede og er primært hvide-grå-sorte nuancer. Dette er for at farver fra bykort og billeder er mere fremtrædende. Den grønne farve er brugt til elementer som skal have ekstra synlighed, herunder logo i footeren og call-to-action på forsiden.</a>
		</div>
		
		<div class="grid-xs-4 grid-lg-2">
		  <div class="color" style="background:#3E9B67;"></div>
		  <a class="hex">#3E9B67</a>
		</div>
		
		<div class="grid-xs-4 grid-lg-2">
		  <div class="color" style="background:#313133;"></div>
		  <a class="hex">#313133</a>
		</div>
		
		<div class="grid-xs-4 grid-lg-2">
		  <div class="color" style="background:#414142;"></div>
		  <a class="hex">#414142</a>
		</div>
		
		<div class="grid-xs-4 grid-lg-2">
		  <div class="color" style="background:#8C8C99;"></div>
		  <a class="hex">#8C8C99</a>
		</div>
		
		<div class="grid-xs-4 grid-lg-2">
		  <div class="color" style="background:#F7F7F7;"></div>
		  <a class="hex">#F7F7F7</a>
		</div>
		
		<div class="grid-xs-4 grid-lg-2">
		  <div class="color" style="background:#FFFFFF;"></div>
		  <a class="hex">#FFFFFF</a>
		</div>
	  
	  </div>
	</div>
  </section>
  
  <section>
	<div class="container">
	  <div class="row">
		
		<div class="grid-xs-12">
		  <h3>Typografi</h3>
		  <a class="explanation">Sidens skrifttyper er ligeledes holdt simple for ikke at tage opmærksomhed fra det øvrige indhold. Der benyttes en font kaldet "ITC Avant Garde" til overskrifter og "OpenSans" til al øvrig tekst.</a>
		</div>
		
		<div class="grid-xs-12 grid-lg-6">
		  <div class="typo-dark">
			<h1>Overskrift</h1>
			<h2>Overskrift</h2>
			<h3>Overskrift</h3>
			<p>Almindelig tekst</p>
		  </div>
		</div>
	  
		<div class="grid-xs-12 grid-lg-6">
		  <div class="typo-light">
			<h1>Overskrift</h1>
			<h2>Overskrift</h2>
			<h3>Overskrift</h3>
			<p>Almindelig tekst</p>
		  </div>
		</div>
		
		<div class="grid-xs-12"> 
<pre><code>&lt;h1>Overskrift&lt;/h1>
&lt;h2>Overskrift&lt;/h2>
&lt;h3>Overskrift&lt;/h3>

&lt;p>Almindelig tekst&lt;/p></code></pre>
		</div>
	  
	  </div>
	</div>
  </section>
  
  <section>
	<div class="container">
	  <div class="row">
		
		<div class="grid-xs-12">
		  <h3>Knapper</h3>
		  <a class="explanation">Knapperne er lavet med samme firkantede og simple design som sidens øvrige elementer. Button-primary bruges når der skal skabes opmærksomhed, eksempelvis som call-to-action på forsiden. Button-primary-dark benyttes til alle øvrige knapper.</a>
		</div>
		
		<div class="grid-xs-12 grid-lg-6">
		  <a class="button button-primary" href="#">button-primary</a>
<pre><code>&lt;a class="button-primary" href="#">button-primary&lt;/a></code></pre>
		</div>
		
		<div class="grid-xs-12 grid-lg-6">
		  <a class="button button-primary-dark" href="#">button-primary-dark</a>
<pre><code>&lt;a class="button-primary-dark" href="#">button-primary-dark&lt;/a></code></pre>
		</div>
	  
	  </div>
	</div>
  </section>
  
  <section>
	<div class="container">
	  <div class="row">
		
		<div class="grid-xs-12">
		  <h3>Billeder</h3>
		  <a class="explanation">Sidens billeder er alle opsat i grid og bruges til visning af faciliteter og boliger. På siden er der desuden tilknyttet overskrift og en lille sektion beskrivende tekst under hvert billede.</a>
		</div>
		
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/dagligvarebutik.webp" alt="MinKøbmand" /> </div>
		</div>
	  
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/lunde-skole.webp" alt="Lunde skole" /> </div>
		</div>
		
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/lunde-kindergarden.webp" alt="Lunde børnhave" /> </div>
		</div>
	  
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/lunde-station.webp" alt="Togstation (Vestbanen)" /> </div>
		</div>
		
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/lunde-kro.webp" alt="Lunde Kro" /> </div>
		</div>
		
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/lunde-stadion.webp" alt="Lunde Stadion" /> </div>
		</div>
		
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/lunde-boldklub.webp" alt="Lunde Boldklub" /> </div>
		</div>
		
		<div class="tile grid-xs-6 grid-md-4 grid-lg-3">
		  <div class="image"> <img src="images/grillhytte.webp" alt="Grillhytte" /> </div>
		</div>
	  
	  </div>
	</div>
  </section>
  
  <section>
	<div class="container">
	  <div class="row">
		
		<div class="grid-xs-12">
		  <h3>Navigation</h3>
		  <a class="explanation">Navigationen er opsat med fokus på læseretning. Til venstre er logoet for Lunde, som minder brugeren om hvad de kigger på. Derefter følger menupunkterne og til sidst et menupunkt opsat som knap, for at skabe mere opmærksomhed end de øvrige punkter. Navigationen er responsiv og menupunkterne folder sig sammen til en "hamburger-menu" når skærmens bredde er under 750px.</a>
		</div>
		
		<div class="grid-xs-12">
		  <nav>
			<div class="container-full">
			  <div class="left">
				<a class="logo" href="index"><img src="images/lunde-by.svg" alt="Lunde By" /></a>
			  </div>
			  <div class="right">
				<ul id="nav">
				  <li><a class="tab" href="#">Events & projekter</a></li>
				  <li><a class="tab" href="#">Om byen</a></li>
				  <li><a class="tab" href="#">Kontakt</a></li>
				  <li><a class="btn" href="#">Find bolig</a></li>
				  <li><a class="dropdown" onClick="toggleDrop();">
					<div class="line-1"></div> <div class="line-2"></div> <div class="line-3"></div> 
				  </a></li>
				</ul>
			  </div>
			</div>
		  </nav>
		</div>
		
		<div class="grid-xs-12"> 
<pre><code>&lt;nav>
  &lt;div class="container-full">
	&lt;div class="left">
	  &lt;a class="logo" href="index">&lt;img src="images/lunde-by.svg" alt="Lunde By" />&lt;/a>
	&lt;/div>
	&lt;div class="right">
	  &lt;ul id="nav">
		&lt;li>&lt;a class="tab" href="#">Events & projekter&lt;/a>&lt;/li>
		&lt;li>&lt;a class="tab" href="#">Om byen&lt;/a>&lt;/li>
		&lt;li>&lt;a class="tab" href="#">Kontakt&lt;/a>&lt;/li>
		&lt;li>&lt;a class="btn" href="#">Find bolig&lt;/a>&lt;/li>
		&lt;li>&lt;a class="dropdown" onClick="toggleDrop();">
		  &lt;div class="line-1">&lt;/div> &lt;div class="line-2">&lt;/div> &lt;div class="line-3">&lt;/div> 
		&lt;/a>&lt;/li>
	  &lt;/ul>
	&lt;/div>
  &lt;/div>
&lt;/nav></code></pre>
		</div>
	  
	  </div>
	</div>
  </section>
  
  <section></section>

</main>

</body>
</html>
