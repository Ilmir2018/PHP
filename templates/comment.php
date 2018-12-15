<form action="" enctype="multipart/form-data" method="post">
    <h3>Ваше имя</h3>
    <input type="text" name="name">
    <h3>Введите свой отзыв пожалуйста:</h3>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <input type="submit">
</form>

<?php
foreach ($row as $rows){
?>
<p>Имя: <?=$rows['name']?></p>
    <p>Коментарий: <?=$rows['content']?></p>
<?php }?>