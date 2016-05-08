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
    try {
        $conn = new PDO("mysql:host=$server;dbname=siteperso", $login, $pwd);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e){
        echo("not connected") . $e->getMessage();
    }
    $request = $conn->prepare("SELECT * FROM skillbar");
    $request->execute();
    $result = $request->fetchAll();
    print_r($result);
    ?>

    <div class="div-left">
        <h2>Techno Web</h2>
        <div class="skillbar clearfix " data-percent="60%">
            <div class="skillbar-title"><span>HTML5</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
            <div class="skill-bar-percent">60%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="40%">
            <div class="skillbar-title"><span>CSS</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
            <div class="skill-bar-percent">40%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title"><span>PHP5</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
            <div class="skill-bar-percent">50%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title"><span>SQL</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
            <div class="skill-bar-percent">50%</div>
        </div> <!-- End Skill Bar -->

        <h2>Développement jeu vidéo</h2>
        <div class="skillbar clearfix " data-percent="30%">
            <div class="skillbar-title"><span>UnrealEngine</span></div>
            <div class="skillbar-bar" style="background: #2ecc71;"></div>
            <div class="skill-bar-percent">30%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title"><span>Unity3D</span></div>
            <div class="skillbar-bar" style="background: #2ecc71;"></div>
            <div class="skill-bar-percent">50%</div>
        </div> <!-- End Skill Bar -->
    </div>
    <div class="div-right">
        <h2>Langages</h2>
        <div class="skillbar clearfix " data-percent="30%">
            <div class="skillbar-title"><span>JAVA</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent">30%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title"><span>C</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent">50%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="60%">
            <div class="skillbar-title"><span>C++</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent">60%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="80%">
            <div class="skillbar-title"><span>C#</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent">80%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="20%">
            <div class="skillbar-title"><span>Python</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent">20%</div>
        </div> <!-- End Skill Bar -->

        <h2>Systèmes</h2>
        <div class="skillbar clearfix " data-percent="40%">
            <div class="skillbar-title"><span>Linux</span></div>
            <div class="skillbar-bar" style="background: #2c3e50;"></div>
            <div class="skill-bar-percent">40%</div>
        </div> <!-- End Skill Bar -->
        <div class="clear"></div>

        <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title"><span>Windows</span></div>
            <div class="skillbar-bar" style="background: #2c3e50;"></div>
            <div class="skill-bar-percent">50%</div>
        </div> <!-- End Skill Bar -->
        </div>
<?php include_once "phpinclude/footer.php" ?>
</body>
</html>
