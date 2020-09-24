<<<<<<< HEAD
<?php
session_start();
echo $_SESSION['nivel'];
if (($_SESSION['nivel']) == 1 ) {
    header('Location: ../site/index.php');
}else{
    echo "Barrado";
}
=======
<?php
session_start();
echo $_SESSION['nivel'];
if (($_SESSION['nivel']) == 1 ) {
    header('Location: ../site/index.php');
}else{
    echo "Barrado";
}
>>>>>>> 25af8b36c1f7c2c6b02ff43eecafbb07c56ccf1b
?>