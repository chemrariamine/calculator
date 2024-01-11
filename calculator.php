<?php

$cookie_name1="num";
$cookie_value1="";
$cookie_name2="op";
$cookie_value2="";

if(isset($_POST['num']))
{
 $num=$_POST['input'].$_POST['num'] ;
}
else{
    $num="";
}
if(isset($_POST['op']))
{
    $cookie_value1=$_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

    $cookie_value2=$_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
    $num="";
}
if(isset($_POST['equal']))
{
    $num=$_POST['input'];
    switch($_COOKIE['op'])
    {
        case "+":
            $result=$_COOKIE['num']+$num;
            break;
            case "-":
                $result=$_COOKIE['num']-$num;
                break;
                case "*":
                    $result=$_COOKIE['num']*$num;
                    break;
                    case "/":
                        $result=$_COOKIE['num']/$num;
                        break;
    }
    $num=$result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{
            background-color:rgb(206, 201, 201) ;
        }
        .maininput{
            font-size: 80px;
            color: whitesmoke;
            font-weight: 500;
        }
        .calc{
            margin: auto;
            background-color: black;
            border: 2px solid whitesmoke;
            width: 21%;
            height: 600px;
            border-radius: 20px;
            box-shadow: 10px 10px 40px ;
        }
        .maininput{
            background-color: black ;
            border: 1px solid grey;
            height: 115px;
            width: 98.2%;
        }
        .numbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: gray;
        }
        .numbtn:hover{
            background-color: rgb(162, 160, 160);
            color:whitesmoke ;
        }
        .calbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: orange ;
        }
        .calbtn:hover{
            background-color: rgb(220, 173, 134);
            color:whitesmoke ;
        }
        .c{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: rgb(235, 153, 80);
        }
        .c:hover{
            background-color: rgb(238, 196, 162);
            color:whitesmoke ;
        }
        .equal{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: x-large;
            background-color: rgb(36, 141, 18) ;
        }
        .equal:hover{
            background-color: rgb(165, 215, 156);
            color:whitesmoke ;
        }
    </style>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num  ?>"><br> <br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"><br><br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-"><br><br>
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="calbtn" name="op" value="*"><br><br>
            <input type="submit" class="c" name="num" value="C">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="/">

        </form>
    </div>


</body>
</html>