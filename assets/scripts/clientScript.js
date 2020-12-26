'use strict'

function productInfo(){
    
    var productId = document.getElementById('productName');
    
    productId = productId.options[productId.selectedIndex].value;
    
    if(productId == "Select"){
        
        document.getElementById("productId").value = "";
        document.getElementById("productPrice").value = "";
        document.querySelector("#productQtyBought").value = "";
        
        
    }else{
        
        var productInfo = productId.split("|");
    
        document.getElementById("productId").value = productInfo[0];
        document.getElementById("productPrice").value = productInfo[1];
        document.querySelector("#productQtyBought").value = productInfo[2];
        
    }
    
}


