<!doctype html>
<html lang="da">
<head>
  <meta charset="utf-8">

  <title>Danmarks måske hyggeligste lille by Jyllands vestkyst - Lunde by</title>
  <meta name="description" content="Danmarks måske hyggeligste lille by Jyllands vestkyst - Lunde by" />
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

<header id="splash">

  <nav>
	<div class="container-full">
	  <div class="left">
		<a class="logo" href="index"><img src="images/lunde-by.svg" alt="Lunde By" /></a>
	  </div>
	  <div class="right">
		<ul id="nav">
		  <li><a class="tab" href="http://www.lundenyt.dk/" target="_blank">Events & projekter</a></li>
		  <li><a class="tab" href="om-byen">Om byen</a></li>
		  <li><a class="tab" href="kontakt">Kontakt</a></li>
		  <li><a class="btn" href="boliger">Find bolig</a></li>
		  <li><a class="dropdown" onClick="toggleElement('mobileNav');">
		    <div class="line-1"></div> <div class="line-2"></div> <div class="line-3"></div> 
		  </a></li>
		</ul>
	  </div>
	</div>
  </nav>
  
  <div class="mobile" id="mobileNav">
	<ul>
	  <li><a class="tab" href="http://www.lundenyt.dk/" target="_blank">Events & projekter</a></li>
	  <li><a class="tab" href="om-byen">Om byen</a></li>
	  <li><a class="tab" href="kontakt">Kontakt</a></li>
	  <li><a class="btn" href="boliger">Find bolig</a></li>
	</ul>
  </div>

  <div class="container">
    <div class="row">
      <div class="grid-xs-12 header-content">
		
		<div class="grid-xs-8 grid-sm-7 grid-md-5">
		  <img class="header-image" src="images/forside-billede.svg" alt="Lunde familie" />
		</div>
		
		<div class="grid-xs-12 grid-md-7">
		  <h1 class="title">Din by, din vækst</h1>
		  <p class="desc">Velkommen til Lunde, den måske hyggeligste lille by nær den Sydvestjyske kyst. Her er godt fællesskab, natur og vækst i højsædet. Med både muligheder for transport, indkøb og uddannelse, er Lunde et sikkert valg</p> 
		  <a class="button-primary" href="boliger">Tag første skridt</a>
		</div>
		
      </div>
    </div>
  </div>
  
</header>

<main>

  <section>
	<h3 class="text-center">Gå på opdagelse</h3>
	
	<div class="canvas no-select dragscroll" id="viewer">
	
	  <img class="map" src="images/mapVector.svg" alt="Lunde bykort" />
	  
      <div class="marker mad but" style="top:373px; left:1247px;" onClick="toggleElement('minkoebmand');">
		<div class="marker-info" id="minkoebmand">
		  <a class="title">MinKøbmand</a>
		  <a class="desc">Indkøbsmulighed for hver en smag til dagligdagens brug eller festen</a>
		  <a class="extra">Åben alle hverdage <br>7:30 - 19:00</a>
		</div>
	  </div>
		
	  <div class="marker mad but" style="top:670px; left:1105px;" onClick="toggleElement('lundekro');">
		<div class="marker-info" id="lundekro">
		  <a class="title">Lunde Kro</a>
		  <a class="desc">Den hyggelige lokale kro, hvor man kan spise middag eller komme til intimkoncerter med kendte navne</a>
		  <a class="extra">Tirsdag lukket.</a>
		</div>
	  </div>
		
	  <div class="marker mad spo" style="top:725px; left:1235px;" onClick="toggleElement('grillhytte');">
		<div class="marker-info" id="grillhytte">
		  <a class="title">Grill hytte</a>
		  <a class="desc">Nyopført grillhytte med tilhørende shelters, som er til fri afbenyttelse for borgerne</a>
		  <a class="extra">Ved fester kan Grillhytten reserveres</a>
        </div>
      </div>
		
      <div class="marker tra" style="top:675px; left:1080px;" onClick="toggleElement('togstation');">
		<div class="marker-info" id="togstation">
		  <a class="title">Togstation (Vestbanen)</a>
		  <a class="desc">Afgang fra Lunde med Vestbanen en gang i timen</a>
		  <a class="extra">30 minutters transporttid til Esbjerg</a>
		</div>
	  </div>
		
	  <div class="marker tra" style="top:305px; left:1315px;" onClick="toggleElement('lundetaxi');">
		<div class="marker-info" id="lundetaxi">
		  <a class="title">Lunde Taxi og Turistfart</a>
		  <a class="desc">Den lokale taxiservice kan altid transportere dig til hver en lejlighed</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 20 13</a>
		</div>
	  </div>
		
	  <div class="marker tra" style="top:372px; left:1264px;" onClick="toggleElement('goontankstation');">
		<div class="marker-info" id="goontankstation">
		  <a class="title">Go’on Tankstation</a>
		  <a class="desc">Få tanket bilen op ved siden af det smukke nye parkeringspladsprojekt</a>
		  <a class="extra">Åben 24 timer</a>
        </div>
      </div>
		
      <div class="marker tra" style="top:470px; left:1180px;" onClick="toggleElement('lundeautovaerksted');">
		<div class="marker-info" id="lundeautovaerksted">
		  <a class="title">Lunde Autoværksted</a>
		  <a class="desc">Medlem af kæden Autopartner, der kan klare alle former for reparationer</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 20 90</a>
		</div>
	  </div>
		
	  <div class="marker tra vir" style="top:260px; left:1264px;" onClick="toggleElement('lundemaskincenter');">
		<div class="marker-info" id="lundemaskincenter">
		  <a class="title">Lunde Maskincenter</a>
		  <a class="desc">Smedeforretning med 12 ansatte, der har eksisteret i over 100 år og kan klare alt inde for maskiner</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 20 23</a>
		</div>
	  </div>
		
	  <div class="marker tra vir" style="top:380px; left:1150px;" onClick="toggleElement('lundeentrogmaskinstation');">
		<div class="marker-info" id="lundeentrogmaskinstation">
		  <a class="title">Lunde Entr. og Maskinstation</a>
		  <a class="desc">Alt inde for landbrugs-,entreprenør-, og kloakarbejde samt vognmandskørsel</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 20 70</a>
        </div>
      </div>
		
      <div class="marker ins" style="top:350px; left:1250px;" onClick="toggleElement('lundeskole');">
		<div class="marker-info" id="lundeskole">
		  <a class="title">Lunde Skole</a>
		  <a class="desc">Den lokale skole med mange arrangementer, og et sted hvor man kender eleverne og lærerne</a>
		  <a class="extra">Dagtilbud (0 - 6 år) og klasser fra 0. - 6. årgang.</a>
		</div>
	  </div>
		
	  <div class="marker ins" style="top:640px; left:1223px;" onClick="toggleElement('boernehave');">
		<div class="marker-info" id="boernehave">
		  <a class="title">Børnehave</a>
		  <a class="desc">Et trygt læringsmiljø for de mindste på en stor grund til leg og motoriske udfoldelse</a>
		  <a class="extra">Plads til 40 børnhavebørn og fire 0-2 års børn.</a>
		</div>
	  </div>
		
	  <div class="marker ins ple" style="top:530px; left:1150px;" onClick="toggleElement('plejehjem');">
		<div class="marker-info" id="plejehjem">
		  <a class="title">Plejehjem</a>
		  <a class="desc">Aktivitetscentret Bavnbo - et trygt og roligt plejehjem med en historisk betydning for byen</a>
		  <a class="extra">Brugerråd, der afholder banko, sang og underhodning</a>
        </div>
      </div>
		
      <div class="marker ins ple" style="top:547px; left:1145px;" onClick="toggleElement('hjemmehjaelp');">
		<div class="marker-info" id="hjemmehjaelp">
		  <a class="title">Hjemmehjælp</a>
		  <a class="desc">Få den høje kvalitet af pleje fra Lunde plejehjem i dit eget hus</a>
		  <a class="extra">En del af Varde Kommune</a>
		</div>
	  </div>
		
	  <div class="marker ins vir" style="top:394px; left:1242px;" onClick="toggleElement('sparekassen');">
		<div class="marker-info" id="sparekassen">
		  <a class="title">Sparekassen</a>
		  <a class="desc">Få personlig kontakt med din bankrådgiver hos Sparnebel. Her sættes der ansigt på kunderne</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 84 00</a>
		</div>
	  </div>
		
	  <div class="marker ins" style="top:403px; left:1195px;" onClick="toggleElement('lundekirke');">
		<div class="marker-info" id="lundekirke">
		  <a class="title">Lunde Kirke</a>
		  <a class="desc">Oprindeligt navngivet Sct. Stefans Kirke er en flot udsmukket kirke med lokal sognepræst og kirkekontor</a>
		  <a class="extra">Kontoret er normalvis åbent tirsdag fra <br>kl. 9-13</a>
        </div>
      </div>
		
      <div class="marker but" style="top:730px; left:1133px;" onClick="toggleElement('skhair');">
		<div class="marker-info" id="skhair">
		  <a class="title">SK Hair Design Frisør</a>
		  <a class="desc">Behagelig og personlig frisør, der har kunderne i fokus og holder sig opdateret på de nyeste trends</a>
		  <a class="extra">Åben mandag til lørdag</a>
		</div>
	  </div>
		
	  <div class="marker but" style="top:760px; left:1104px;" onClick="toggleElement('kirkenskorshaer');">
		<div class="marker-info" id="kirkenskorshaer">
		  <a class="title">Kirkens Korshær</a>
		  <a class="desc">Den lokale genbrugsbutik, som hjælper alle der har behov for det</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 91 19</a>
		</div>
	  </div>
		
	  <div class="marker spo" style="top:625px; left:1160px;" onClick="toggleElement('lundestadion');">
		<div class="marker-info" id="lundestadion">
		  <a class="title">Lunde Stadion</a>
		  <a class="desc">Stadion med flere baner og mulighed for mange forskellige sportstyper</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 23 64</a>
        </div>
      </div>
		
      <div class="marker spo" style="top:608px; left:1153px;" onClick="toggleElement('lundeboldklub');">
		<div class="marker-info" id="lundeboldklub">
		  <a class="title">Lunde Boldklub</a>
		  <a class="desc">Boldklibben har to hold i turnering i seniorafdelingen, i ungdomsrækkerne samarbejders der med øvrige klubber i mange rækker</a>
		  <a class="extra">Klubben holder i sommerperioden aktiviteter på stadion</a>
		</div>
	  </div>
		
	  <div class="marker spo" style="top:625px; left:1143px;" onClick="toggleElement('legeplads');">
		<div class="marker-info" id="legeplads">
		  <a class="title">Legeplads/Multibane</a>
		  <a class="desc">Ved Lunde Stadion er der en stor legeplads og multibane, som altid i gåafstand for de legeglade</a>
		  <a class="extra">Tilgængelig hele døgnet rundt</a>
		</div>
	  </div>
		
	  <div class="marker spo" style="top:750px; left:1223px;" onClick="toggleElement('kaelkebakke');">
		<div class="marker-info" id="kaelkebakke">
		  <a class="title">Kælkebakke</a>
		  <a class="desc">Opført af frivillige i sikre naturlige omgivelser og beliggende i roligt familieområde</a>
		  <a class="extra">Altid klar til snevejret</a>
        </div>
      </div>
		
      <div class="marker spo vir" style="top:411px; left:1230px;" onClick="toggleElement('lundeforsamlingshus');">
		<div class="marker-info" id="lundeforsamlingshus">
		  <a class="title">Lunde Forsamlingshus</a>
		  <a class="desc">Med ca. 100 medlemmer og en bestyrelse på 5 personer står forsamligshuset klar til din næste fest</a>
		  <a class="extra">Alle er velkomne til at leje Lunde forsamlingshus</a>
		</div>
	  </div>
		
	  <div class="marker vir" style="top:355px; left:1290px;" onClick="toggleElement('danishagro');">
		<div class="marker-info" id="danishagro">
		  <a class="title">Danish Agro</a>
		  <a class="desc">Regionalt salgskontor med driftsaktiviteter under samme tag</a>
		  <a class="extra">Afdelingen modtager afgrøder i høsten</a>
		</div>
	  </div>
		
	  <div class="marker vir" style="top:805px; left:1133px;" onClick="toggleElement('annebergslimtrae');">
		<div class="marker-info" id="annebergslimtrae">
		  <a class="title">Annebergs Limtræ</a>
		  <a class="desc">Kendt for den høje kvalitet af limtræ, bjælker, søjler og meget andet, hvor leveringssikkerheden er i højsædet</a>
		  <a class="extra">Danmarks hurtigste limtræs-leverandør</a>
        </div>
      </div>
		
      <div class="marker vir" style="top:726px; left:1094px;" onClick="toggleElement('lundevvs');">
		<div class="marker-info" id="lundevvs">
		  <a class="title">Lunde VVS</a>
		  <a class="desc">Den lokale vvs installatør rykker ud og hjælper med alle de problemer der kunne opstå</a>
		  <a class="extra">Kan kontaktes på telefon 75 28 20 07</a>
		</div>
      </div>
      
	</div>
	
	<div class="checkbox-contain" id="checkboxes">
	  <a class="drop-button" onClick="toggleElement('mapDrop')">Vælg visning<img src="images/dropdown_arrow.png" alt="arrow" /></a>
	  <div class="drop-content" id="mapDrop">
		
		<div class="check">
		  <input class="mapCheck" type="checkbox" value="mad" id="CBmad" checked />
		  <label for="CBmad">Mad og drikke</label>
		</div>
		
		<div class="check">
		  <input class="mapCheck" type="checkbox" value="tra" id="CBtra" checked />
		  <label for="CBtra">Transport</label>
		</div>
		
		<div class="check">
		  <input class="mapCheck" type="checkbox" value="ins" id="CBins" checked />
		  <label for="CBins">Institution</label>
		</div>
		
		<div class="check">
		  <input class="mapCheck" type="checkbox" value="but" id="CBbut" checked />
		  <label for="CBbut">Butikker</label>
		</div>
		
		<div class="check">
		  <input class="mapCheck" type="checkbox" value="ple" id="CBple" checked />
		  <label for="CBple">Pleje og sundhed</label>
		</div>
		
		<div class="check">
		  <input class="mapCheck" type="checkbox" value="spo" id="CBspo" checked />
		  <label for="CBspo">Sport og fritid</label>
		</div>
		
		<div class="check">
		  <input class="mapCheck" type="checkbox" value="vir" id="CBvir" checked />
		  <label for="CBvir">Virksomheder</label>
		</div>
		
	  </div>
	</div>
   
</section>
 
<script>
var arr = ['mad', 'tra', 'ins', 'but', 'ple', 'spo', 'vir'];

document.addEventListener('change', function(event) {
  if (event.target.classList.contains( 'mapCheck' ) ) {
    
    var checkedArr = [];
    for(let i=0, n=arr.length; i < n; i++) {

      if(document.getElementById("CB"+arr[i]).checked) {
        checkedArr.push(arr[i]);
      }
    }

    if(event.target.checked){
      // Checkbox is checked
	  for (x of document.querySelectorAll('.marker.' + event.target.value)) { 
		x.style.display = "inline-block";
	  }
    } else {
      // Checkbox is not checked
	  for (x of document.querySelectorAll('.marker.' + event.target.value)) { 
        let status=0;
        for(let i=0, n=checkedArr.length; i < n; i++) {
          if(x.classList.contains(checkedArr[i])) {
            status++;
          }
        }
        if(status == 0) {
          x.style.display = "none";
        }
	  }
    }
  }
});
</script> 
  
  <section>
	<h3 class="text-center reveal">Masser at byde på</h3>
	<div class="container">
	  <div class="row">
          
        <div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/dagligvarebutik.webp" alt="MinKøbmand">
            <div class="imageText-header"><p>MinKøbmand</p></div>
            <div class="imageText"><p>Den lokale købmand, hvor de daglige indkøb kan klares.</p></div>
        </div>
		
		<div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/lunde-skole.webp" alt="Lunde skole">
            <div class="imageText-header"><p>Blåbjergskolen</p></div>
            <div class="imageText"><p>Lundes flotte skole med dygtigt personale og trivsel i højsædet.</p></div> 
        </div>
          
        <div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/lunde-kindergarden.webp" alt="Lunde Børnhave">
             <div class="imageText-header"><p>Lunde Børnehave</p></div>
            <div class="imageText"><p>Pæn børnehave med søde pædagoger og en legeplads med plads til alle.</p></div>
        </div>
          
        <div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/lunde-station.webp" alt="Togstation (Vestbanen)">
            <div class="imageText-header"><p>Togstation (Vestbanen)</p></div>
            <div class="imageText"><p>Når du kører med Vestbanen er der aldrig langt til andre byer. </p></div>
        </div>
          
        <div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/lunde-kro.webp" alt="Lunde Kro">
            <div class="imageText-header"><p>Lunde Kro</p></div>
            <div class="imageText"><p>Den lokale kro står altid klar med lidt godt til ganen.</p></div>
        </div>
          
        <div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/lunde-stadion.webp" alt="Stadion">
            <div class="imageText-header"><p>Stadion</p></div>
            <div class="imageText"><p>Midt i byen ligger stadion, hvor der er plads til sport, leg og aktiviteter der ud over.</p></div> 
        </div>
          
        <div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/lunde-boldklub.webp" alt="Lunde Boldklub">
              <div class="imageText-header"><p>Lunde Boldklub</p></div>
            <div class="imageText"><p>En hyggelig boldklub med engagerede deltagere og adgang til stadion.</p></div>
        </div>

        <div class="grid-xs-6 grid-md-4 grid-lg-3 reveal">
            <img class="card-image" src="images/grillhytte.webp" alt="Grillhytte" >
            <div class="imageText-header"><p>Grillhytte</p></div>
            <div class="imageText"><p>Et af Lundes nye tiltag: en fælles grillhytte som frit kan benyttes.</p></div> 
        </div>
		
		<div class="grid-xs-12 text-center">
		  <a class="button-primary-dark text-center" href="faciliteter">Se alle</a>
		</div>
	  
	  </div>
	</div>
  </section>

</main>

<footer>

  <div class="container">

	<div class="row menu">
	
	  <div class="grid-xs-12 grid-sm-5 grid-md-4">
		<svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 361.51 264.05"><path class="cls-1" d="M341.13,264.05H15.42A4.51,4.51,0,0,1,11,258.5L37.51,147.72a4.49,4.49,0,0,1,4.38-3.45H181.15a4.5,4.5,0,0,1,0,9H45.44L21.12,255.05H335.43L311.12,153.27h-8.06a4.5,4.5,0,0,1,0-9h11.61a4.5,4.5,0,0,1,4.38,3.45L345.51,258.5a4.49,4.49,0,0,1-4.38,5.55Z"/><path class="cls-1" d="M212,214.15a4.5,4.5,0,0,1-1.26-8.82c8.67-2.54,17.44-5.53,26.05-8.89a4.5,4.5,0,1,1,3.27,8.38c-8.85,3.46-17.87,6.54-26.79,9.15A4.64,4.64,0,0,1,212,214.15Z"/><path class="cls-1" d="M164,224a4.5,4.5,0,0,1-.53-9c8.87-1.06,17.86-2.57,26.71-4.49a4.5,4.5,0,0,1,1.91,8.8c-9.13,2-18.4,3.54-27.56,4.63Z"/><path class="cls-1" d="M130.91,226q-4.89,0-9.72-.17a4.5,4.5,0,0,1,.31-9c8.43.3,17,.19,25.47-.3a4.5,4.5,0,1,1,.52,9C142,225.82,136.43,226,130.91,226Z"/><path class="cls-1" d="M104,224.66l-.44,0c-8.45-.83-16.94-2.06-25.24-3.66a4.5,4.5,0,1,1,1.7-8.84c8,1.55,16.25,2.74,24.42,3.55a4.5,4.5,0,0,1-.44,9Z"/><path class="cls-1" d="M62.54,217.29a4.45,4.45,0,0,1-1.14-.14c-6.94-1.81-13.85-3.9-20.53-6.22a4.5,4.5,0,1,1,3-8.5c6.45,2.24,13.12,4.26,19.83,6a4.5,4.5,0,0,1-1.12,8.85Z"/><path class="cls-1" d="M26.62,205.1a4.63,4.63,0,0,1-1.77-.36c-14.46-6.19-22.46-11.33-22.79-11.55a4.49,4.49,0,1,1,4.88-7.55h0a162.57,162.57,0,0,0,21.45,10.82,4.5,4.5,0,0,1-1.77,8.64Z"/><path class="cls-3" d="M345,18.25C334.21,6.54,320,.14,304.82.14S275.39,6.59,264.66,18.3l-5.61,6.11-5.7-6.21C242.62,6.49,228.31,0,213.14,0s-29.38,6.45-40.08,18.11a64.16,64.16,0,0,0-16.6,43.8,64.37,64.37,0,0,0,16.69,43.75l81.64,89a5.68,5.68,0,0,0,4.13,1.9,5.63,5.63,0,0,0,4.13-1.85l81.81-88.88a64.46,64.46,0,0,0,16.65-43.8A64.19,64.19,0,0,0,345,18.25ZM336.6,96.8l-77.68,84.37L181.41,96.65a51.11,51.11,0,0,1-13.22-34.74,50.88,50.88,0,0,1,13.17-34.7,42.44,42.44,0,0,1,63.69.05L254.88,38a5.52,5.52,0,0,0,8.3,0l9.74-10.62a42.43,42.43,0,0,1,63.68-.05,51.09,51.09,0,0,1,13.17,34.75A50.86,50.86,0,0,1,336.6,96.8Z"/><path class="cls-1" d="M307.76,81.7a23.41,23.41,0,1,1,7.41-45.62,4.5,4.5,0,0,1-2.85,8.54,14.41,14.41,0,1,0,9.85,13.67,14.54,14.54,0,0,0-.73-4.55A4.5,4.5,0,0,1,330,50.89,23.44,23.44,0,0,1,307.76,81.7Z"/></svg>
	  </div>
	
	  <div class="grid-xs-12 grid-sm-7 grid-md-8">
		<div class="row">
	
		  <div class="grid-xs-6 grid-md-4">
			<div class="item">
			  <a class="title">Navigation</a>
			  <a class="link" href="http://www.lundenyt.dk/" target="_blank">Events</a>
			  <a class="link" href="http://www.lundenyt.dk/" target="_blank">Projekter</a>
			</div>
		  </div>
		
		  <div class="grid-xs-6 grid-md-4">
			<div class="item">
			  <a class="title">Udforsk</a>
			  <a class="link" href="boliger">Boliger til salg</a>
			  <a class="link" href="kontakt">Kontakt</a>
			</div>
		  </div>
	  
		  <div class="grid-xs-6 grid-md-4">
			<div class="item">
			  <a class="title">Andre medier</a>
			  <a class="link" href="https://www.facebook.com/Lunde.Varde/" target="_blank">Facebook</a>
			  <a class="link" href="http://www.lundenyt.dk/">Lunde Nyt</a>
			</div>
		  </div>
	  
		</div>
	  </div>
	
	</div>
  
	<div class="row copyright">
	  <div class="grid-xs-12">
		<div class="item"><a>Copyright © <?php echo date('Y'); ?> Lunde By. Alle rettigheder reserveret.</a></div>
	  </div>
	</div>
  
  </div>

</footer>

<script>
function toggleElement(id) {
  let x = document.getElementById(id);
  x.style.display = x.style.display === 'inline-block' ? 'none' : 'inline-block';
}
</script>

<script src="js/dragscroll.js"></script>
<script>
document.getElementById("viewer").scrollTop = 120;
document.getElementById("viewer").scrollLeft = 340;
</script>
    
<script>
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document. documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document. documentElement.clientWidth)
  );
}

function updateInView() {
  for (x of document.querySelectorAll('.reveal')) {
    if(isElementInViewport(x)) { x.classList.add('inview') }
  }
}

document.body.onscroll = updateInView;
updateInView();
</script>

</body>
</html>
