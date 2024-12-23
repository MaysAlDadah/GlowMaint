<?php 
include 'db.php'; 
if (isset($_GET['del'])) {
 $id = $_GET['del'];
 $sql = "DELETE FROM  services WHERE id = $id";
 if(mysqli_query($conn,$sql)){

 }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>longin | online</title>
    <link rel="icon" href="img/logo.cline.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/styel.css">
</head>
<body>
    <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>All Our services</h1>
    <a href="add.php" class="btn btn-primary">Add New Service </a>
</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">Service Evaluation</th>
      <th scope="col"></th>
      

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM  services ";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0){
      $i = 1;
        while($row = mysqli_fetch_assoc($res)){
    
    
    ?>
    <tr>
      <th scope="row"><?= $i; $i++ ?></th>
      <td><?= $row['name']?></td>
      <td><?= $row['price']?>$</td>
      <td><?= $row['Service']?></td>
      <td>
        <div class="btn-group">
          <a class="btn btn-sm btn-primary" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
          <a onclick = "return confirm ('Are you sure?!')" class="btn btn-sm btn-danger" href="view.php?del=<?= $row['id']?>">Delete</a>
        </div>
      </td>
    </tr>
  
    <?php } } ?>
  </tbody>
</table>



</div>



</body>
</html>