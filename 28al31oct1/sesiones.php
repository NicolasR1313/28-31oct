<?php
session_start();
$_SESSION["usuario"] = "Nicolas";
echo "Sesión iniciada para " . $_SESSION["usuario"];
?>



<?php
session_start();
session_unset(); 
session_destroy(); 
?>
