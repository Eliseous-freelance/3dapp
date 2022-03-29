var spinning = false;

function spin(){
    spinning = !spinning;
    document.getElementById('model_RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation(){
    spinning = false;
    document.getElementById('model_RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel(){
    if(document.getElementById('model_RotationTimer').getAttribute('enabled')!='true')
    document.getElementById('model_rotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model_RotationTimer').setAttribute('enabled', 'false');
}