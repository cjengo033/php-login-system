<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
         $a = 10;
        function value(){
            $a = 5;
            echo "this is the local value of x " . $a; 
        }
        
         value();
            echo "<br> this is the global value of x " . $a;
    ?>
</body>
</html>