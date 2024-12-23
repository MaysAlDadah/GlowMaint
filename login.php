
<?php
$pageTitle = "login";
include_once "header.php";
$email = $password = $errors = '';

if(isset($_POST['email'])){

    $email    = htmlspecialchars($_POST['email']);    
    $password = sha1(htmlspecialchars($_POST['password']));

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
    $res = mysqli_query($conn , $sql);
    $user = mysqli_fetch_assoc($res);
    //var_dump($user);
    if($user){
        $_SESSION ['user'] = $user['name'];
        header("location: index.php ");
        
    }else{
        $errors =  "not found";
    }
}

?>



  <main>
    <div class="container py-5">
        <?php 
        if(strlen($errors) > 0) { ?>
        <div class="alert alert-danger">
            <p> <?php echo $errors;   ?></p>
        </div>
        <?php } ?>
        
    </div>
      <form action="" method="post" enctype="multipart/form-data">
  <h1>Personal Data</h1>
        


       
    
    


<div class="mb-3">
      
    <label for="">Email: <span class="text-danger">*</span></label>
    <input class="form-control " type="email" name="email" placeholder="Email"   required>
</div>


<div class="mb-3">
        
    <label for="">password:</label>
    <input class="form-control " type="password" name="password" placeholder="password"  required>
</div>




    

    




    <div>
    <button class=" px-5">login</button></div>
    
  </form>
  </main>





    
