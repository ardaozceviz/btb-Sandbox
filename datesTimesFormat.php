<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dates and Times: Formatting</title>
</head>
<body>
    <?php 
        $timestamp = time();
        echo strftime('The date today is %d/%m/%Y',$timestamp);
    ?>
</body>
</html>