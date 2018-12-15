<div class="second">
<div class="one">
<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>
    <?php if ($product['path'] != ''): ?>
<img width="300" src="http://<?= $_SERVER['HTTP_HOST'] ?>/images/<?=$product['path']?>" alt="sdfdsfsdf">
    <?php else: ?>
        <div class="plug">Фото отсутствует</div>
    <?php endif; ?>
</div>
<div class="two">
<p><?=$product['contents']?></p>
</div>
</div>
