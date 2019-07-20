<?php

$begin = new DateTime( '2012-08-01' );
$end = new DateTime( '2012-08-05' );
$end = $end->modify( '+1 day' );     

$interval = new DateInterval('P1D');
$betweenDays = new DatePeriod($begin, $interval ,$end);

foreach($betweenDays as $date){
    echo $date->format("Y-m-d") . ",";
}
?>