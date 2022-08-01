<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highest Balance</title>
    <!-- Link Css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="text-center">Highest Balance</h1>
    <div class="interest">
        <table style="width:100%">
            <tr>
                <th>City</th>
                <th>Highest Amount</th>
            </tr>
            <?php
                $high = false;
                include 'partials/_dbconnect.php';
                $sql = "SELECT * FROM `branch` ORDER by assets DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $high = true;
                    $city = $row['branch_city'];
                    $assets = $row['assets'];

                    echo '<tr>
                            <td>'.$city.'</td>
                            <td>'.$assets.'</td>
                        </tr>';
                }
            ?>
        </table>
    </div>
</body>

</html>