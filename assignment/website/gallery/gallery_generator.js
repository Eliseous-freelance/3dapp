//JavaScript Gallery generator
$(document).ready(function () {
    fetch("hook.php").then(res => {
        if (res.ok) {
            res.text().then(text => {
                let images = text.split("~");
                let htmlCode = "";
                images.forEach(image => {
                    // htmlCode = `<a href="./assets/images/${image}">
                    // <img class="card-img-top img-thumbnail" src="./assets/images/${image}">
                    // </a>`;
                    // htmlCode = `<div class="row"><div class="col-xs-12 col-sm-6"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img class="d-block w-100" src=".assets/images/${image}" alt="First slide"></div><div class="carousel-item"><img class="d-block w-100" src = "./assets/images/${image}" alt = "Second slide" ></div><div class="carousel-item"><img class="d-block w-100" src="./assets/images/${image}" alt="Third slide"></div><div class="carousel-item"><img class="d-block w-100" src="./assets/images/${image}" alt="Fourth slide"></div></div><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div></div></div> `;
                    htmlCode = `<img class="d-block w-100" src="./assets/images/${image}" alt="First slide">`
                })
                document.querySelector(".carousel-item").innerHTML = htmlCode;
            })
        }
    })
});