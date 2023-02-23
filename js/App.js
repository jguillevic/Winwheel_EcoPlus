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
        {'fillStyle': '#cc0d4e', 'text': 'Alice'},
        {'fillStyle': '#ef2b06', 'text': 'Nathalie'},
        {'fillStyle': '#c09b7a', 'text': 'Victor'},
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

let audioTick = new Audio('sound/Tick.mp3');

function playSound() {
    audioTick.pause();
    audioTick.currentTime = 0;
    audioTick.play();
}

let audioNyan = new Audio('sound/NyanCat.mp3');

function alertChosenOne() {
    audioNyan.play();

    Swal.fire({
        text: wheel.getIndicatedSegment().text + ' est l\'élu !',
        imageUrl: 'img/NyanCat.gif',
        imageAlt: 'Nyan Cat'
      }).then(function() {
        audioNyan.pause();
        audioNyan.currentTime = 0;
      });
}