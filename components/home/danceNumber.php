<?php
session_start();
require_once './helpers/db.php';
$connection = $_SESSION['connection'];

$sqlResponse = "SELECT * FROM `services` WHERE type = 'танцевальные номера';";
$response = $connection -> query($sqlResponse);

?>

<section class='wrapper'>
  <div class='inner innerBlocks'>
    <div class='titles'>
      <span class='serifTitle'>
        танцевальные
      </span>
      <span class='sansSerifTitle'>
        номера
      </span>
    </div>
    <div class='blocks'>
      <?php
      while ($preparedData = mysqli_fetch_assoc($response)) {
        echo "
        <div class='block'>
          <img class='blockImage' src=".$preparedData['image']." alt='blockImage'>
          <div class='blockBottom'>
            <span class='blockTitle'>
              ".$preparedData['title']."
            </span>
            <span class='blockDescription'>
              ".$preparedData['description']."
            </span>
          </div>
      </div>
        ";
      }
      ?>
    </div>
  </div>
</section>