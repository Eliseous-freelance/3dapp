
function swapMainContent(page){
    let htmlCode = "";
    fetch(`application/mvc.php?id=${page}`).then(res => res.text().then(text =>
    {
        for (let i = 0; i < text.length; i++)
        {
            htmlCode += `${text[i]}`;
        }
        document.getElementById('mainContents').innerHTML = htmlCode;
    }))
}

function getModels() {
    let htmlCode = "";

    fetch("application/view/viewDrinksPages/viewDrinks.php").then(res => res.text().then(text =>
    {
        for (let i = 0; i < text.length; i++)
        {
            htmlCode += `${text[i]}`;
        }

        document.getElementById('mainContents').innerHTML = htmlCode;
    }))
}

window.onload = function runMVC() {
    swapMainContent("home");
    // fetch(`application/mvc.php?id=home`).then(res => res.text().then((txt) => {
    //     console.log(txt);
    // }));
}