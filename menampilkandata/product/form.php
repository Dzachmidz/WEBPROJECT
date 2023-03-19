<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('koneksi.php'); 

  $status = '';
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
      //query SQL
      $query = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES('$productCode','$productName','$productLine','$productScale','$productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')"; 

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
    <link rel="stylesheet"href="style.css">
    <title>Tambah Data</title>
</head>
<body>
    <nav>
        <h1>Modifikasi Data</h1>
        <ul>
            <li><a href="<?php echo "../product/products.php"; ?>">Data Product</a></li>
            <li><a href="<?php echo "form.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "update.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "delete.php"; ?>">Hapus Data</a></li>
        </ul>
    </nav>
        <tr >
            <td colspan="3">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php 
                if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Product berhasil disimpan</div>';
                }
                elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Product gagal disimpan</div>';
                }
                 ?>
            </td>
        </tr>
        <table>
            <tr>
                <th>
                    <h2>Tambah Data Product</h2>
                        <form action="form.php" method="POST">
                    <div class="form-group">
                        <label>Product Code</label>
                        <input type="text" class="form-control" placeholder="productCode" name="productCode" required="required">
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="productName" name="productName" required="required">
                    </div>
                    <div class="form-group">
                        <label>Product Line</label>
                        <input type="text" class="form-control" placeholder="productLine" name="productLine" required="required">
                    </div>
                    <div class="form-group">
                        <label>Product Scale</label>
                        <input type="text" class="form-control" placeholder="productScale" name="productScale" required="required">
                    </div>
                    <div class="form-group">
                        <label>Product Vendor</label>
                        <input type="text" class="form-control" placeholder="productVendor" name="productVendor" require="require">
                    <div class="form-group">
                        <label>Product Description</label>
                        <input type="text" class="form-control" placeholder="productDescription" name="productDescription" required="required">
                    </div>
                    <div class="form-group">
                        <label>Quantity In Stock</label>
                        <input type="text" class="form-control" placeholder="quantityInStock" name="quantityInStock" required="required">
                    </div>
                    <div class="form-group">
                        <label>Buy Price</label>
                        <input type="text" class="form-control" placeholder="buyPrice" name="buyPrice" required="required">
                    </div>
                    <div class="form-group">
                        <label>MSRP</label>
                        <input type="text" class="form-control" placeholder="MSRP" name="MSRP" required="required">
                    </div>
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
