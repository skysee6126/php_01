<?php session_start(); ?>
<!DOCTYPE html>
<html lang='ja'>
    <?php include('views/header.inc.php'); ?>
    <body>
    <div class="tittle">
        <h2>Menu Recommendation</h2>
        <p>今日何を食べるか悩んではいませんか？<br>
        そんなあなたに簡単なアドバイスを！</p>
    </div>
    <div class="content">
        <div class="question"></div>
            <img class="que__img" src="img/meat.jpg" alt="meet">
            <img class="que__img" src="img/fish.jpg" alt="fish">
            <img class="que__img" src="img/veg.jpg" alt="vegetable">
            <p>以下のフォームに名前を入力し、Submitを押してみてください!</p>
        <div class="submit__form">
            <form method="post" action="menu_result.php">
                <p>Name: <input type="text" name="name"></p>
                <p><input type="submit" value="Submit"></p>
            </form>
        </div>
    </div>
    <?php include('views/footer.inc.php'); ?>
</div>
    </body>
</html>
