 //adapted from example code 'benskitchen.com'



function changeColor() {
	if (document.getElementById('Model__WO_World').getAttribute('groundColor') == '0.051 0.051 0.051' && document.getElementById('Model__WO_World').getAttribute('skyColor') == '0.051 0.051 0.051') {
		document.getElementById('Model__WO_World').setAttribute('groundColor', '0.700 0.700 0.700');
		document.getElementById('Model__WO_World').setAttribute('skyColor', '1.00 1.00 1.00');
	}
	else {
		document.getElementById('Model__WO_World').setAttribute('groundColor', '0.051 0.051 0.051');
		document.getElementById('Model__WO_World').setAttribute('skyColor', '0.051 0.051 0.051');
	}
}

function hello() {
	currentMode = 'EXAMINE'
	document.getElementById('navType').setAttribute("type", currentMode);
	document.getElementById('right').setAttribute('set_bind', 'true');
	document.getElementById('front').setAttribute('set_bind', 'true');
}

function hello1() {
	document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('translation', '0.000000 1.000000 0.000000');
	document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('scale', '1.000000 1.000000 1.000000');
	document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('rotation', '0.000000 0.707107 0.707107 3.141593');
}

function spin() {
	var spinning = false;
	spinning = !spinning;
	document.getElementById('Model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
	spinning = false;
	document.getElementById('Model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel() {
	if (document.getElementById('Model__RotationTimer').getAttribute('enabled') != 'true')
		document.getElementById('Model__RotationTimer').setAttribute('enabled', 'true');
	else
		document.getElementById('Model__RotationTimer').setAttribute('enabled', 'false');
}

function wireframe() {
	var e = document.getElementById('Model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight() {
	lightOn = !lightOn;
	document.getElementById('Model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront() {
	document.getElementById('Model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack() {
	document.getElementById('Model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft() {
	document.getElementById('Model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight() {
	document.getElementById('Model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop() {
	document.getElementById('Model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom() {
	document.getElementById('Model__CameraBottom').setAttribute('bind', 'true');
}