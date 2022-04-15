
function swapMainContent(page){
    let dropdownItems = ['coke', 'sprite', 'fanta', 'pepper'];

    fetch('../application/mvc.php').then(res => res.text().then(text =>
    {
        for (let i=0; i< dropdownItems.length;i++){
            if (dropdownItems[i] == page){
                console.log(text)
                response  = page;Ï
            }
        }
    }))
}