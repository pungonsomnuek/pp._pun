<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BASIC</title>
</head>
<body>
    <h1 style="color: red;">Welcome to PHP Basic</h1>
    <p>This is a simple PHP application.</p>
    <h1>Basic PHP Syntax</h1>
<pre>
    &LT;?php 
    echo " Hello World!";
?&GT;
</pre>

<h3>Result</h3>
<div style="color: blue;">
<?php
echo "Hello World <br>";
print " <span style='color: green;'>Pungon Somnuek</span>";
?>
</div>
<hr>

    <h1> PHP Variables</h1>
<pre>
    &LT;?php 
    $greeting = " Hello World!";
    echo $greeting;
?&GT;
</pre>

<h3>Result</h3>
<?php
$greeting = " Hello World!";
echo" <span style='color: blue;'> .$greeting.</span>";
?>
<hr>

<h1 style="color:brown">Integer Variable Example</h1>
<?php
$age = 20;
echo "<span style='color: blue;'> I am ".$age." year old</span> ";
?>
<hr>


<h1>calculate with Variables</h1>
       
        
        <?php   
        $a = 5; 

        $b = 4;
        $c = $a + $b;
        echo "<span style='color: blue;'>The sum of $a and $b is $c</span>";
        ?>
        <hr>
        <h1>คำนวนสามเหลี่ยม</h1>
        
        
        <?php
        $base = 5;
        $height = 10;
        $area = 0.5 * $base * $height;
        echo "<span style='color: blue;'> พื้นที่สามเหลี่ยมคือ $area ตารางหน่วย</span>";
        ?>
        <hr>
        <h1>คำนวนจากปีเกิด</h1>
        
        
        <?php
        $birthYear = 2005;
        $currentYear = date("Y");
        $age = $currentYear - $birthYear;
        echo "<span style='color: blue;'>อายุของคุณ $age ปี</span>";
        ?>
        <hr>



            <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
    <hr>\
<!--สร้างอาเรย์-->
    <?php
        $fruits = ["Apple","Banana","Peach"];
    ?>


    <h3>แสดงรายการผลไม้ โดยใช้ index</h3>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    echo $fruits[0] . "<br>";//Apple
    echo $fruits[1] . "<br>";//Banana
    echo $fruits[2] . "<br>";//Peach
    ?>
    
    
    </div>
    <br>

    <div style="color:red; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงผลลัพธ์ของการเข้าถึงข้อมูลในอาเรย์
            echo "รายการผลไม้: <br>";
            echo "ผลไม้ที่ 1: " . $fruits[0] . "<br>"; // Apple
            echo "ผลไม้ที่ 3: " . $fruits[2] . "<br>"; // Peach
            ?>
    </div>
    <br>

    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ print readable</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "รายการผลไม้: <br>";
            print_r($fruits); // แสดงผลอาเรย์ทั้งหมด  print readable
            echo "<br>";

        ?>
    </div>
    <br>

    <h4>แสดงจำนวณผลไม้</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "รายการผลไม้:" . count($fruits) . "ชนิด <br>";
            print_r($fruits); // แสดงผลอาเรย์ทั้งหมด  print readable
            echo "<br>";

        ?>
    </div>
    <br>


    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
            // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
            echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
            echo "<br>";
        ?>
    </div>

     <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
            // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
            echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
            echo "<br>";
        ?>
    </div>
    
    
    
    
    
    
    
        <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
            foreach($fruits as $fruit){
                echo "ผลไม้:fruit <br>";

            }
    
            echo "<br>";
        ?>
    </div>
    
    
    <!-- ======================================================== -->
<br>
<h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
        // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
        foreach($fruits as $fruit){
            if($fruit === end($fruits)){
                echo "$fruit.";
            }else{
                echo "$fruit, ";
                
            }

        }

        echo "<br>";
    ?>
</div>

        <!-- ======================================================== -->
    <!-- ======================================================== -->
        
        <hr>
        <h2>สร้างตัวแปรอาเรย์ แบบที่ 2: Associative Array</h2>
        <h6>เป็น array ซ้อนกันหลายชุด (Multidimensional array)</h6>
        <h6>แต่ละชุดเป็น associative array ที่ระบุชื่อ key ชัดเจน เช่น "name" และ "price"</h6>
        <h6>ใช้สำหรับเก็บข้อมูลที่มีความสัมพันธ์กัน key => value เช่น รายการสินค้า</h6>


        <?php
            // สร้างอาเรย์ของผลไม้ที่มีชื่อและราคา
            $products = [
                ["name" => "Apple", "price" => 30],
                ["name" => "Banana", "price" => 20],
                ["name" => "Peach", "price" => 15]
            ];
        ?>
        <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงผลลัพธ์ของการเข้าถึงข้อมูลในอาเรย์
            echo $products[0]["name"] . "<br>";  // Apple
            echo $products[2]["price"] . "<br>"; // 15

    
        ?>
    </div>

        <!-- ======================================================== -->
<br>
<h4>แสดงรายการสินค้า ใช้คำสั่ง foreach เพื่อวนลูป</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            
        foreach ($products as $product){
            echo "รายการสินค้า: $product[name] ";
            echo "ราคา: $product[price] บาท"." <br>";
            $total_price += $product["price"]; //คำนวณราคารวม
            //$total_price = $total_price + $product["price"]; //คำนวณราคารวม
            
        }
            echo "<br>";
            echo "รายการรวมของผลไม้ทั้งหมด: " . $total_price . " บาท";
        ?>
        </div>
    

<hr>
    <a href="index.php">Home</a>

</body>
</html>