  

<?php

$pageTitle = "Register";
include_once "header.php";


$name= $email= $password= $confirm_password= $errors ='';



if(isset($_POST['name'])){
$name                 = htmlspecialchars($_POST['name']);
$email                = htmlspecialchars($_POST['email']);    
$password             = htmlspecialchars($_POST['password']);
$confirm_password     = htmlspecialchars ($_POST['confirm_password']);

if($password != $confirm_password){
    $errors = " confirm password not match the password";
}
if(strlen($errors) == 0){
    $password = sha1($password);
    $sql = "INSERT INTO users (name , email , password  ) VALUES ('$name', '$email' , '$password') ";
    if(mysqli_query($conn , $sql)){
        $_SESSION ['user'] = $name ;
        header("location: index.php "); 

    } 

}

}

?>



  <main>
    <?php if(strlen($errors) > 0){?>
        <div class="errors">
           <p><?= $errors ?></p>
        </div>
        <?php }?>

  <form action="" method="post" enctype="multipart/form-data">
  <h1>Personal Data</h1>
  
        


       
    
    <div class="mb-3">
    <label for="">Name: <span class="text-danger">*</span></label>  
    <input class="form-control " type="text" name="name" placeholder="Name"  required >
</div>


<div class="mb-3">
      
    <label for="">Email: <span class="text-danger">*</span></label>
    <input class="form-control " type="email" name="email" placeholder="Email"   required>
</div>


<div class="mb-3">
        
    <label for="">password:</label>
    <input class="form-control " type="password" name="password" placeholder="password"  required>
</div>




    

    


    <div  class="mb-3">
    <label for="">confirm password:</label>
    <input class="form-control " type="password" name="confirm_password" placeholder="password"  required>
    </div>


    <div>
    <button class=" px-5">Join Us</button></div>
    
  </form>
  </main>





