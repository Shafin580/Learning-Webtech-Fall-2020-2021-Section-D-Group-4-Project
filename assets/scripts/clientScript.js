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

function userValidate(){
    
    var submit = document.querySelector("#Submit").value;
    
    var username = document.querySelector("#userName").value;
    
    var password = document.querySelector("#Password").value;
    
    if(username === "" || password === ""){
        
        document.querySelector("#response").innerHTML = "Missing Information";
        
    }else{
            
    var xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'php/loginValidate.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
            
            if(this.responseText=="Valid"){
                
                window.location.href = "view/client_home.php";
                
            }else{document.querySelector("#response").innerHTML = this.responseText;}
            
	    	
	    }
	}
	
	xhttp.send('submit='+submit+'&username='+username+'&password='+password);
        
    }
    
}


