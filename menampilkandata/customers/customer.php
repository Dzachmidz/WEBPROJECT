<?php
include('../customers/koneksi.php');
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
        <h1>Classic Models Customer</h1>
            <ul>
                <li><a href="customer.php">Customers</a></li>
                <li><a href="employee.php">Employees</a></li>
                <li><a href="productline.php">Product Lines</a></li>
                <li><a href="products.php">Products</a></li>
            </ul>
    </nav>
    <div class="modifikasidata">
        <ul>
            <li><a href="<?php echo "form.php"; ?>"><b>Modifikasi Data</b></a></li>
        </ul>
    </div>
        <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Last Name</th>
                    <th>Contact First Name</th>
                    <th>Phone</th>
                    <th>Address Line 1</th>
                    <th>Address Line 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Sales Rep Employee Number</th>
                    <th>Credit Limit</th>
                    <th>Modifikasi Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM customers";
                $result = mysqli_query(connection(), $query);
                ?>
                            <?php 
                                    while($data = mysqli_fetch_array($result)): 
                                ?>
                      
                        <tr>
                            <td>
                                <?php echo $data ['customerNumber'];?>
                            </td>
                            <td>
                                <?php echo $data['customerName']; ?>
                            </td>
                            <td>
                                <?php echo $data['contactLastName']; ?>
                            </td>
                            <td>
                                <?php echo $data['contactFirstName']; ?>
                            </td>
                            <td>
                                <?php echo $data['phone']; ?>
                            </td>
                            <td>
                                <?php echo $data['addressLine1']; ?>
                            </td>
                            <td>
                                <?php echo $data['addressLine2']; ?>
                            </td>
                            <td>
                                <?php echo $data['city']; ?>
                            </td>
                            <td>
                                <?php echo $data['state']; ?>
                            </td>
                            <td>
                                <?php echo $data['postalCode']; ?>
                            </td>
                            <td>
                                <?php echo $data['country']; ?>
                            </td>
                            <td>
                                <?php echo $data['salesRepEmployeeNumber']; ?>
                            </td>
                            <td>
                                <?php echo $data['creditLimit']; ?>
                            </td>
                            <td>
                            <li><a href="<?php echo "update.php?customerNumber=".$data['customerNumber']; ?>"> Update</a></li>
                           <li><a href="<?php echo "delete.php?customerNumber=".$data['customerNumber']; ?>"> Delete</a></li>
                            </td>
                     <?php endwhile ?>
                </tr>
                
            </tbody>
        </thead>
    </div>
</body>
</html>