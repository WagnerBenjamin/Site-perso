<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/skillbar.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
    <meta charset="utf-8"/>
    <title>WAGNER Benjamin</title>
    <?php
    session_start(); $_SESSION["user"] = null;
    if(isset($_GET["admin"])){
        $_SESSION["user"] = $_GET["admin"];
    }
    ?>
</head>