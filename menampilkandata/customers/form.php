<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../main/koneksi.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $customerNumber = $_POST['customerNumber'];
      $customerName = $_POST['customerName'];
      $contactLastName = $_POST['contactLastName'];
      $contactFirstName = $_POST['contactFirstName'];
      $phone = $_POST['phone'];
      $addressLine1 = $_POST['addressLine1'];
      $addressLine2 = $_POST['addressLine2'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $postalCode = $_POST['postalCode'];
      $country = $_POST['country'];
      $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
      $creditLimit = $_POST['creditLimit'];
      //query SQL
      $query = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES('$customerNumber','$customerName','$contactLastName','$contactFirstName','$phone','$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$salesRepEmployeeNumber','$creditLimit')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"href="../customers/style.css">
    <title>Tambah Data</title>
</head>
<body>
    <nav>
        <h1>Modifikasi Data</h1>
        <ul>
            <li><a href="<?php echo "../main/customer.php"; ?>">Data Customer</a></li>
            <li><a href="<?php echo "../customers/form.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../customers/update.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../customers/delete.php"; ?>">Hapus Data</a></li>
        </ul>
    </nav>
        <tr >
            <td colspan="3">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php 
                if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Customer berhasil disimpan</div>';
                }
                elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Customer gagal disimpan</div>';
                }
                 ?>
            </td>
        </tr>
        <table>
            <tr>
                <th>
                    <h2>Tambah Data Customer</h2>
                        <form action="form.php" method="POST">
                    <div class="form-group">
                        <label>Customer Number</label>
                        <input type="text" class="form-control" placeholder="customerNumber" name="customerNumber" required="required">
                    </div>
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" placeholder="customerName" name="customerName" required="required">
                    </div>
                    <div class="form-group">
                        <label>Contact Last Name</label>
                        <input type="text" class="form-control" placeholder="contactLastName" name="contactLastName" required="required">
                    </div>
                    <div class="form-group">
                        <label>Contact First Name</label>
                        <input type="text" class="form-control" placeholder="contactFirstName" name="contactFirstName" required="required">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="phone" name="phone" require="require">
                    <div class="form-group">
                        <label>Address Line 1</label>
                        <input type="text" class="form-control" placeholder="addressLine1" name="addressLine1" required="required">
                    </div>
                    <div class="form-group">
                        <label>Address Line 2</label>
                        <input type="text" class="form-control" placeholder="addressLine2" name="addressLine2" required="required">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="city" name="city" required="required">
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" placeholder="state" name="state" required="required">
                    </div>
                    <div class="form-group">
                        <label>PostalCode</label>
                        <input type="text" class="form-control" placeholder="postalCode" name="postalCode" required="required">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="country" name="country" required="required">
                    </div>
                    <div class="form-group">
                        <label>Sales Rep Employee Number</label>
                        <input type="text" class="form-control" placeholder="salesRepEmployeeNumber" name="salesRepEmployeeNumber" required="required">
                    </div>
                    <div class="form-group">
                        <label>Credit Limit</label>
                        <input type="text" class="form-control" placeholder="creditLimit" name="creditLimit" required="required">
                    </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    </main>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>
