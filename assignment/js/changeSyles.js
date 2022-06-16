let counter = 0;

/**
 * it changes the look of the body
 */
function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
            document.getElementById('bodyColor').style.color = 'blue';
            document.getElementById('footerColor').style.backgroundColor = '#FF9900';
            document.getElementById('footerColor').style.color = 'white';
            break;
        case 2:
            document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
            document.getElementById('bodyColor').style.color = 'green';
            document.getElementById('footerColor').style.backgroundColor = '#996699';
            document.getElementById('footerColor').style.color = 'white';
            break;
        case 3:
            document.getElementById('bodyColor').style.backgroundColor = 'coral';
            document.getElementById('bodyColor').style.color = 'white';
            document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
            document.getElementById('footerColor').style.color = 'brown';
            break;
        case 4:
            counter = 0;
            document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
            document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
            break;
    }
}

/**
 * changes the theme to the original format
 */
function changeBack() {
    document.getElementById('bodyColor').style.color = '#030303';
    document.getElementById('bodyColor').style.backgroundColor = 'rgba(182, 231, 243, 1.0)';
    document.getElementById('footerColor').style.backgroundColor = 'rgba(0, 102, 153, 1)';
    document.getElementById('footerColor').style.color = '#030303';
}
