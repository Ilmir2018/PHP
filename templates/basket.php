<h1>Корзина</h1>
<style>
    * {
        font-size: 20px;
    }
    .product{
        display: flex;
        width: 1200px;
        height: 200px;
        margin-right: 20px;
        border: solid 1px black;
    }
    h1{
        margin: 0 20px 0 20px;
    }
    h2{
        margin: 0 20px 0 20px;
    }
    p{
        margin: 0 20px;
    }
</style>
<div class="container">
    <?php foreach ($basket as $baskets): if ($_SESSION['cart'][$baskets['id']]['qty'] == 0) {continue;}?>
            <div class="product">
                <h1><?=$baskets['id']?></h1>
                <img width="300" height="200" src="images/small/<?= $baskets['path']?>" alt="Фото">
                <h2><?=$baskets['name']?></h2>
                <p><?=$baskets['description']?></p>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$baskets['id']?>"/>
                    <input type="submit" value="Удалить из корзины">
                </form>
                <p>Количество: <?=$_SESSION['cart'][$baskets['id']]['qty']?></p>
                <p>Сумма:<?=$baskets['price']*$_SESSION['cart'][$baskets['id']]['qty']?></p>
            </div>
    <?php endforeach; ?>
</div>
