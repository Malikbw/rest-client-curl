<?php
    //memasukan file config
    include("config.php");
 
    //url untuk lihat data
    $url="http://localhost/rest-apii/tampil_data.php";
 
    //menyimpan hasil dalam variabel
    $data=http_request_get($url);
 
    //konversi data json ke array
    $hasil=json_decode($data,true);
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
        .judul {
            background-color: #010a43;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col">
                <h1 class="mb-4" style="text-align: center;">Data Pengurus dengan API</h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr class="judul">
                      <th scope="col">ID</th>
                      <th scope="col">NAMA</th>
                      <th scope="col">ALAMAT</th>
                      <th scope="col">GENDER</th>
                      <th scope="col">GAJI</th>
                      <th scope="col">AKSI</th>
                    </tr>
                  </thead>

                  <?php foreach($hasil as $row) { ?>

                  <tbody>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['gaji']; ?></td>
                        <td style="text-align: center;">
                            <a href="edit_data.php?id=<?php echo $row['id']; ?>"><i class="material-icons">create</i></a>
                            <a href="hapus_data.php?id=<?php echo $row['id']; ?>"><i class="material-icons" style="color: red">delete_forever</i></a>
                        </td>
                    </tr>
                  </tbody>
                  <?php }  ?>
                </table>
            </div>
        </div>
    </div>

    
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>