<?php
header("Content-Type:application/json");

if (isset($_GET['Token']) && isset($_GET['Marker']) && $_GET['Token']!="" && $_GET['Marker']!="") 
{
    
    
    
    $Token = $_GET['Token'];
    $Marker = $_GET['Marker'];
    $Origin = $_GET['Departure'];;//$_GET['Origin'];
    $Destination = $_GET['Destination'];;// $_GET['Destination'];
    $adult = $_GET['adult'];;//$_GET['adult'];
    $child = $_GET['child'];;//$_GET['child'];
    $infant = $_GET['infant'];;//$_GET['infant'];
    $departure = $_GET['departure'];;//$_GET['departure'];
    $arrival = $_GET['arrival'];; //$_GET['arrival'];
    $class = $_GET['class'];;//$_GET['class'];
    $type = $_GET['type'];
    $host = "api.triplinoo.com";
    $language ="en";
    $ip = $_SERVER['REMOTE_ADDR'];
   


  if($type=="R"){
  
    $d=$Token.":".$host.":".$language.":".$Marker.":".$adult.":".$child.":".$infant.":".$departure.":".$Destination.":".$Origin.":".$arrival.":".$Origin.":".$Destination.":".$class.":".$ip;
    $ds =  str_replace(': ',':',$d);
    $signature = md5($d);
    $curl = curl_init();
    $curlr = curl_init(); 


    $jayParsedAry = [
      "signature" => $signature, 
      "marker" => $Marker, 
      "host" =>  $host, 
      "user_ip" =>  $ip, 
      "locale" =>  $language, 
      "trip_class" => $class, 
      "passengers" => [
            "adults" => $adult, 
            "children" => $child, 
            "infants" => $infant
         ], 
      "segments" => [
              [
                  "origin" => $Origin, 
                  "destination" => $Destination, 
                  "date" =>  $departure 
              ], 
              [
                     "origin" => $Destination, 
                     "destination" => $Origin, 
                     "date" => $arrival 
                  ] 
            ] 
    ]; 

    $test = json_encode($jayParsedAry);

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://api.travelpayouts.com/v1/flight_search',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode($jayParsedAry),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    curl_close($curl);    
    $json = json_decode($response, true);
    $uuid = $json["meta"]["uuid"];
    


    curl_setopt_array($curlr, array(
      CURLOPT_URL => 'http://api.travelpayouts.com/v1/flight_search_results?uuid='.$uuid.'',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Accept-Encoding: gzip,deflate,sdch'
      ),
    ));
    
    $responses = curl_exec($curlr);
    
    curl_close($curlr);
    //echo $responses;

    echo  $responses;exit;
    

  }
  elseif($type=="O"){
    $d=$Token.":".$host.":".$language.":".$Marker.":".$adult.":".$child.":".$infant.":".$departure.":".$Destination.":".$Origin.":".$class.":".$ip;
    $ds =  str_replace(': ',':',$d);
    $signature = md5($d);
    $curl = curl_init();
    $curlr = curl_init(); 


    $jayParsedAry = [
      "signature" => $signature, 
      "marker" => $Marker, 
      "host" =>  $host, 
      "user_ip" =>  $ip, 
      "locale" =>  $language, 
      "trip_class" => $class, 
      "passengers" => [
            "adults" => $adult, 
            "children" => $child, 
            "infants" => $infant
         ], 
      "segments" => [
              [
                  "origin" => $Origin, 
                  "destination" => $Destination, 
                  "date" =>  $departure 
              ]
            ] 
    ]; 

    $test = json_encode($jayParsedAry);

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://api.travelpayouts.com/v1/flight_search',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode($jayParsedAry),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    curl_close($curl);    
    $json = json_decode($response, true);
    $uuid = $json["meta"]["uuid"];
    


    curl_setopt_array($curlr, array(
      CURLOPT_URL => 'http://api.travelpayouts.com/v1/flight_search_results?uuid='.$uuid.'',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Accept-Encoding: gzip,deflate,sdch'
      ),
    ));
    
    $responses = curl_exec($curlr);
    
    curl_close($curlr);
    //echo $responses;

    echo  $test;exit;
  }
  
 }
?>  