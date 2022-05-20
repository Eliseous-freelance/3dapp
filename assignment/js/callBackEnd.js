const loadScript = (FILE_URL, async = true, type = "text/javascript") => {
    return new Promise((resolve, reject) => {
        try {
            const scriptEle = document.createElement("script");
            scriptEle.type = type;
            scriptEle.async = async;
            scriptEle.src =FILE_URL;

            scriptEle.addEventListener("load", (ev) => {
                resolve({ status: true });
            });

            scriptEle.addEventListener("error", (ev) => {
                reject({
                    status: false,
                    message: `Failed to load the script ${FILE_URL}`
                });
            });

            document.body.appendChild(scriptEle);
        } catch (error) {
            reject(error);
        }
    });
};




function loadLib()
{
    loadScript("js/models_animation/animations.js")
        .then(data => {
            console.log("Script loaded successfully", data);
        })
        .catch(err => {
            console.error(err);
        });

    loadScript("gallery/gallery_generator.js")
        .then(data => {
            console.log("Script loaded successfully", data);
        })
        .catch(err => {
            console.error(err);
        });

    loadScript("js/x3dom.js")
        .then(data => {
            console.log("Script loaded successfully", data);
        })
        .catch(err => {
            console.error(err);
        });
    loadScript("js/getViewPages.js")
        .then(data => {
            console.log("Script loaded successfully", data);
        })
        .catch(err => {
            console.error(err);
        });

}
