



fetch(`/ed385/3dapp/assignment/website/application/view/load.php`).then(res => res.text().then((txt) => {
    console.log(txt);
    displayData(data=txt, database=txt[txt.length - 2], elementId=txt[txt.length - 2])
}));


function displayData(data, database, elementId){
    if (database == 'infoData'){
        // document.getElementById(elementId).innerHTML = data['title'];
        // document.getElementById(elementId).innerHTML = data['description'];
        // document.getElementById(elementId).innerHTML = data['imagePath'];
        // document.getElementById(elementId).innerHTML = data[''];
        console.log(data);
    }
    else if (database == 'Model_3D'){
        document.getElementById(elementId).innerHTML = data['creationMethod'];
        document.getElementById(elementId).innerHTML = data['modelTitle'];
        document.getElementById(elementId).innerHTML = data['modelSubtitle'];
        document.getElementById(elementId).innerHTML = data['modelDescription'];
        document.getElementById(elementId).innerHTML = data['imagePath'];
    }
    else{
        console.log("wrong database");
    }
}