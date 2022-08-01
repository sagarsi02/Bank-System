<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Loan</title>
    <!-- Link Css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="text-center">Top 5 Loan</h1>
    <div class="interest">
        <table style="width:100%">
            <tr>
                <th>Loan Number</th>
                <th>Loan Amount</th>
            </tr>
            <?php
                $loan = false;
                include 'partials/_dbconnect.php';
                $sql = "SELECT * FROM `loan` ORDER by amount DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $loan = true;
                    $LoanNumber = $row['loan_number'];
                    $LoanAmount = $row['amount'];

                    echo '<tr>
                            <td>'.$LoanNumber.'</td>
                            <td>'.$LoanAmount.'</td>
                        </tr>';
                }
            ?>

        </table>
    </div>
</body>

</html>