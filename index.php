<?php

include_once __DIR__ . "/assets/classes/Person.php";
include_once __DIR__ . "/assets/classes/User.php";
include_once __DIR__ . "/assets/classes/Comment.php";
include_once __DIR__ . "/assets/classes/Post.php";
include_once __DIR__ . "/assets/classes/Admin.php";
include_once __DIR__ . "/assets/database/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Il Blog Di Franca</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <h1>Il Franco Forte Blog</h1>
  </header>
  <main class="main-blog">
    <div class="profiles">
      <?php foreach ($users as $key => $user) { ?>
        <div class="user-card">
          <figure class="img-box">
            <img src="<?php echo $user->img; ?>" alt="$key">
          </figure>
          <div class="info-user">
            <ul>
              
            </ul>
            <h3 class="name"><?php echo "{$user->getFullName()}" ; ?></h3>

            <h3 class="account-info"><?php echo " Account ID: {$user->accountId} - Nickname: {$user->accountName}" ; ?></h3>

            <h3 class="contact"><?php echo " email: {$user->email} - Cel: {$user->phonewNumber}" ; ?></h3>
            
            <h3 class="role">Role: <?php 
            if ($user->isAdmin) {
              echo 'Admin - ';
            }if ($user->isModerator) {
              echo ' - Moderator -';
            }if ($user->isWriter) {
              echo ' - Writer';
            } else {
              echo ' User ';
            }; ?></h3>
            <h3><?php echo " Last Login: {$user->lastLogin}" ; ?></h3>
          </div>
        </div>
        <!-- /.user-card -->
      <?php } ?>
    </div>
    <!-- /.profile -->  
  </main>
  <!-- /.main-blog -->
</body>
</html>