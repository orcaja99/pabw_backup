<head>
   <title>login form</title>
   <link href="/css/app.css" rel="stylesheet" type="text/css" >
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>