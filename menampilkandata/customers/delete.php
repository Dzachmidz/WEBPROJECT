<?php 

  include ('../main/koneksi.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['customerNumber'])) {
          //query SQL
          $customerNumber = $_GET['customerNumber'];
          $query = "DELETE FROM customers WHERE customerNumber = '$customerNumber'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          //redirect ke halaman lain
          header('Location: ../main/customer.php?status='.$status);
      }  
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../customers/style.css">
    <title>Classic Models</title>
</head>
<body>
    <nav>
        <h1>Classic Models Customer</h1>
            <ul>
              <li><a href="<?php echo "../main/customer.php"; ?>">Data Customer</a></li>
              <li><a href="<?php echo "../customers/form.php"; ?>">Tambah Data</a></li>
              <li><a href="<?php echo "../customers/update.php"; ?>">Update Data</a></li>
              <li><a href="<?php echo "../customers/delete.php"; ?>">Hapus Data</a></li>
            </ul>
    </nav>
    </div>
        <div class="containera">
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
                    <th>Delete Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM customers";
                $result = mysqli_query(connection(), $query);

                if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $row ['customerNumber'];?>
                            </td>
                            <td>
                                <?php echo $row['customerName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactLastName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactFirstName']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine1']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine2']; ?>
                            </td>
                            <td>
                                <?php echo $row['city']; ?>
                            </td>
                            <td>
                                <?php echo $row['state']; ?>
                            </td>
                            <td>
                                <?php echo $row['postalCode']; ?>
                            </td>
                            <td>
                                <?php echo $row['country']; ?>
                            </td>
                            <td>
                                <?php echo $row['salesRepEmployeeNumber']; ?>
                            </td>
                            <td>
                                <?php echo $row['creditLimit']; ?>
                            </td>
                            <td>
                            <li><a href="<?php echo "../customers/delete.php?customerNumber=".$data['customerNumber']; ?>"> Delete</a></li>
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
        </thead>
    </div>
</body>
</html>