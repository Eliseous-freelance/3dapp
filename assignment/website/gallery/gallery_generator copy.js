//JavaScript Gallery generator
$(document).ready(function () {
    fetch("hook.php").then(res => 
    {
        if(res.ok)
        {
            res.text().then(text => 
            {
                let images = text.split("~");
                let htmlCode = "";
                images.forEach(image => 
                {
                    htmlCode = `<a href="assets/images/${image}">
                    <img class="card-img-top img-thumbnail" src="assets/images/${image}">
                    </a>`;
                })
                document.querySelector("#gallery").innerHTML = htmlCode;
            })
        }
    })
});