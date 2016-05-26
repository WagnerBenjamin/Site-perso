<!DOCTYPE html>
<html>
<?php include_once "phpinclude/header.php" ?>
<body>
<?php
include_once "phpinclude/navMenu.php";
include_once "phpinclude/dbCon.php";
if(isset($_GET["text"])) {
    $insertQuery = $conn->prepare("INSERT INTO contact(name, email, content) VALUES ('" . $_GET['name'] . "', '" . $_GET['email'] . "', '" . $_GET['text'] . "')");
    $insertQuery->execute();
}
?>
<div id="content">
    <div id="form-main">
        <div id="form-div">
            <form class="form" id="form1">

                <p class="name">
                    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="name" />
                </p>

                <p class="email">
                    <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                </p>

                <p class="text">
                    <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Contenu de votre message"></textarea>
                </p>

                <div class="submit">
                    <input type="submit" name="submit" value="Envoyer" id="button-blue"/>
                    <div class="ease"></div>
                </div>
            </form>
        </div>
</div>
<?php include_once "phpinclude/footer.php" ?>
</body>
</html>