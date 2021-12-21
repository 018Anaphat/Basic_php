<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>

</head>
<body>
    <?php
    
    /*
    $x = 10;
    $y = 3;
    echo "<b> 1.ตัวดำเนินการ <b/><br>"
    echo " ผลลัพท์ของ $x + $y เท่ากับ " . ($x+$y) . "<br>";
    echo " ผลลัพท์ของ $x - $y เท่ากับ " . ($x-$y) . "<br>";
    echo " ผลลัพท์ของ $x * $y เท่ากับ " . ($x*$y) . "<br>";
    echo " ผลลัพท์ของ $x / $y เท่ากับ " . ($x/$y) . "<br>";
    echo " ผลลัพท์ของ $x % $y เท่ากับ " . ($x%$y) . "<br><br>";

    echo "<b> 2.ตำดำเนินการ เพิ่มค่าลดค่า <b/><br>"
    $a = 10
    $b=++$a;
    $z=$x++;
    echo "ค่าของ x และ a (ก่อนจะประมวลผล) x= 10 , a=10 <br>";
    echo "ค่าของ z(จากสูตร z=x++ นำค่า x ไปเก็บใน z จะได้ค่าเดิมของ x)= $z , <br>"
    echo "ค่าของ b(จากสูตร b=++a เพิ่มค่าให้ a ก่อนแล้วนำไปเก็บใน b)= $b , <br>";
    echo "ค่าของ x และ a (หลังจากแระมวลผล) x= $x , a=$a <br>";
    */

    /*
    $salary = 5000;
    if($salary < 10000){
        $bonus = ($salary * 80) / 100;
    }else if ($salary <= 50000){
        $bonus = ($salary * 50) / 100;
    }else ($salary > 50000){
        $bonus = ($salary * 30) / 100;
    }

    $Bsalary = ($salary + $bonus);
    $Tax = ($Bsalary * 7) / 100;
    $Total = ($Bsalary - $Tax);
    */

    $price = 5000;
    if($price<10000)
    $bonus=$price * 0.80;
    else if($price<50000)
    $bonus=$price * 0.50;
    else if($price>50000)
    $bonus=$price * 0.30;
    else $bonus=0;
    $income = $price+$bonus;
    $tax = $income*0.07;
    $revenue = $income-$tax;

    echo " เงินเดือน = .($price). บาท <br>";
    echo " ----------------------------- <br>";
    echo " ได้โบนัส = .($bonus). บาท <br>";
    echo " คิดภาษี 7% จากรายได้สุทธิ = ($tax) บาท <br>";
    echo " รายรับหลังหักภาษี = .($revenue).บาท<br>";
    echo " ----------------------------- <br>";

    ?>
</body>
</html>