 //adapted from example code 'benskitchen.com'



function changeColor() {
	if (document.getElementById('ModelCoke__WO_World').getAttribute('groundColor') == '0.051 0.051 0.051' && document.getElementById('ModelCoke__WO_World').getAttribute('skyColor') == '0.051 0.051 0.051') {
		document.getElementById('ModelCoke__WO_World').setAttribute('groundColor', '0.700 0.700 0.700');
		document.getElementById('ModelCoke__WO_World').setAttribute('skyColor', '1.00 1.00 1.00');
	}
	else {
		document.getElementById('ModelCoke__WO_World').setAttribute('groundColor', '0.051 0.051 0.051');
		document.getElementById('ModelCoke__WO_World').setAttribute('skyColor', '0.051 0.051 0.051');
	}
}

function hello() {
	currentMode = 'EXAMINE'
	document.getElementById('navType').setAttribute("type", currentMode);
	document.getElementById('right').setAttribute('set_bind', 'true');
	document.getElementById('front').setAttribute('set_bind', 'true');
}

function hello1() {
	document.getElementById('ModelCoke__Cylinder_TRANSFORM').setAttribute('translation', '0.000000 1.000000 0.000000');
	document.getElementById('ModelCoke__Cylinder_TRANSFORM').setAttribute('scale', '1.000000 1.000000 1.000000');
	document.getElementById('ModelCoke__Cylinder_TRANSFORM').setAttribute('rotation', '0.000000 0.707107 0.707107 3.141593');
}





function spin() {
	var spinning = false;
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel() {
	if (document.getElementById('model__RotationTimer').getAttribute('enabled') != 'true')
		document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
	else
		document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

function wireframe() {
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight() {
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront() {
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack() {
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft() {
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight() {
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop() {
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom() {
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}