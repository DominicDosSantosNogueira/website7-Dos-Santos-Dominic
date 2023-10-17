<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .smallColoredBox {
            width: 20px;
            height: 20px;
            display: inline-block;
            background-color: yellowgreen;
        }
    </style>
</head>

<body>
    <h1> The number of elements in the array

    non numericaly indexed arrays  !!
    
    build an array of people names and age

    Option 1 :
    -Bad option:using two arrays:
    the ndices of these arrays are numbers that start with 0

        <?php
        $names = ["John", "Mary" , "Peter"];
        $ages = [20, 30, 40 ];
        $arr = [10, 12, 14, 16, 5, 111];
        ?>
        Option 2 -Bad- Goofd Option: using one array:

        the indics of this array are strings
        <?php
        $ppl = ["John" =>20, "Mary" => 30, "Peter" => 40, "Jane" => 50]; //Attention to the => , this is not a numerically indexed array
        $food = ["Kebab" => 1000, "Salad" => 200, "Tomato" => 100,];
        print $ppl[0] ;//does not work
        print $ppl["John"]; // this works
        // we created this "bag of items" using the => operator which are all  mixed inside the array called "Associative Array"
        // question is: how do we retrieve all the elements of this aaray?
        // answer : for each loop 
        foreach ($ppl as $name => $age){
            print "Name: " .$name . " age:" . $age . "<br>";
        }
        foreach($food as $name => $kallories){
            print "Name: " . $name . " kallories " . $kallories . "<br>";
        }
        ?>
        <div class = "Name"><?= $name?></div><div class = "kallories"><?= $kallories ?></div><br>
        <?php
        /*
        an associative array is madeof pairs of elements : the first element is alled the key and the second element is called the value
        in th eabove example: "John" is the key 20 is the value
        */
        // the sign & is called an amperstand and it is used to pass a variable by reference

        function test ($parameter){
            $parameter = 100;
        }

        foreach ($ppl as $key => ){
            $value = 3
        }

        $x = 1;
        test($x);
        print $x; // this will print 1
        // this is called a pass by variable and is most widely ussed method for passing variables to function

        // there is another way of passing variables to functions and it called pass by reference

        function test2 (&$parameter)
        {
            $parameter = 100;
        }
        $x = 1; 
        test2($x); // this will change the value of $x to 100

        $arrtest = array(1, 2, 3, 4);
        foreach ($arr as &$value){
            $value = $value * 2; 
        }

        // how to create new elements in an associative array
        // we already have this array: 
        $ppl = ["John" =>20, "Mary" => 30, "Peter" => 40, "Jane" => 50];
        // we need to ADD a new elemenst to this array ("Amgelina" => 60)
        $ppl["Angelina"] = 60;
        // that is why theh names aabove are called keys -> the property of a key is that it is unique you cant have twice the same name inb an associative array 


        $newitemarray = 100;
        array_push($arr, $newitemarray);
        $retVal = array_pop($arr);
        $n = count($arr);
        /* print $n;
         */
        ?>
    </h1>
    <h2>
        The elements of the array are:
    </h2>

    <table>
        <tr>
            <th>Index</th>
            <th>Element</th>
        </tr>
        <?php
        for ($i = 0; $i < $n; $i++) {
            ?>
            <tr>
                <td>
                    <?= $i ?>
                </td>
                <td>
                    <?php
                    for ($j = 0; $j < $arr[$i]; $j++) {

                        ?>

                        <div class="smallColoredBox"></div>
                        <?php
                    }
                    ?>
                </td>
            </tr>

            <?php
        }

        ?>


    </table>

</body>

</html>