<?php

$url ="http://localhost:4000/getAllCampaignList";

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$set_data=curl_exec($ch);
if($e = curl_error($ch)){
    echo $e;
    
}
else{
    // $decode =json_decode($set_data);
    // print_r($decode);
    // echo $set_data;
}

?>

