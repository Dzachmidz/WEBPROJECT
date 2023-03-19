<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Classic Models</title>
</head>
<body>
    <nav>
        <h1>Classic Models Product Line</h1>
        <ul>
            <li><a href="../main/customer.php">Customers</a></li>
            <li><a href="../main/employee.php">Employees</a></li>
            <li><a href="../main/productline.php">Product Lines</a></li>
            <li><a href="../main/products.php">Products</a></li>
        </ul>
    </nav>
    <div class="tambahdata">
        <ul>
            <li><a href="<?php echo "../customers/form.php"; ?>"><b>Menambah Data</b></a></li>
        </ul>
    </div>
    <div id="tableproduct">
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
                $result = mysqli_query(connection(), $query);

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
                mysqli_close(connection());
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>