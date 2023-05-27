<?php
session_start();
require_once './helpers/db.php';
$connection = $_SESSION['connection'];
$email = $_SESSION['userEmail'];
$sqlResponse = "SELECT * FROM `users`";
$response = $connection -> query($sqlResponse);
?>

<section class='wrapper'>
  <div class='inner admin'>
    <span class='adminTitle'>Пользователи</span>
    <div class='users'>
      <div>
        ID
      </div>
      <div>
        Name
      </div>
      <div>
        Surname
      </div>
      <div>
        Email
      </div>
      <div>
        Password
      </div>
      <?php
      while ($preparedData = mysqli_fetch_assoc($response)) {
        echo "
          <div>"
          . $preparedData['id'] .
          "</div>
          <div>"
          . $preparedData['name'] .
          "</div>
          <div>"
          . $preparedData['surname'] .
          "</div>
          <div>"
          . $preparedData['email'] .
          "</div>
          <div>"
          . $preparedData['password'] .
          "</div>";
      }
      ?>
    </div>
  </div>
</section>
