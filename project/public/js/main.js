function addProduct(productId)
{
	quantity = $('.quantity#'+productId).val();
	if(quantity < 1)
		alert('Invalid quantity');
	else
		$.ajax({  
		        type: "POST",  
		        url: "/shoppingItems",  
		        data: {
		        	'productId': productId,
		        	'quantity': quantity,
		        },  
		        success: function(dataString) {  
		        }  
	    });
}