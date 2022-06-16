
let rotation_x = 0.0;
let rotation_y = 0.0;
let rotation_z = 0.0;
let rotation_w = 0.0;
let spinning = false;



function changeColor() {
	if (document.getElementById('Model__WO_World') !==null) {
		if (document.getElementById('Model__WO_World').getAttribute('groundColor') == '0.051 0.051 0.051' && document.getElementById('Model__WO_World').getAttribute('skyColor') == '0.051 0.051 0.051') {
			document.getElementById('Model__WO_World').setAttribute('groundColor', '0.700 0.700 0.700');
			document.getElementById('Model__WO_World').setAttribute('skyColor', '1.00 1.00 1.00');
		} else {
			document.getElementById('Model__WO_World').setAttribute('groundColor', '0.051 0.051 0.051');
			document.getElementById('Model__WO_World').setAttribute('skyColor', '0.051 0.051 0.051');
		}
	}
}

function changeView() {
	if (document.getElementById('Model__Cylinder_TRANSFORM') !==null) {
		document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('translation', '0.0 0.0 1.0');
		document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('scale', '0.134937 0.134937 0.095174');
		document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('rotation', '0.000000 0.707107 0.707107 3.141593');  //x, y, w, z
	}
	}

function spin() {
	if (document.getElementById('Model__Cylinder_TRANSFORM') !==null) {
		spinning = toggleSpinning(true);
		while (spinning) {
			document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('rotation', rotation_x.toString() + ' ' + rotation_y.toString() + ' ' + rotation_w.toString() + ' ' + rotation_z.toString());
			rotation_x += 0.001;
			// rotation_w +=0.0000001;
			rotation_z += 0.001;
			rotation_y += 0.001;

			if (rotation_x === 1 && rotation_y === 1 && rotation_z === 1) {
				spinning = toggleSpinning(false)
			}
		}
	}
}

function toggleSpinning(spinning){
	return spinning;
}

function stopRotation(spinning=false) {
	if (document.getElementById('Model__Cylinder_TRANSFORM') !==null) {
		if (!spinning) {
			document.getElementById('Model__Cylinder_TRANSFORM').setAttribute('rotation', '0.000000 0.707107 0.707107 3.141593');
		}
	}
}




function toggleLight() {
	if (document.getElementById('Model__headlight') !==null) {
		document.getElementById('Model__headlight').setAttribute('headlight', lightOn.toString());
	}
}
