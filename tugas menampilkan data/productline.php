<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Classic Models</title>
</head>
<body>
    <nav>
        <h1>Classic Models</h1>
        <ul>
            <li><a href="employee.php">Employee</a></li>
            <li><a href="productline.php">Product Line</a></li>
        </ul>
    </nav>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Product Line</th>
                    <th>Text Description</th>
                    <th>HTML Description</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM productlines";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $row ['productLine'];?>
                            </td>
                            <td>
                                <?php echo $row['textDescription']; ?>
                            </td>
                            <td>
                                <?php echo $row['htmlDescription']; ?>
                            </td>
                            <td>
                                <?php echo $row['image']; ?>
                            </td>
                            <?php
                    }
                    mysqli_free_result($result);
                } else {
                    echo "Data tidak ada";
                }
                mysqli_close($conn);
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>