<?php
session_start();
    $A = array(
        "wo-hip" =>array("b1"=>0.0507,"b2"=>-0.8417,"b3"=>0.8127,"b4"=>0.3614,"So5"=>0.999896685,"So10"=>0.999793070),
        "wo-any" =>array("b1"=>-0.841,"b2"=>-0.4022,"b3"=>-1.007,"b4"=>-0.2986,"So5"=>0.995750118,"So10"=>0.990905138),
        "men-hip" =>array("b1"=>0.8127,"b2"=>0.5691,"b3"=>0.599,"b4"=>0.8454,"So5"=>0.999998862,"So10"=>0.999997778),
        "men-any" =>array("b1"=>0.3614,"b2"=>0.2038,"b3"=>0.212,"b4"=>0.0981,"So5"=>0.999921076,"So10"=>0.999848975)
    );
    $S05 = 0.999896685;
    $s010 = 0.999793070;
    $gt = $_POST["gender"];
    $tcore =$_POST["T-score"];
    $age = $_POST["age"];
    $n = $_POST["Fra-50"];
    $m = $_POST["Fall-12"];
    $hip = $A[$gt.'-hip'];
    $any = $A[$gt.'-any'];

    $y_hip=  $hip['b1']*$age + $hip['b2']*$tcore + $hip['b3']*$n + $hip['b4']*$m;
    $y_any =  $any['b1']*$age + $any['b2']*$tcore + $any['b3']*$n + $any['b4']*$m;
    $risk5_hip =(1 - pow($hip['So5'],exp($y_hip)))*100;
    $risk10_hip =(1 - pow($hip['So10'],exp($y_hip)))*100;
    $risk5_any = (1 - pow($any['So5'],exp($y_hip)))*100;
    $risk10_any = (1 - pow($any['So10'],exp($y_hip)))*100;
    //   echo round( $risk5,1);
    $per_risk5_hip = round($risk5_hip,1);
    $per_risk10_hip = round($risk10_hip,1);
    $_SESSION["risk5_hip"] = $per_risk5_hip;
    // header('location:index.php?t1='.$per_risk5_hip.'');
    header('location:index2.php');
?>