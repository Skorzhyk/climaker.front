<?php

function request($url, $params = []) {
    $myCurl = curl_init();
    curl_setopt_array($myCurl, array(
        CURLOPT_URL => 'http://climaker.dev/' . $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => 'data=' . json_encode($params)
    ));
    $response = curl_exec($myCurl);
    curl_close($myCurl);

    if (isJSON($response)) {
        $response = json_decode($response, true);
    }

    return $response;
}

function isJSON($string) {
    return ((is_string($string) && (is_object(json_decode($string)) || is_array(json_decode($string))))) ? true : false;
}
