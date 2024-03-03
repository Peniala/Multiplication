<?php
    $a = $_GET["nb1"];
    $b = $_GET["nb2"];
    $mod = $_GET["lmodif"];
    $mid = $_GET["mid"];
    $newA = $_GET["newA"];
    $newB = $_GET["newB"];
    $supp = $_GET["del"];
    $listSupp = [];
    $listMod = [[]];
    $tab = [[]];
    $s = "";

    if($newA !="" && $newB !=""){
        $mod = $mod.$mid.'.'.$newA.'.'.$newB.'m';
    }

    $m = 0; $k = 0;
    for($i=0; $i <strlen($mod); $i++){
        if($mod[$i] == 'm'){
            $m++; $k = 0;
        }
        else if($mod[$i] == '.'){
            $k++;
        }
        else{
            $listMod[$m][$k] = $listMod[$m][$k].$mod[$i]; 
        }
    }

    $k = 0;
    for($i=0; $i <strlen($supp); $i++){
        if($supp[$i] == '.'){
            $k++;
        }
        else{
            $listSupp[$k] = $listSupp[$k].$supp[$i]; 
        }
    }

    for($i=0; $i <= $b; $i++){
        $verifyMod = false;
        $j = 0;
        for(; $j < count($listMod); $j++){
            if($listMod[$j][0] == $i && $mod != ""){
                $verifyMod = true;
                break;
            }
        }
        if($verifyMod == true){
            $tab[$i][0] = $listMod[$j][1];
            $tab[$i][1] = $listMod[$j][2];
            $tab[$i][2] = $listMod[$j][1] * $listMod[$j][2];
        }
        else{
            $tab[$i][0] = $a;
            $tab[$i][1] = $i;
            $tab[$i][2] = $a*$i;
        }
    }
?>