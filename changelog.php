<!DOCTYPE html>
<html>
<?php include_once "phpinclude/header.php" ?>
<body>
<?php
include_once "phpinclude/navMenu.php";
include_once "phpinclude/dbCon.php";
if(file_exists("changelog.txt")) {
    $changelogFile = file("changelog.txt");
    try {
        $insertQuery = $conn->prepare("INSERT INTO changelog(titre, description, date) VALUES ('" . $changelogFile[0] . "', '" . $changelogFile[1] . "', '" . date('Y-m-d') . "')");
        $insertQuery->execute();
        unlink("changelog.txt");
    } catch (PDOException $e) {
        var_dump($e);
    }
}
try {
    $changelogQuery = $conn->prepare("SELECT * FROM changelog ORDER by date DESC");
    $changelogQuery->execute();
    $changelogQuery = $changelogQuery->fetchAll();
} catch (PDOException $e){
    var_dump($e);
}
?>
<div id="content">
    <div id="changelog">
        <?php
        foreach($changelogQuery as $k => $v){ ?>
            <h2 class="changeTitle"><?php echo $v["titre"] ?></h2>   <span class="changeDate"><?php echo date("d/m/Y", strtotime($v["date"])) ?></span><br>
            <span class="changeDesc"><?php echo $v["description"] ?></span>
            <hr>
        <?php }
        ?>
    </div>
</div>
<?php include_once "phpinclude/footer.php" ?>
</body>
</html>