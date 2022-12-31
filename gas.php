<?php
///////////////////////////////////////////
///////CREATED BY MAKLO GAMING////////
            /////////////
/////https://github.com/Hanik563//////
///////////////////////////////////////

/*

function sendOTP($pnum){
$url = "https://api-wco.linkaja.id/v1/wco/partner/inquiry HTTP/1.1
";
$data = '{"csrvalue":"'.$trx-id.'"}';
$milliseconds = floor(microtime(true) * 1000);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "user-agent: Dart/2.17 (dart:io)",
   "x-signature: 1663685232458:e75c544db1782228865f27a2f1fed11acaad1308587538bdf7546ac104fe4d3c",
   "accept-language: en",
   //"accept-encoding: gzip",
   "content-length: ".strlen($data),
   "host: api2.sbuxcard.com",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
return $resp;

}

function Trx-id($trx-id){
$data = '{"notrx":"'.$trx-id.'"}';

$url = "https://www.mcdelivery.co.id/id/tcash-intermediate.html";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "user-agent: Dart/2.17 (dart:io)",
   "x-signature: 1663685259200:1e4bc50096b733dab0ff47df665c4d0f571dc8eb8f2728b9846473acf160170b",
   "accept-language: en",
   //"accept-encoding: gzip",
   "content-length: ".strlen($data),
   "host: api-wco.linkaja.id",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
return $resp;

}

function register($email,$phone,$otpku,$nama1,$nama2){
$url = "https://payment.linkaja.id/checkout/payment";

$data = '{"{"data":{},"status":"00","message":"code=404, message=Inquiry success"}"}';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "user-agent: Dart/2.17 (dart:io)",
   "x-signature: 1663685319338:0b8592b21c9b6448e3fa674f206ecd9750ed77e2b91d09ad2c970a6b2c79dba7",
la   "accept-language: en",
   //"accept-encoding: gzip",
   "content-length: ".strlen($data),
   "host: api-wco.linkaja.id",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
return $resp;

}

function getName()
    {
        $r = anjinglah('https://www.random-number-generator.com/indonesia?gender=&n=1&s='.rand(111,999));
        $namenya = get_between($r,'<div class="col-sm-12 mb-3" id="','-');
$number_indo = preg_replace('/s+/', '', $namenya);
       return ucfirst($number_indo);
    }
	
	function get_between($string, $start, $end) {
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}
 method:"POST",
		            success: function(response, status, xhr) {
						// success, we can submit the form
	                    if(response.message=='success' && typeof(response.code)=='undefined'){
	                    	 console.log('success');
	                         $('#form_fb_linkaccount_modal').hide();
	                          error.empty().hide();
	                          error.parents('.form-group').removeClass('form-group-error');
	                          window.location.replace(response.redirectUrl);
	                    }else{
	                    	 $('#form_fb_linkaccount_modal').show();
	                            error.html(response.message).show();
	                            error.parents('.form-group').addClass('form-group-error');
	                    }

function anjinglah($Url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
