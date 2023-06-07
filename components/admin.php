<?php
session_start();
require_once './helpers/db.php';
$connection = $_SESSION['connection'];

$sqlResponse = "SELECT * FROM `users`";
$response = $connection -> query($sqlResponse);

$sqlResponse1 = "SELECT * FROM `applications`";
$response1 = $connection -> query($sqlResponse1);

//while ($preparedData = mysqli_fetch_assoc($response1)) {
//  var_dump($preparedData);
//}
?>

<section class='wrapper adminWrapper'>
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
  <div class='inner admin'>
    <span class='adminTitle'>Заявки</span>
    <div class='applications'>
      <div>
        ID
      </div>
      <div>
        userID
      </div>
      <div>
        userEmail
      </div>
      <div>
        message
      </div>
      <?php
      while ($preparedData = mysqli_fetch_assoc($response1)) {
        echo "
          <div>"
          . $preparedData['id'] .
          "</div>
          <div>"
          . $preparedData['userId'] .
          "</div>
          <div>"
          . $preparedData['userEmail'] .
          "</div>
          <div>"
          . $preparedData['message'] .
          "</div>";
      }
      ?>
    </div>
  </div>
</section>
