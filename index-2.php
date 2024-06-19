<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รับค่าเดือน วรชัย-10</title>
</head>
<body>
    <form method="get">
        เดือน :<input type="text" name="mth"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
        $mth = $_GET['mth'];
        switch ($mth) {
            case ("มกราคม") :case ("มีนาคม") :case ("พฤษภาคม") :case ("กรกฎาคม") :case ("สิงหาคม") :case ("ตุลาคม") :case ("ธันวาคม") :
                echo "เดือน $mth มี 31 วัน";
                break;
            case ("เมษายน") :case ("มิถุนายน") :case ("กันยายน") :case ("พฤศจิกายน") :
                echo "เดือน $mth มี 30 วัน";
                break;
            default:
                echo "ไม่มีเดือนที่ใส่";
        }
    ?>
</body>
</html>
