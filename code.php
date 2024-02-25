<html>
<head>
    <title>Numerology Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image:url("a.jpg");
        }

        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            opacity: 0.6;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="date"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Numerology Calculator</h2>
        <form method="post" action="">
            <label for="dob">Enter your Date of Birth:</label>
            <input type="date" id="dob" name="dob">
            <input type="submit" value="Calculate">
        </form>

        <?php
        if($_POST){
            $p = $_POST["dob"];
            $x = "$p";
            $x = str_replace("-", "", $x);
            $tot = 0;
            $tot1 = 0;
            
            while ($x > 0) {
                $s = $x % 10;
                $tot = $tot + $s;
                $x = ($x / 10);
            }
            
            if ($tot > 9) {  
                while ($tot >0) {
                    $r = $tot % 10;
                    $tot1 = $tot1 + $r;
                    $tot = ($tot / 10);
                } 
                $oute = $tot1;
            } else {
                echo $tot;
                $oute = $tot;
            }
            switch ($oute) {
                case 1:
                    echo "Your numerology number is 1: SUN – King, Leadership Qualities, Egoistic ";
                    break;
                case 2:
                    echo "Your numerology number is 2: MOON – Queen, Emotions ";
                    break;
                case 3:
                    echo "Your numerology number is 3:JUPITER – Guru, Minister, Counselor, Creative, Hungry of Knowledge ";
                    break;
                case 4:
                    echo "Your numerology number is 4:RAHU – Mischievous, Shadow of Sun, and Planner";
                    break;
                case 5:
                    echo "Your numerology number is 5:MERCURY – Prince, Accountant, Mental & Emotional Balance ";
                    break;
                case 6:
                    echo "Your numerology number is 6:VENUS – Guru, Bad Minister, Strategy expert, Dancer, Luxury ";
                    break;
                case 7:
                    echo "Your numerology number is 7:VENUS – Guru, Bad Minister, Strategy expert, Dancer, Luxury ";
                    break;
                case 8:
                    echo "Your numerology number is 8: SATURN – Judge, Servant, Struggle, Money Manager ";
                    break;
                case 9:
                    echo "Your numerology number is 9: MARS – Commander, Humanity, Anger, Honorable old life ";
                    break;
                default:
                    echo "";
            }
        }
        else {
            echo "";
        }
        ?>
        <?php 
        if(!empty($oute))
            echo $oute;    
        ?>   
    </div>   
</body>
</html>
