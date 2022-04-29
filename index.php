<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lab_2</title>
</head>
<body>
    <h1>Laboratory work 2</h1>
    <h2>IA-301k Shvydenko Dmytro</h2>
    <!-- 1 -->
    <h3>1. Working with the form</h3>
    <div>
        <form method="POST">
            <p> int_1: <input type="text" name="int_0" value="0"/></p>
            <p> int_2: <input type="text" name="int_1" value="1"/></p>
            <p> int_3: <input type="text" name="int_2" value="2"/></p>
            <p> int_4: <input type="text" name="int_3" value="3"/></p>
            <p> int_5: <input type="text" name="int_4" value="4"/></p>
            <p> int_6: <input type="text" name="int_5" value="5"/></p>
            <p> int_7: <input type="text" name="int_6" value="6"/></p>
            <input type="submit" value="Push">
        </form>
    </div>
    <?php
    if(isset($_POST["int_0"]))
    {
        $intArr[0] = intval($_POST["int_0"]);
        $intArr[1] = intval($_POST["int_1"]);
        $intArr[2] = intval($_POST["int_2"]);
        $intArr[3] = intval($_POST["int_3"]);
        $intArr[4] = intval($_POST["int_4"]);
        $intArr[5] = intval($_POST["int_5"]);
        $intArr[6] = intval($_POST["int_6"]);
        $maxInt=$intArr[0]; $minInt=$intArr[0]; $sumInt=0;
        #max Value
        for($x=1; $x < count($intArr); $x++)
        {
            if($maxInt<$intArr[$x])
            $maxInt=$intArr[$x];
        }
        #min Value
        for($x=1; $x < count($intArr); $x++)
        {
            if($minInt>$intArr[$x])
            $minInt=$intArr[$x];
        }
        #sum Value
        for($x=0; $x < count($intArr); $x++)
        {
            $sumInt=$sumInt+$intArr[$x];
        }
        $summaInt = $sumInt / count($intArr);
        #output
        echo "<br>\n", "Max int: ", $maxInt;
        echo "<br>\n","Min int: ", $minInt;
        echo "<br>\n","The average int: ", $summaInt, "<br>\n";
    }
    ?>

    <!-- 2 -->
    <h3>2. Information about products in the cart</h3>
    <?php
    $Products = array(
    array ('name' => 'Notebook', 'price' => 8000, 'quantity' => 1),
    array ('name' => 'smartphone', 'price' => 3000, 'quantity' => 3),
    array ('name' => 'sneakers', 'price' => 1500, 'quantity' => 2),
    );    
    
    function countProduct($productArr)
    {
        $quantity_product=0; $price_product=0;
        for($x=0; $x<count($productArr); $x++)
        {
            $pEPP=0; $qEP=0;
            for($i=0; $i<count($productArr[$x]); $i++)
            {
               if(key($productArr[$x]) ==='price'){
                    $pEPP=$productArr[$x]['price'];
                }
                else if(key($productArr[$x]) ==='quantity')
                {
                    $quantity_product=$quantity_product+$productArr[$x]['quantity'];
                    $qEP=$productArr[$x]['quantity'];
                }
                next($productArr[$x]);
            }
            $price_product = $price_product + $qEP * $pEPP;
        }
        echo "The total amount of purchases: ", $price_product, "<br>\n";
        echo "The total number of selected products: ", $quantity_product, "<br>\n";
        $array=array($price_product, $quantity_product);
        return $array;
    }
    #call function
    countProduct($Products);
?>

    <!-- 3 -->
    <h3>3. Multi-page test</h3>
    <form action="2.php" method = "post">
    <br><b>Who is Dmitry Shvydenko?</b><br><br>
    <input name="answer" type="radio" value="false">Programmer<br>
    <input name="answer" type="radio" value="true">Operating system automator<br>
    <input name="answer" type="radio" value="false">System Administrator<br><br>
    <input type='submit' value='next page'><br>
    </form>

</body>
</html>