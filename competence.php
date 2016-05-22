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
    if(isset($_GET["id"])){
        try {
            $updateQuery = $conn->prepare("UPDATE skillbar SET skill='" . $_GET['skill'] . "',value='" . $_GET['value'] . "',category='" . $_GET['category'] . "' WHERE id ='" . $_GET['id'] . "' ");
            var_dump($_GET);
            $updateQuery->execute();
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
    try {
        $skillLeft = $conn->prepare("SELECT * FROM skillbar WHERE category IN ('web', 'system') ORDER BY category");
        $skillLeft->execute();
        $skillLeft = $skillLeft->fetchAll();
        $skillRight = $conn->prepare("SELECT * FROM skillbar WHERE category IN ('game', 'language') ORDER BY category");
        $skillRight->execute();
        $skillRight = $skillRight->fetchAll();
    } catch (PDOException $e){
        var_dump($e);
    }
    echo "<div class='div-left'>";
    $prev = null;
    $categoryName = array(
        'web' => 'Développement Web',
        'game' => 'Développement Jeu',
        'system' => 'Système',
        'language' => 'Développement',
    );
    foreach($skillLeft as $v){
        if($prev != $v["category"]){
            echo"<h2>".$categoryName[$v["category"]]."</h2>";
        }
        ?>
        <div class="skillbar clearfix " data-percent="<?php echo $v["value"] ?>%">
            <div class="skillbar-title"><span><?php echo $v["skill"] ?></span></div>
            <div class="skillbar-bar" style="background: #<?php echo $arrColor[$v["category"]] ?>;"></div>
            <div class="skill-bar-percent"><?php echo $v["value"] ?>%</div>
        </div> <!-- End Skill Bar -->
        <?php
        $prev = $v["category"];
        if($_SESSION["user"] == 'admin'){
            ?>
            <form class="adminSkill">
                skill : <input type="text" value="<?php echo $v['skill'] ?>" name="skill">
                Valeur : <input type="number" value="<?php echo $v['value'] ?>" name="value"><br>
                Catégorie : <input type="text" value="<?php echo $v['category'] ?>" name="category"><br>
                Id : <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
                <button type="submit" value="submit">Modifié !</button>
            </form>
            <?php
        }
    }
    echo "</div><div class='div-right'>";
    foreach($skillRight as $v){
        if($prev != $v["category"]){
            echo"<h2>".$categoryName[$v["category"]]."</h2>";
        }
        ?>
        <div class="skillbar clearfix " data-percent="<?php echo $v["value"] ?>%">
            <div class="skillbar-title"><span><?php echo $v["skill"] ?></span></div>
            <div class="skillbar-bar" style="background: #<?php echo $arrColor[$v["category"]] ?>;"></div>
            <div class="skill-bar-percent"><?php echo $v["value"] ?>%</div>
        </div> <!-- End Skill Bar -->
        <?php
        $prev = $v["category"];
        if($_SESSION["user"] == 'admin'){
            ?>
            <form class="adminSkill">
                skill : <input type="text" value="<?php echo $v['skill'] ?>" name="skill">
                Valeur : <input type="number" value="<?php echo $v['value'] ?>" name="value"><br>
                Catégorie : <input type="text" value="<?php echo $v['category'] ?>" name="category"><br>
                Id : <input type="hidden" value="<?php echo $v['id'] ?>" name="id">
                <button type="submit" value="submit">Modifié !</button>
            </form>
            <?php
        }
    }
    echo "</div>";
    ?>

<?php include_once "phpinclude/footer.php" ?>
</body>
</html>
