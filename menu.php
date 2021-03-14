<!DOCTYPE html>
<html lang='ja'>
    <?php include('views/header.inc.php'); ?>
    <body>
    <div class="tittle">
        <h2>Menu Recommendation</h2>
    </div>
    <div class="content">
        <div class="explan">
            <p></p>
        </div>
        <div class="question"></div>
            <p></p>
            <img class="que__img" src="img/meat.jpg" alt="meet">
            <img class="que__img" src="img/fish.jpg" alt="fish">
            <img class="que__img" src="img/veg.jpg" alt="vegetable">
            <p>Please fill your name in the form and submit!</p>
        <div class="submit">
            <form method="post" action="menu_result.php">
                <p>Name:<input type="text" name="name"></p>
                <p><input type="submit" value="Sbumit"></p>
            </form>
        </div>
    </div>
    <?php include('views/footer.inc.php'); ?>
</div>
    </body>
</html>
