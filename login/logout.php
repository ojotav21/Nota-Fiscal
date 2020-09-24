<<<<<<< HEAD
<?php
  session_start();


unset(
    $_SESSION['id'], 
    $_SESSION['nome'], 
    $_SESSION['email'], 
    $_SESSION['nivel'] 
);

header('Location: index.php');
?>

=======
<?php
  session_start();


unset(
    $_SESSION['id'], 
    $_SESSION['nome'], 
    $_SESSION['email'], 
    $_SESSION['nivel'] 
);

header('Location: index.php');
?>

>>>>>>> 25af8b36c1f7c2c6b02ff43eecafbb07c56ccf1b
