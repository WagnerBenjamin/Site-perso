<!DOCTYPE html>
<html>
<?php include_once "phpinclude/header.php" ?>
<script src="jquery.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('.skillbar').each(function() {
            jQuery(this).find('.skillbar-bar').animate({
                width: jQuery(this).attr('data-percent')
            }, 4000);
        });
    });
</script>
<body>
<?php include_once "phpinclude/navMenu.php" ?>
<div id="content">
    <?php
    $server = "localhost";
    $login = "root";
    $pwd = "";
    $arrColor = array(
        "game" => "2ecc71",
        "web" => "e67e22",
        "language" => "3498db",
        "system" => "2c3e50"
    );
    try {
        $conn = new PDO("mysql:host=$server;dbname=siteperso", $login, $pwd);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo("not connected") . $e->getMessage();
    }
    $skillLeft = $conn->prepare("SELECT * FROM skillbar WHERE category IN ('web', 'system')");
    $skillLeft->execute();
    $skillLeft = $skillLeft->fetchAll();
    echo "<div class='div-left'>";
    foreach($skillLeft as $v){
        ?>
        <div class="skillbar clearfix " data-percent="<?php echo $v["value"] ?>%">
            <div class="skillbar-title"><span><?php echo $v["skill"] ?></span></div>
            <div class="skillbar-bar" style="background: #<?php echo $arrColor[$v["category"]] ?>;"></div>
            <div class="skill-bar-percent"><?php echo $v["value"] ?>%</div>
        </div> <!-- End Skill Bar -->
        <?php
    }
    echo "</div>";
    $skillRight = $conn->prepare("SELECT * FROM skillbar WHERE category IN ('game', 'language')");
    $skillRight->execute();
    $skillRight = $skillRight->fetchAll();
    echo "<div class='div-right'>";
    foreach($skillRight as $v){
        ?>
        <div class="skillbar clearfix " data-percent="<?php echo $v["value"] ?>%">
            <div class="skillbar-title"><span><?php echo $v["skill"] ?></span></div>
            <div class="skillbar-bar" style="background: #<?php echo $arrColor[$v["category"]] ?>;"></div>
            <div class="skill-bar-percent"><?php echo $v["value"] ?>%</div>
        </div> <!-- End Skill Bar -->
        <?php
    }
    echo "</div>";
    ?>

<?php include_once "phpinclude/footer.php" ?>
</body>
</html>
