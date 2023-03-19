<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../main/koneksi.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $employeeNumber = $_POST['employeeNumber'];
      $lastName = $_POST['lastName'];
      $firstName = $_POST['firstName'];
      $extension = $_POST['extension'];
      $email = $_POST['email'];
      $officeCode = $_POST['officeCode'];
      $reportsTo = $_POST['reportsTo'];
      $jobTitle = $_POST['jobTitle'];

      //query SQL
      $query = "INSERT INTO employees (employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle) VALUES('$employeeNumber', '$lastName', '$firstName', '$extension', '$email', '$officeCode', '$reportsTo')"; 

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
    <link rel="stylesheet"href="../employees/style.css">
    <title>Tambah Data</title>
</head>
<body>
    <nav>
        <h1>Modifikasi Data</h1>
        <ul>
            <li><a href="<?php echo "../main/employee.php"; ?>">Data Customer</a></li>
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
                echo '<br><br><div class="alert alert-success" role="alert">Data Employee berhasil disimpan</div>';
                }
                elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Employee gagal disimpan</div>';
                }
                 ?>
            </td>
        </tr>
        <table>
            <tr>
                <th>
                    <h2>Tambah Data Employee</h2>
                        <form action="form.php" method="POST">
                    <div class="form-group">
                        <label>Employee Number</label>
                        <input type="text" class="form-control" placeholder="employeeNumber" name="employeeNumber" required="required">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="lastName" name="lastName" required="required">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="firstName" name="firstName" required="required">
                    </div>
                    <div class="form-group">
                        <label>Extension</label>
                        <input type="text" class="form-control" placeholder="extension" name="extension" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="email" name="email" require="required">
                    <div class="form-group">
                        <label>Office Code</label>
                        <input type="text" class="form-control" placeholder="officeCode" name="officeCode" required="required">
                    </div>
                    <div class="form-group">
                        <label>Reports To</label>
                        <input type="text" class="form-control" placeholder="reportsTo" name="reportsTo" required="required">
                    </div>
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" class="form-control" placeholder="jobTitle" name="jobTitle" required="required">
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
