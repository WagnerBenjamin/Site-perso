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
    <div id="form-main">
        <div id="form-div">
            <form class="form" id="form1">

                <p class="name">
                    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                </p>

                <p class="email">
                    <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                </p>

                <p class="text">
                    <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
                </p>

                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>
            </form>
        </div>
</div>
<?php include_once "phpinclude/footer.php" ?>
</body>
</html>