<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../koneksi.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['customerNumber'])) {
        //query SQL
        $customerNumber_upd = $_GET['customerNumber'];
        $query = $koneksi->prepare("SELECT * FROM customers WHERE customerNumber = :customerNumber");
        //binding data
        $query->bindParam(':customerNumber',$customerNumber_upd);
        //eksekusi query
        $query->execute(); 
    }  
}

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

   //query with PDO
   $query = $koneksi->prepare("UPDATE customers SET customerName=:customerName, contactLastName=:contactLastName, contactFirstName=:contactFirstName, 
   phone=:phone, addressLine1=:addressLine1, addressLine2=:addressLine2, city=:city, state=:state, 
   postalCode=:postalCode, country=:country,salesRepEmployeeNumber=:salesRepEmployeeNumber,
   creditLimit=:creditLimit
   WHERE customerNumber=:customerNumber"); 

   //binding data
   $query->bindParam(':customerNumber',$customerNumber);
   $query->bindParam(':customerName',$customerName);
   $query->bindParam(':contactLastName',$contactLastName);
   $query->bindParam(':contactFirstName',$contactFirstName);
   $query->bindParam(':phone',$phone);
   $query->bindParam(':addressLine1',$addressLine1);
   $query->bindParam(':addressLine2',$addressLine2);
   $query->bindParam(':city',$city);
   $query->bindParam(':state',$state);
   $query->bindParam(':postalCode',$postalCode);
   $query->bindParam(':country',$country);
   $query->bindParam(':salesRepEmployeeNumber',$salesRepEmployeeNumber);
   $query->bindParam(':creditLimit',$creditLimit);
   
   //eksekusi query
   if ($query->execute()) {
     $status = 'ok';
   }
   else{
     $status = 'err';
   }
      //redirect ke halaman lain
      header('Location: ../customer.php?status='.$status);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"href="../style.css">
    <title>Update Data</title>
</head>
<body>
    <nav>
        <h1>Modifikasi Data</h1>
        <ul>
            <li><a href="<?php echo "../customer.php"; ?>">Data Customer</a></li>
            <li><a href="<?php echo "#"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../customer.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../customer.php"; ?>">Hapus Data</a></li>
        </ul>
    </nav>
        <tr >
            <td colspan="3">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php 
                if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Customer berhasil diupdate</div>';
                }
                elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Customer gagal diupdate</div>';
                }
                 ?>
            </td>
        </tr>
        <table>
            <tr>
                <th>
                    <h2>Update Data Customer</h2>
                        <form action="update.php" method="POST">
                        <?php while($data = $query->fetch(PDO::FETCH_ASSOC)): ?>
                      <div class="form-group">
                          <label>Customer Number</label>
                          <input type="text" class="form-control" placeholder="customerNumber" name="customerNumber" value="<?php echo $data['customerNumber'];  ?>" required="required" readonly>
                      </div>
                      <div class="form-group">
                          <label>Customer Name</label>
                          <input type="text" class="form-control" placeholder="customerName" name="customerName" value="<?php echo $data['customerName'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Contact Last Name</label>
                          <input type="text" class="form-control" placeholder="contactLastName" name="contactLastName" value="<?php echo $data['contactLastName'];  ?>" required="required" >
                      </div>
                      <div class="form-group">
                          <label>Contact First Name</label>
                          <input type="text" class="form-control" placeholder="contactFirstName" name="contactFirstName" value="<?php echo $data['contactFirstName'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Phone</label>
                          <input type="text" class="form-control" placeholder="phone" name="phone" value="<?php echo $data['phone'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Address Line 1</label>
                          <input type="text" class="form-control" placeholder="addressLine1" name="addressLine1" value="<?php echo $data['addressLine1'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Address Line 2</label>
                          <input type="text" class="form-control" placeholder="addressLine2" name="addressLine2" value="<?php echo $data['addressLine2'];  ?>" required="required" >
                      </div>
                      <div class="form-group">
                          <label>city</label>
                          <input type="text" class="form-control" placeholder="city" name="city" value="<?php echo $data['city'];  ?>"    required="required">
                      </div>
                      <div class="form-group">
                          <label>State</label>
                          <input type="text" class="form-control" placeholder="state" name="state" value="<?php echo $data['state'];  ?>" required="required" >
                      </div>
                      <div class="form-group">
                          <label>Postal Code</label>
                          <input type="text" class="form-control" placeholder="postalCode" name="postalCode" value="<?php echo $data['postalCode'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Country</label>
                          <input type="text" class="form-control" placeholder="country" name="country" value="<?php echo $data['country'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Sales Rep Employee Number</label>
                          <input type="text" class="form-control" placeholder="salesRepEmployeeNumber" name="salesRepEmployeeNumber" value="<?php echo $data['salesRepEmployeeNumber'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Credit Limit</label>
                          <input type="text" class="form-control" placeholder="creditLimit" name="creditLimit" value="<?php echo $data['creditLimit'];  ?>" required="required">
                      </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        <?php endwhile; ?>
                    </form>
                    </main>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>
