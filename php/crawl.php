<?php
  
  date_default_timezone_set('Europe/Berlin');
  $msc = microtime(true);
  
  function EDC_crawl() {

	$c = curl_init('https://www.edc.dk/sog/?stednavn=lunde&postnr=6830');
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	$html = curl_exec($c);
	if (curl_error($c)) { return FALSE; }
	curl_close($c);
	
	// Cut and clean HTML
	$html = strstr($html, 'role="main"');
	$html = strstr($html, '<ul class="pagination">', true);
	
	// Debugging - display raw HTML
	//return htmlspecialchars($html);
	  
	$searches = array(
	  'num' => '<li class="resultsnav__amount">(.*) ejendomme',
	  'img' => '<meta itemprop="contentUrl" content="(.*)"', 
	  'address' => 'class="propertyitem__link" title="(.*), 6830 Nørre Nebel"', 
	  'promoted-price' => '>Pris (.*) kr.',
	  'normal-price' => '<strong>Pris: (.*)<', 
	  'url' => '<a itemprop="url" href="(.*)" class' 
	);

	$matches = [];
	foreach($searches as $name => $pattern)
	{
	  $r = preg_match_all("~{$pattern}~", $html, $matches[$name]);
	  $matches[$name] = $matches[$name][1];
	}
	
	// Combine prices
	$matches['price'] = array_merge($matches['promoted-price'], $matches['normal-price']);
	
	// Complete links to internal listings
	foreach($matches['url'] as $key=>$url) {
	  if(substr($url, 0, 4) !== "http") {
		$matches['url'][$key] = "http://edc.dk" . $url;
	  }
	}
	
	// Complete links to images
	foreach($matches['img'] as $key=>$img) {
	  if(substr($img, 0, 4) !== "http") {
		$matches['img'][$key] = "http:" . $img;
	  }
	}
	
	return($matches);

  }
  
  $crawl = EDC_crawl();
  if(!$crawl) { die("error"); }
  
  $results = [];
  foreach(array_unique($crawl['address']) as $key=>$address) {
	$temp = array(
	  "img"     => $crawl['img'][$key],
	  "address" => $address,
	  "price"   => $crawl['price'][$key], 
	  "url"     => $crawl['url'][$key]
	);
	array_push($results, $temp);
  }
  
  $timecount = microtime(true)-$msc;
  
  $output = array(
    "num"     => count($results),
    "time"    => round($timecount, 5),
	"results" => $results
  );
  
  $json = json_encode($output, JSON_PRETTY_PRINT);
  
  header('Content-Type: application/json');
  echo $json;

?>





