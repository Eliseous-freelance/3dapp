
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
window.onload = function runMVC() {
    swapMainContent("home");
}