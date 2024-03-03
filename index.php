<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <title>Multiplication</title>
    <?php
        include "data.php";  
    ?>
</head>
<body>
    <nav>
        <form action="index.php" method="" >
            <input type="number" name="nb1" placeholder="A" require>
            <input type="number" name="nb2" placeholder="B" require>
            <input type="submit" value="Valid">
        </form>
    </nav>
    <section>
        <table>
            <thead>
                <tr>
                    <th colspan="4">Number A x Number B</th>
                    <th colspan="3">Result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($a != ""){
                    $c = 0;
                    for($i=0; $i <= $b; $i++){
                        $verifySupp = "";
                        for($j=0; $j < count($listSupp); $j++){
                            if($listSupp[$j] == $i){
                                $verifySupp = true;
                                break;
                            }
                        }
                        if($verifySupp != true){
                            ($c%2 == 0) ? $color = "purple":$color = "blue";
                ?>
                    <tr class="<?php echo $color; ?>">
                        <td>
                            <a href="modification.php?nb1=<?php echo $a;?>&nb2=<?php echo $b;?>&lmodif=<?php echo $mod; ?>&mid=<?php echo $i; ?>&a=<?php echo $tab[$i][0];?>&b=<?php echo $tab[$i][1];?>&del=<?php echo $supp; ?>">
                                <abbr title="Modify"><button><i class="fa-solid fa-pen-to-square"></i></button></abbr>
                            </a>
                        </td>
                        <td><?php echo $tab[$i][0];?></td>
                        <td>x</td>
                        <td><?php echo $tab[$i][1];?></td>
                        <td>=</td>
                        <td><?php echo $tab[$i][2];?></td>
                        <td>
                            <a href="index.php?nb1=<?php echo $a;?>&nb2=<?php echo $b;?>&lmodif=<?php echo $mod; ?>&del=<?php if($supp != ""){ echo $supp.'.'.$i; } else { echo $supp.$i;} ?>">
                            <abbr title="Suppress"><button><i class="fa-solid fa-delete-left"></i></button></abbr>
                            </a>
                        </td>                
                    </tr>
                <?php 
                        $c++;
                    }
                }
            }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>