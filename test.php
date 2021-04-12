<?php
session_start();
    $A = array(
        "wo-hip-bmd" =>array("b1"=>0.0507,"b2"=>-0.8417,"b3"=>0.8127,"b4"=>0.3614,"So5"=>0.999896685,"So10"=>0.999793070),
        "wo-any-bmd" =>array("b1"=>0.0321,"b2"=>-0.4022,"b3"=>0.5691,"b4"=>0.2038,"So5"=>0.995750118,"So10"=>0.990905138),
        "men-hip-bmd" =>array("b1"=>0.107,"b2"=>-1.007,"b3"=>0.599,"b4"=>0.212,"So5"=>0.999998862,"So10"=>0.999997778),
        "men-any-bmd" =>array("b1"=>0.0883,"b2"=>-0.2986,"b3"=>0.8454,"b4"=>0.0981,"So5"=>0.999921076,"So10"=>0.999848975),
        "wo-hip-wei" =>array("b1"=>0.0866,"b2"=>-0.0444,"b3"=>1.1916,"b4"=>0.2946,"So5"=>0.999896685,"So10"=>0.999793070),
        "wo-any-wei" =>array("b1"=>0.0511,"b2"=>-0.0099,"b3"=>0.6709,"b4"=>0.1985,"So5"=>0.995750118,"So10"=>0.990905138),
        "men-hip-wei" =>array("b1"=>0.138,"b2"=>-0.008,"b3"=>0.854,"b4"=>0.233,"So5"=>0.999998862,"So10"=>0.999997778),
        "men-any-wei" =>array("b1"=>0.09071,"b2"=>-0.00765,"b3"=>1.00818,"b4"=>0.12797,"So5"=>0.999921076,"So10"=>0.999848975)
    );
    $S05 = 0.999896685;
    $s010 = 0.999793070;
    $gt = $_POST["gender"];
    $yn = $_POST["YS-BMD"];
    $tcore =$_POST["T-score"];
    $weight = $_POST["weight"];
    $age = $_POST["age"];
    $n = $_POST["Fra-50"];
    $m = $_POST["Fall-12"];
    $hip = $A[$gt.'-hip-'.$yn];
    $any = $A[$gt.'-any-'.$yn];
    if($weight == null){
        $tsc_weight = $tcore;
    }
    else{
        $tsc_weight = $weight;
    }
    $y_hip=  $hip['b1']*$age + $hip['b2']*$tsc_weight + $hip['b3']*$n + $hip['b4']*$m;
    $y_any =  $any['b1']*$age + $any['b2']*$tsc_weight + $any['b3']*$n + $any['b4']*$m;
    $risk5_hip =(1 - pow($hip['So5'],exp($y_hip)))*100;
    $risk10_hip =(1 - pow($hip['So10'],exp($y_hip)))*100;
    $risk5_any = (1 - pow($any['So5'],exp($y_hip)))*100;
    $risk10_any = (1 - pow($any['So10'],exp($y_hip)))*100;
    //   echo round( $risk5,1);
    $per_risk5_hip = round($risk5_hip,1);
    $per_risk10_hip = round($risk10_hip,1);
    $_SESSION["risk5_hip"] = $per_risk5_hip;
    // header('location:index.php?t1='.$per_risk5_hip.'');
    // header('location:index2.php');
    echo $per_risk5_hip."<br/>";
    echo $tsc_weight."<br/>";
    echo $yn;
?>