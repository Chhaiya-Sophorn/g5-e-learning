<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Student Profile</title>
</head>
<body>    
  
  <?php  
    require 'database/database.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $statement = $connection->prepare("SELECT * FROM users WHERE user_id LIKE :id");
      $statement->execute([
          ':id' => $_POST['id']
      ]);
      $users = $statement->fetchAll();
  }

  foreach ($users as $user):
  ?>
  
  <div class="container text-center mt-5 shadow-lg">
    <img src="uploading/<?= $user['profile_image']?>" alt="Profile Image" class="rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
    <h2 class="mt-3"><?=$user['name'] ?></h2>
    <p>Email: <?=$user['email'] ?></p>
    <p>Phone: <?=$user['phone'] ?></p>
    <p>Gender: <?=$user['gender'] ?></p>
    <p>Role: Student</p>
    <p>About Me:</p>
    <p>I am a good student</p>
  </div>
  <?php endforeach ?>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>