<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roue de la chance EcoPlus</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <h1>Roue de la chance EcoPlus</h1>

    <div id="canvas-container">
        <canvas id="canvas" width="310" height="310" onclick="wheel.stopAnimation(false); wheel.rotationAngle=0; wheel.draw(); wheel.startAnimation();">
            Canvas n'est pas supporté, utilisez un autre navigateur.
        </canvas>
    </div>

    <p>Cliquez sur la roue pour lancer le tirage.</p>

    <script src="js/TweenMax.min.js"></script>
    <script src="js/Winwheel.min.js"></script>
    <script src="js/SweetAlert.min.js"></script>
    <script src="js/App.js"></script>
</body>
</html>