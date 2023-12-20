<?php

@include 'config.php';
session_start();

if(isset($_POST['submit'])){
   
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $pass=md5($_POST['password']);
    

    $select="SELECT * FROM user_db WHERE name='$name'&& pass='$pass'";
    $result=mysqli_query($conn,$select);


    if(mysqli_num_rows($result) > 0){
      $row=mysqli_fetch_array($result);
      if($row['name'] && $row['pass'])
      {
        header('location:index.php');
     
      } 
    }else{
        $error[]='incorrect email or password';
      }
};

if(isset($_POST['logout'])){
   
    $query="delete from user_db where name='".$_POST['name']."';";
    if(!$conn->connect_error)
    {
        $conn->query($query);
        header('location:register.php');
    }
    $conn->close();
   
};

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chutties world</title>
        <link rel="stylesheet" href="css\style.css">


<!--for icons using boxicons.com (2)-->
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


<!--for fonts using google-fonts-open sans family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 

</head>
<body>


<div class="form-container">
        <form action="" method="post">
            <h3>Login</h3>

            <?php

if(isset($error)){
    foreach($error as $error){
        echo '<span class="notify" onclick="this.remove();">'.$error.'</span>';
    };
};
?>
             <input type="text" name="name" placeholder="username" class="box">
            <input type="password" name="password" placeholder="password" class="box">
            
            <input type="submit" name="submit" class="btn" value="Login">
            <input type="submit" name="logout" class="btn" value="Logout" >
            <p>don't have an account? <a href="register.php">Register Now</a></p>
</body>
</html>