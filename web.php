<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculate Total</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <style>
        .custom-input {
            border: 2px solid #007bff;
            /* เส้นขอบสีฟ้า */
            border-radius: 6px;
            padding: 10px;
            background-color: #f0f8ff;
            /* พื้นหลังฟ้าอ่อน */
            color: #000;
            /* สีตัวอักษร */
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">PHP Calculate Money</h1>
        <hr>
        <p class="text-center">กรุณากรอกข้อมูลเพื่อคำนวณยอดเงิน</p>

        <form method="post" class="text-center">
            <div class="row justify-content-center mb-3">
                <div class="col-md-3">
                    <p>Price</p>
                    <input type="number" name="price" id="price"
                        value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>"
                        class="form-control custom-input" placeholder="Enter Price" required>
                </div>
                <div class="col-md-3">
                    <p>Amount</p>
                    <input type="number" name="amount" id="amount"
                        value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>"
                        class="form-control custom-input" placeholder="Enter Amount" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Calculate</button>
            <button type="button" class="btn btn-secondary" onclick="clearForm()">Reset All</button>
        </form>

        <?php
        if (isset($_POST['price']) && isset($_POST['amount'])) {
            $price = (float) $_POST['price'];
            $amount = (int) $_POST['amount'];
            $total = $price * $amount;

            echo '<div class="card mt-4 w-50 mx-auto">';
            echo '<div class="card-header bg-info text-white text-center"><strong>Show Result</strong></div>';
            echo '<div class="card-body">';
            echo '<p>Price of product: <strong>' . number_format($price, 2) . '</strong></p>';
            echo '<p>Amount of product: <strong>' . number_format($amount, 2) . '</strong></p>';
            echo '<p>Total Paid: <strong class="text-primary">' . number_format($total, 2) . '</strong></p>';
            echo '</div></div>';
        }
        ?>
    </div>

    <script>
        function clearForm() {
            document.getElementById("price").value = '';
            document.getElementById("amount").value = '';
        }
    </script>
</body>

</html>