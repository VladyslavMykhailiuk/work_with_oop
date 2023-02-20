<?php

require_once ('../vendor/autoload.php');




$WeeksReport = new \classes\WeeksReport(new \classes\Organization('Some Firma','12315421421','321321321','Volkova str,22','Marcipan Ivan Ivanovich'),'123','Nature','Mishka Volodymyr Ivanovich','Some text','16.01.2023',0,'12.12.2012');


echo $WeeksReport->getOrgInfo();




























//$array = [1,8,7,4,25,3];
//
//
//function map($callback,$array)
//{
//    foreach ($array as $key => $item ) {
//        $array[$key] = $callback($item,$key);
//    }
//    return $array;
//}
//
//print_r(map(function ($item,$key){
//    return "$key". "-". "$item";
//},$array));











