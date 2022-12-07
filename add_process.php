<?php 
  
  if(isset($_POST['add'])) {
    include_once 'connection.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $input = mysqli_query($connection, "INSERT INTO mahasiswa VALUES
    ('$nim', '$nama', '$gender', '$alamat')");

    if ($input) {
      echo "<h3>Data has succesfully added.</h3>";
      echo "<script>window.location = 'index.php'</script>";
    }
    else  {
      echo "Failed to added data";
      echo "<a href='add.php'>Back</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }