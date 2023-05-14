<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../koneksi.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['productCode'])) {
        //query SQL
        $productCode_upd = $_GET['productCode'];
        $query = $koneksi->prepare("SELECT * FROM products WHERE productCode = :productCode");
        //binding data
        $query->bindParam(':productCode',$productCode_upd);
        //eksekusi query
        $query->execute(); 
    }  
}

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];

         //query with PDO
         $query = $koneksi->prepare("UPDATE products SET productName=:productName, 
         productLine=:productLine, productScale=:productScale, productVendor=:productVendor, 
         productDescription=:productDescription, quantityInStock=:quantityInStock, 
         buyPrice=:buyPrice, MSRP=:MSRP WHERE productCode=:productCode"); 
   
         //binding data
         $query->bindParam(':productCode',$productCode);
         $query->bindParam(':productName',$productName);
         $query->bindParam(':productLine',$productLine);
         $query->bindParam(':productScale',$productScale);
         $query->bindParam(':productVendor',$productVendor);
         $query->bindParam(':productDescription',$productDescription);
         $query->bindParam(':quantityInStock',$quantityInStock);
         $query->bindParam(':buyPrice',$buyPrice);
         $query->bindParam(':MSRP',$MSRP);
   
         //eksekusi query
         if ($query->execute()) {
           $status = 'ok';
         }
         else{
           $status = 'err';
         }
   
         //redirect ke halaman lain
         header('Location: ../products.php?status='.$status);
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
            <li><a href="<?php echo "../product.php"; ?>">Data Customer</a></li>
            <li><a href="<?php echo "#"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../product.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../product.php"; ?>">Hapus Data</a></li>
        </ul>
    </nav>
        <tr >
            <td colspan="3">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php 
                if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Products berhasil diupdate</div>';
                }
                elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Products gagal diupdate</div>';
                }
                 ?>
            </td>
        </tr>
        <table>
            <tr>
                <th>
                    <h2>Update Data Products</h2>
                        <form action="update.php" method="POST">
                        <?php while($data = $query->fetch(PDO::FETCH_ASSOC)): ?>
                      <div class="form-group">
                          <label>Products Number</label>
                          <input type="text" class="form-control" placeholder="productCode" name="productCode" value="<?php echo $data['productCode'];  ?>" required="required" readonly>
                      </div>
                      <div class="form-group">
                          <label>Products Name</label>
                          <input type="text" class="form-control" placeholder="productName" name="productName" value="<?php echo $data['productName'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Contact Last Name</label>
                          <input type="text" class="form-control" placeholder="productLine" name="productLine" value="<?php echo $data['productLine'];  ?>" required="required" >
                      </div>
                      <div class="form-group">
                          <label>Contact First Name</label>
                          <input type="text" class="form-control" placeholder="productScale" name="productScale" value="<?php echo $data['productScale'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>productVendor</label>
                          <input type="text" class="form-control" placeholder="productVendor" name="productVendor" value="<?php echo $data['productVendor'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Address Line 1</label>
                          <input type="text" class="form-control" placeholder="productDescription" name="productDescription" value="<?php echo $data['productDescription'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Address Line 2</label>
                          <input type="text" class="form-control" placeholder="quantityInStock" name="quantityInStock" value="<?php echo $data['quantityInStock'];  ?>" required="required" >
                      </div>
                      <div class="form-group">
                          C<label>buyPrice</label>
                          <input type="text" class="form-control" placeholder="buyPrice" name="buyPrice" value="<?php echo $data['buyPrice'];  ?>"    required="required">
                      </div>
                      <div class="form-group">
                          <label>MSRP</label>
                          <input type="text" class="form-control" placeholder="MSRP" name="MSRP" value="<?php echo $data['MSRP'];  ?>" required="required" >
                      </div>
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
