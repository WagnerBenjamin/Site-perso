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
    <div id="projet">

    </div>
</div>
<?php include_once "phpinclude/footer.php" ?>
</body>
</html>