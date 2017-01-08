$(document).ready(function() {
	$.ajax({
		type: "Post",
		url: "accessoriesData.php",
		success: function(data) {
			var obj = $.parseJSON(data);
			var result = "<div class='col-xs-12 col-sm-4 col-md-3'>"
			$.each(obj, function() {
				//result = result + "<li>Product ID : " + this['product_id'] + " , Category Id : " + this['category_id'] + " , Product Name : " + this['product_name'] + " , Product DESC : " + this['product_desc'] + " , Product Rate : " + this['product_rate'] + " , Product Image : " + this['product_image'] + "</li>";
			     result = result + "<div class='product-data'>"+
                                    "<img src='assests/images/" + this['product_image'] + "' width='200' height='300'><br/>"+
                                    this['product_name'] +"<br />"+
                                    this['product_desc'] +"<br />"+
                                    "Price: &#8377;"+this['product_rate'] +"<br />"+
                                    "</div>";
            });
			result = result + "</div>"
            if ((result) % 4 == 0) {
            "<div class='clearfix'></div>"
        }
			$(".result").html(result);
		}
	});
});