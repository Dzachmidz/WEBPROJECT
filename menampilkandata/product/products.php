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
        <h1>Classic Models Product</h1>
        <ul>
            <li><a href="../product/customer.php">Customers</a></li>
            <li><a href="../product/employee.php">Employees</a></li>
            <li><a href="../product/productline.php">Product Lines</a></li>
            <li><a href="../product/products.php">Products</a></li>
        </ul>
    </nav>
    <div class="tambahdata">
        <ul>
            <li><a href="<?php echo "../product/form.php"; ?>"><b>Modifikasi Data</b></a></li>
        </ul>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Line</th>
                    <th>Product Scale</th>
                    <th>Product Vendor</th>
                    <th>Product Description</th>
                    <th>Quantity In Stock</th>
                    <th>Buy Price</th>
                    <th>MSRP</th>
                    <th>Modifikasi Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM products";
                $result = mysqli_query(connection(), $query);
                    while ($data = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td>
                                <?php echo $data ['productCode'];?>
                            </td>
                            <td>
                                <?php echo $data['productName']; ?>
                            </td>
                            <td>
                                <?php echo $data['productLine']; ?>
                            </td>
                            <td>
                                <?php echo $data['productScale']; ?>
                            </td>
                            <td>
                                <?php echo $data['productVendor']; ?>
                            </td>
                            <td>
                                <?php echo $data['productDescription']; ?>
                            </td>
                            <td>
                                <?php echo $data['quantityInStock']; ?>
                            </td>
                            <td>
                                <?php echo $data['buyPrice']; ?>
                            </td>
                            <td>
                                <?php echo $data['MSRP']; ?>
                            </td>
                            <td>
                            <li><a href="<?php echo "update.php?productCode=".$data['productCode']; ?>"> Update</a></li>
                           <li><a href="<?php echo "delete.php?productCode=".$data['productCode']; ?>"> Delete</a></li>
                            </td>     
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>