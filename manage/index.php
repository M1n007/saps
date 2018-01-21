<?php
session_start();
if (!empty(session_start())) {
  header("Location: ../index.php");
}
?>
 username anda <?php echo $_SESSION['username']; ?><br>
 hak akses anda <?php echo $_SESSION['level']; ?><br>

 <a href="logout.php">LogOut</a>
