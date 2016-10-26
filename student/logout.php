<?php
session_start();
session_destroy();
header('Location:index.php');

?>

<?php include "../components/stud_footer.php";
?>
