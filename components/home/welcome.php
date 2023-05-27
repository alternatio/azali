<?php
$items = [
	'Профессиональное танцевальное сопровождение для любого события.',
	'Профессиональная хореография, яркие и дизайнерские костюмы.',
	'Шоу-программы различной тематики и продолжительности.',
	'Яркие эмоции, незабываемые впечатления и лучшее настроение!',
]; ?>

<section class='welcome'>
  <div class='welcomeInner'>
    <img class='welcomeImage' src='/public/images/welcome.png' alt='welcome'>
    <div class='welcomeRightPart'>
      <span class='welcomeTitle'>
        добро пожаловать на сайт <br> театра танца “Azali”
      </span>
      <span class='welcomeDescription'>
        Создадим индивидуальный выход с участием молодоженов или «виновника торжества» – под вашу любимую музыку и с учетом ваших пожеланий!
      </span>
      <div class='welcomeList'>
        <?php foreach ($items as $item): ?>
          <span class='welcomeItem'>
            <?= $item ?>
          </span>
        <?php endforeach; ?>
      </div>
      <span class='welcomeDescription'>
        Узнай подробнее о наших услугах или бронируй танец!
      </span>
      <div class='welcomeButtons'>
        <a class='flat-button welcomeButton' href='tel:89081003107'>
          Забронировать
        </a>
<!--        <button class='outline-button welcomeButton'>-->
<!--          Подробнее-->
<!--        </button>-->
      </div>
    </div>
  </div>
</section>