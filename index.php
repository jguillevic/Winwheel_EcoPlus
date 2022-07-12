<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roue de la chance EcoPlus</title>
</head>
<body>
    <h1>Roue de la chance EcoPlus</h1>
    <canvas id="canvas" width="500" height="500" onclick="wheel.stopAnimation(false); wheel.rotationAngle=0; wheel.draw(); wheel.startAnimation();">
        Canvas n'est pas supporté, utilisez un autre navigateur.
    </canvas>

    <script src="js/TweenMax.min.js"></script>
    <script src="js/Winwheel.min.js"></script>
    <script>
        let wheel = new Winwheel({
            'canvasId': 'canvas',
            'numSegments': 7,
            'textFontSize': 18,
            'segments': [
                {'fillStyle': '#0da978', 'text': 'Jérôme'},
                {'fillStyle': '#e0d944', 'text': 'Pierre'},
                {'fillStyle': '#947ef6', 'text': 'Christopher'},
                {'fillStyle': '#fbd4e1', 'text': 'Olivier'},
                {'fillStyle': '#2d7594', 'text': 'Brayan'},
                {'fillStyle': '#cc0d4e', 'text': 'Corentin'},
                {'fillStyle': '#ef2b06', 'text': 'Nathalie'},
            ],
            'lineWidth': 3,
            'animation': {
                'type': 'spinToStop',
                'duration': 5,
                'spins': 4,
                'callbackSound': playSound,
                'callbackFinished': alertChosenOne
            }
        });

        let audio = new Audio('sound/Tick.mp3');

        function playSound() {
            audio.pause();
            audio.currentTime = 0;
            audio.play();
        }

        function alertChosenOne() {
            alert(wheel.getIndicatedSegment().text + ' est l\'élu !');
        }
    </script>
</body>
</html>