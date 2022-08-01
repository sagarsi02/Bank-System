<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Interest</title>
    <!-- Link Css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="text-center">Total Interest</h1>
    <div class="interest">
        <table style="width:100%">
            <tr>
                <th>Branch Name</th>
                <th>Amount</th>
                <th>Interest 3</th>
                <th>Total Amount</th>
            </tr>
            <?php
            $bank = false;
            include 'partials/_dbconnect.php';
            $sql = "SELECT * FROM `account`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $bank = true;
                $BankName = $row['branch_name'];
                $Amount = $row['balance'];
                $interest = ($Amount * 4) / 100;
                $Totalamount = $Amount + $interest;

                echo '<tr>
                        <td>'.$BankName.'</td>
                        <td>'.$Amount.'</td>
                        <td>'.$interest.'</td>
                        <td>'.$Totalamount.'</td>
                    </tr>';
            }
            ?>

        </table>
    </div>
</body>

</html>