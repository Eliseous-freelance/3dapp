
function loadLibrary() {
    console.log("hello");
//stores newly generated gallery HTML code
    let htmlCode = ""; //variable used to store the newly generated gallery HTML code.

    fetch("./gallery/hook.php").then(res => res.text().then(text => {
        response = text.split("~");
        for (let i = 0; i < response.length; i++) {
            htmlCode += `<img class="card-img-top img-fluid img-thumbnail" src="./../../gallery/${response[i]}" alt="coca cola">`;
        }

        document.getElementById('gallery_images').innerHTML = htmlCode;
    }));

}
