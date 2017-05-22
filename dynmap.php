<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <base href="./">
        <link rel="stylesheet" type="text/css" href="styles/reset.css"/>
        <link rel="stylesheet" type="text/css" href="styles/stylesheet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/loqua-nav.css"/>
        <!--<script src="/scripts/jquery.js"></script>
		<script type="text/javascript" src="script.js"></script>-->
        <script type="text/javascript" src="includes/rand-background.js"></script>
        <title>Loqua Dynmap</title>
    </head>
    <body>
    <?php include 'includes/loqua-nav.php'; ?>
        <main>
            <iframe id="dynmap" src="http://192.169.44.186:8123" frameBorder="0" seamless>
            <p>Your browser does not support iframes.</p>
            </iframe>
        </main>
    </body>
</html>
