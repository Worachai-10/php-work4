<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลฟุตบอล วรชัย-10</title>
</head>
<body>
    <form method="get">
        ทีม1 :<input type="text" name="t1"></br>
        ทีม2 :<input type="text" name="t2"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
    $t1 = $_GET['t1'];
    $t2 = $_GET['t2'];
    if ($t1 > $t2) {
        echo "ทีม1 ชนะ";
    }
    if ($t2 > $t1) {
        echo "ทีม2 ชนะ";
    }
    if ($t1 == $t2) {
        echo "เสมอทั้งคู่";
    }
    ?>
</body>
</html>
