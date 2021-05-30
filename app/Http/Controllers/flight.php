<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BravoBooking;

class flight extends Controller
{

    public function index()
    {
        return view('flight');
    }

      public function getfrom($data)
    {
        $data=BravoBooking::where('address','LIKE','%' . $data . '%')->get();
        return $data;
    }

    public function bookingflight(Request $request)
    {
     // dd($request->all());


    $Token = $request->_token;
    $Marker = $request->Marker;
    $Origin = $request->flightfrom; //$request->Origin;
    $Destination = $request->flightto; // $request->Destination;
    $adult = $request->adult;//$request->adult;
    $child = $request->child;//$request->child;
    $infant = $request->infant;//$request->infant;
    $departure = $request->flightDepart;//$request->departure;
    $arrival = $request->flightReturn; //$request->arrival;
    $class = $request->flightClass;//$request->class;
    $type = $request->type;
    $host = "api.triplinoo.com";
    $language ="en";
    // $ip = $this->server->get('REMOTE_ADDR');;
    // $ip = $this->_getClientIp();
    // $ip=Request::ip();
    $ip=$request->ip();
  // if($type=="R"){
  
    $d=$Token.":".$host.":".$language.":".$Marker.":".$adult.":".$child.":".$infant.":".$departure.":".$Destination.":".$Origin.":".$arrival.":".$Origin.":".$Destination.":".$class.":".$ip;
    $ds =  str_replace(': ',':',$d);
    $signature = md5($d);
    $curl = curl_init();
    $curlr = curl_init(); 
// dd($d);


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
// dd($test);
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
// dd($json);
    return $response;
    
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
    

  // }
  // elseif($type=="O"){
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
    return $responses;
  }
  
 

    // }

  public function searchflight()
  {
      return view('booking');
  }


}


