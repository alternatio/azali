<?php
$blocks = [];
$block = [
  'title' => 'Название номера',
  'image' => '/public/images/blockImage.png',
  'description' =>
    'Описание номера: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.',
];

for ($i = 0; $i < 9; $i++) {
  $blocks[] = $block;
}
?>

<section class='wrapper'>
  <div class='inner danceNumbersInner'>
    <div class='titles'>
      <span class='serifTitle'>
        национальные
      </span>
      <span class='sansSerifTitle'>
        обряды
      </span>
    </div>
    <div class='blocks'>
      <?php foreach ($blocks as $block): ?>

        <div class='block'>
          <img src="<?= $block['image'] ?>" alt='blockImage'>
          <div class='blockBottom'>
            <span class='blockTitle'>
              <?= $block['title'] ?>
            </span>
            <span class='blockDescription'>
              <?= $block['description'] ?>
            </span>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
  </div>
</section>