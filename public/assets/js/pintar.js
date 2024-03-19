document.addEventListener('DOMContentLoaded', function () {
    const mainCanvas = document.getElementById('main-canvas');
    const context = mainCanvas.getContext("2d");
    const urlParams = new URLSearchParams(window.location.search);
    const plantilla = urlParams.get('plantilla');
    const imgBocetoSelect = document.getElementById('select-template');

    if (plantilla) {
        const image = new Image();
        image.src = plantilla;
        imgBocetoSelect.src = plantilla;
        image.onload = function () {
            context.drawImage(image, 0, 0, mainCanvas.width, mainCanvas.height);
        };
    }

    let initialX;
    let initialY;
    let strokeColor = '#000000'
    let lineWidth = 5;

    const dibujar = (cursorX, cursorY) => {
        context.beginPath();
        context.moveTo(initialX, initialY);
        context.lineWidth = lineWidth;
        context.strokeStyle = strokeColor;
        context.lineCap = 'round';
        context.lineJoin = 'round';
        context.lineTo(cursorX, cursorY);
        context.stroke();

        initialX = cursorX;
        initialY = cursorY;
    }

    const mouseDown = (evt) => {
        initialX = evt.offsetX;
        initialY = evt.offsetY;
        dibujar(initialX, initialY);
        mainCanvas.addEventListener('mousemove', mouseMoving);
    };

    const mouseMoving = (evt) => {
        dibujar(evt.offsetX, evt.offsetY);
    }

    const mouseUp = () => {
        mainCanvas.removeEventListener('mousemove', mouseMoving);
    }
    const colorPicker = document.getElementById('color-picker');
    const lineWidthSlider = document.getElementById('line-width-slider');
    const lineWidthValue = document.getElementById('line-width-value');
    colorPicker.addEventListener('input', (evt) => {
        strokeColor = evt.target.value;
    });

    lineWidthSlider.addEventListener('input', (evt) => {
        lineWidth = evt.target.value;
        lineWidthValue.textContent = lineWidth;
    });

    mainCanvas.addEventListener('mousedown', mouseDown);
    mainCanvas.addEventListener('mouseup', mouseUp);
});
