<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic</title>
</head>
<body>
    <?php 
        $arr = array('1','2','3','4','5','6');

        print_r ($arr);
        $a = array_shift($arr);
        echo '<br>';
        echo 'a (shitf): '.$a;
        echo '<br>';

        print_r ($arr);
        $b = array_unshift($arr, 'First');
        echo '<br>';
        echo 'b (unshift): '.$b;
        echo '<br>';

        print_r($arr);
        echo '<br>';
        $a = array_pop($arr);
        echo '<hr>';
        echo 'a (pop): '.$a;
        echo '<br>';
        
        print_r($arr);
        $b = array_push($arr, 'Last');
        echo '<br>';
        echo 'b (push): '.$b;
        echo '<br>';
        print_r($arr);
    ?>
</body>
</html>