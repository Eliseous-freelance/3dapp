var counter =0;
function swap(selected){
        // <!-- First don t display all div id contents -->
    document.getElementById('home').style.display = 'none';
    document.getElementById('coke').style.display = 'none';
    document.getElementById('sprite').style.display = 'none';
    document.getElementById('pepper').style.display = 'none';

    // <!-- Then display the selected div id contents -->
    document.getElementById(selected).style.display = 'block';
}
function changeLook(){
    // <!-- used to change the style dynamically -->
    document.getElementById('theme').style.backgroundColor = '#770000';
    document.getElementById('theme').style.fontFamily = 'arial, sans-serif';
    document.getElementById('theme').style.color = 'white';
}
function countUp(){
    //<!-- simple incremental counter -->
    counter += 1;
    //<!-- assign the counter result to the inn html of the result id div tag -->
    document.getElementById('result').innerHTML = counter;

    /*
        * The countUP example could be adapted to change a texture or colour on your 3D model — 
        * you will find examples that do just this on www.x3dom.org, or you could adapt it to cycle through web page styles or brands in combination with the changeLook function. 
        */
}
function changeColor(newColor){
    var elem = document.getElementById("para1");
    elem.style.color = newColor;
}
