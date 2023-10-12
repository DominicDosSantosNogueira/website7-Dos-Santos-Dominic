<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
            padding: 10px;
            text-align: :center;
        }
        .smallcoloredbox{
            width: 20px;
            height: 20px;
            display: inline-block;
            background-color: yellowgreen;
        }
    </style>
</head>

<body>
    <h1> Products of my shop
        <?php
        $arr = ['Ultra Instinct', 'Full Power', 'Super sayan 1', 'Super Sayian 4', 'Ozaru', 'Beast', 'Igor', 'Ryan'];
        $n = count($arr);
        print $n;
        ?>

    </h1>

    <h2> The transformations are: 

    </h2>
    <table>
        <tr>
            <th>Index</th>
            <th>Items</th>
        </tr>
        <?php
        for ($i = 0; $i < $n; $i++) {
            print("<tr> <td>" . $i . "</td> <td>" . $arr[$i] . "</td></tr>");
        }
        
        ?>
    </table>

    <table>
        
    </table>
</body>
</html>