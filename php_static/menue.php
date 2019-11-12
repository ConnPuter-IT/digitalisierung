<?php
    $landing = $_GET['id'];
?>

<body class="homepage">
<!-- Header -->
<div id="header">
    <div class="container">
    <!-- Logo -->
        <div id="logo">
            <h1>
                <a href="http://www.digitalisierung-leipzig.de">
                Digitalisierung Leipzig</a>
            </h1>
            <span>Ihre Bilder in guten H&auml;nden</span>
        </div>
    <!-- /Logo -->
    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li <?php if($landing=="start"){
                    print('class="active"');
                    } ?>>
                <a href="../sites/start.php?id=start">Homepage</a></li>

                <li <?php if($landing=="dia"){
                    print('class="active"');
                    } ?>>
                <a href="../sites/dia.php?id=dia">Dias</a></li>

                <li <?php if($landing=="nega"){
                    print('class="active"');
                    } ?>>
                <a href="../sites/negative.php?id=nega">Negative</a></li>

                <li <?php if($landing=="papier"){
                    print('class="active"');
                    } ?>>
                <a href="../sites/papierbilder.php?id=papier">Papierbilder</a></li>

                <li <?php if($landing=="wissen"){
                    print('class="active"');
                    } ?>>
                <a href="../sites/wissenswertes.php?id=wissen">Wissenswertes</a></li>

                <li <?php if($landing=="gale"){
                    print('class="active"');
                    } ?>>
                <a href="../sites/galerie.php?id=gale">Galerie</a></li>

                <li <?php if($landing=="kont"){
                    print('class="active"');
                    } ?>>
                <a href="../sites/kontakt.php?id=kont">Kontakt</a></li>
            </ul>
        </nav>
    <!-- /Nav -->
    </div>
</div>
<!-- /Header -->
