<?php

function paramClearAndSort($url, $clearValue){
    $parseUrl =  parse_url($url);
    $query = $parseUrl['query']; 
    $params = explode('&', $query); //explode => slit for earlier versions
    
    $resultArray = array();

    foreach($params as $param){
        $paramsAndValue = explode('=', $param);

        if($paramsAndValue[1] != $clearValue){
            array_flip($paramsAndValue);
            $resultArray[$paramsAndValue[0]] = $paramsAndValue[1];
        }//end if
    }//end foreach

    asort($resultArray);

    foreach($resultArray as $param=>$value)
        $sortStringParams .= $param . '=' . $value . '&';   

    $paramsString = $sortStringParams . 'url=' .  $parseUrl['path'];
    $host = $parseUrl['scheme'] . '://' . $parseUrl['host'] . '/?';
    $result = $host . $paramsString;

    return $result;
}//end paramClearAndSort
