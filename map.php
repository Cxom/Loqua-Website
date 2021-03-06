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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <title>Loqua Dynmap</title>
    </head>
    <body>
    <?php include 'includes/loqua-nav.php'; ?>
        <main>
            <iframe id="dynmap" src="http://192.169.44.186:8123" frameBorder="0" seamless="seamless">
            <p>Your browser does not support iframes.</p>
            </iframe>
        </main>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
