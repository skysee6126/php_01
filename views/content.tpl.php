<!DOCTYPE html>
<html lang="en">
<?php include('header.inc.php'); ?>
<body>
<div class="tittle-box">
  <video muted autoplay loop>
    <source src="background.mp4" type="video/mp4">
    <strong>Your browser does not support the video tag.</strong>
  </video>
  <div class="tittle-text">
    <p>Guten Appetit!</p>
  </div>
</div>
<div class="content">
        <div class="explanation">
            <p>Catch Praise</p>
        </div>
        <div class="cases">
            <div class="case">
                <img src= "img/man.jpg" alt="man">
                <p>text</p>
            </div>
            <div class="case">
                <p>text</p>
                <img src= "img/woman.jpg" alt="woman">
            </div>
        </div>
        <div class="advantage">
            <p>text</p>
        </div>
        <div class="suggestion">
            <p>Suggestion</p>
            <form action="menu.php">
            <input type="submit" value="Start now!" />
            </form>
        </div>
    </div>

    <?php include('footer.inc.php'); ?>
</body>
</html>