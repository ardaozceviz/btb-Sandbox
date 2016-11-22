<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dates and Times: Unix</title>
</head>
<body>
    <?php 
        echo time();
        echo '<br>';
        echo mktime(21, 21, 20, 11, 22, 2016);
        echo '<br>';
        echo checkdate(12,31,200) ? 'ture' : 'false'; // 31 Aralik diye bir tarih olabilir mi?
        echo '<br>';
        echo checkdate(2,31,200) ? 'ture' : 'false'; // 31 SUbat diye bir tarih olabilir mi?

        echo '<br>';
        $unix_timestamp = strtotime('last Monday');
        echo $unix_timestamp;

    ?>
</body>
</html>