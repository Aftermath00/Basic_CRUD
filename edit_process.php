<?php 
  
  if(isset($_POST['modify'])){
    include_once 'connection.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

  $update = mysqli_query($connection, "UPDATE mahasiswa SET 

    nama = '$nama',
    gender = '$gender',
    alamat = '$alamat'

    WHERE nim = '$nim'")

    OR die(mysqli_error($connection));


    if ($update) {
      echo "<h3>Data has succesfully added.</h3>";
      echo "<script>window.location = 'index.php'</script>";
    }
    else  {
      echo "Failed to added data";
      echo "<a href='edit.php ? nim = ".$nim."'>Back</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }