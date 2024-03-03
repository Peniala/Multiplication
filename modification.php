<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modification.css">
    <title>Change Value </title>
    <?php
        $a = $_GET["nb1"];
        $b = $_GET["nb2"];
        $mod = $_GET["lmodif"];
        $mid = $_GET["mid"];
        $oldA = $_GET["a"];
        $oldB = $_GET["b"];
        $supp = $_GET["del"];
    ?>
</head>
<body>
    <section>
        <h1>Change values</h1>
        <form action="index.php" method="get">
            <input type="number" name="nb1" value="<?php echo $a;?>" hidden>
            <input type="number" name="nb2" value="<?php echo $b;?>" hidden>
            <input type="text" name="lmodif" value="<?php echo $mod;?>" hidden>
            <input type="text" name="del" value="<?php echo $supp;?>" hidden>
            <input type="text" name="mid" value="<?php echo $mid;?>" hidden>
            <fieldset>
                <legend>A : <?php echo $oldA;?> into </legend>
                <input type="number" name="newA" value="<?php echo $oldA;?>" placeholder="A" required>
            </fieldset>
            <fieldset>
                <legend>B : <?php echo $oldB;?> into </legend>
                <input type="number" name="newB" value="<?php echo $oldB;?>" placeholder="B" required>
            </fieldset>
            <div></div>
            <input type="submit" value="Change">
        </form>
    </section>
</body>
</html>