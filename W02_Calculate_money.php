<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculateMoney</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 ">
    <h1 class="text-center ">PHP Calculate Money</h1>
    <hr>
    <p class="text-center">กรุณากรอกข้อมูลเพื่อทำการคำนวณยอดเงิน</p>
    
    <form action="" method="post" class="text-center">
    <div class="row justify-content-center mb-3">
        <div class="form-group col-md-5">
            <label for="price">Price</label>
            <input type="number" name="price" id="price"  value="<?php echo isset( $_POST['price']) ?$_POST['price']: '' ;?>" 
            class="form-control w-100 mx-auto" placeholder="Enter a Price" required>
        </div>
        <div class="form-group col-md-5">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount"  value="<?php echo isset( $_POST['amount']) ?$_POST['amount']: '' ;?>" 
            class="form-control w-100 mx-auto" placeholder="Enter a Amount" required>
        </div>
    </div>    

    <div>
        <div>
            <label class="form-lable d-block" for=""> membership </label>
            <div class="form-check form-check-inline">
                <input type="radio" name="member" id="member" value="1"
                <?php
                echo isset($_POST['member1'])&& $_POST['member1'] =='1'? 'checked' :'';
                ?>
                >
                <label for="member"> Member (10% Discount) </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="member" id="member" value="0"
                <?php
                echo isset($_POST['member2'])&& $_POST['member2'] =='0'? 'checked' :'';
                ?>
                >
                <label for="member"> Not a Member </label>
            </div>
        </div>
    </div>

        <button type="submit" class="btn btn-primary btn-lg mt-3 mb-3 ">Calculate</button>
        <button type="button" class="btn btn-secondary btn-lg mt-3 mb-3 " onclick="clearAllData()">Reset All</button>

    </form>
    <div class="card mt-5 mb-3 w-50 mx-auto" >
            <div class="card-header bg-info text-white text-center h5 py-3">
                <h2 >Show Result</h2> 
            </div>
    <?php
    if(isset($_POST['price'])&&isset($_POST['amount'])){
                        $price = $_POST['price'];
                        $amount = $_POST['amount'];
                        
                        if(is_numeric($price) && is_numeric($amount)){
                            $price = floatval($price);
                            $amount = floatval($amount);
                            $total = $price*$amount; // คำนวณยอดรวม
                            $discount = $total * 0.1; //คำนวณส่วนลด 10%
                            
                            //ตรวจสอบมีการเบือกสมาชิกหรือไม่
                            if(isset($_POST['member'])&&$_POST['member'] == '1'){
                                $total_paid = $total-$discount; 
                                //ถ้าสมาชิกจ่ะหักส่วนลด
                                echo "<ul class='list-group list-group-flush'>";
                                echo "<li class='list-group-item'>ราคาสินค้า <strong>" . number_format($price,2) . "</strong></li>";
                                echo "<li class='list-group-item'>ขำนวณสินค้า" . number_format($amount,2) . "</strong></li>";
                                echo "<li class='list-group-item'>ส่วนลดมที่ได้ <strong>" . number_format($discount, 2) . "</strong></li>";
                                echo "<li class='list-group-item'>ยอดซื้อรวม <strong>" . number_format($total,2) . "</strong></li>";
                                echo "<li class='list-group-item text-primary'> ยอดที่ต้องจ่ายจริงหลังหัดส่วนลด <strong>" . number_format($total_paid,2) . "</strong></li>";
                                echo "</ul>";

                            }else{
                                $total_paid = $total; 
                                
                                echo "<ul class='list-group list-group-flush'>";
                                echo "<li class='list-group-item'>ราคาสินค้า <strong>" . number_format($price,2) . "</strong></li>";
                                echo "<li class='list-group-item'>ขำนวณสินค้า" . number_format($amount,2) . "</strong></li>";
                                echo "<li class='list-group-item'>ยอดซื้อรวม <strong>" . number_format($total,2) . "</strong></li>";
                                echo "<li class='list-group-item text-primary'> ยอดที่ต้องจายจริงหลังหัดส่วนลด <strong>" . number_format($total_paid,2) . "</strong></li>";
                                echo "</ul>";

                            }



                        }else{
                            echo "<div class='alert alert-danger text-center'>Please input valid numeric value for Price and Amount.</div>";

                            }
                        




                        

                    }else{
                        echo "<div class='alert alert-secondary text-center'>Please input Price and Amount.</div>";
                    }
    ?>    
    </div>
        
        <hr>
    </div>
<a href="index.php">Home</a>
    <script>
        // ฟังก์ชันสำหรับล้างผลลัพธ์เกรดและช่องกรอกคะแนน
        function clearAllData() {
            document.getElementById('price').innerHTML = '';//ลบผลลัพธ์
            document.getElementById('price').value = '';//ลบราคา
            document.getElementById("member1").checked = false;//ยกเลิกสมาชิก
            document.getElementById("member2").checked = true;//เลือกไม่ีเปนสมาชิก
            document.getElementById('amount').value = '';
        }  
    </script>
</body>
</html>