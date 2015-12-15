function addProduct(productId)
{
	$.ajax({  
	        type: "POST",  
	        url: "/shoppingItems",  
	        data: {'productId': productId},  
	        success: function(dataString) {  
	            alert('success');
	        }  
    });
}