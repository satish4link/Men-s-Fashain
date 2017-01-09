$(document).ready(function() {
	$.ajax({
		type: "Post",
		url: "jsontest.php",
		success: function(data) {
			var obj = $.parseJSON(data);
			var result = "<ul>"
			$.each(obj, function() {
				//result = result + "<li>Product ID : " + this['product_id'] + " , Category Id : " + this['category_id'] + " , Product Name : " + this['product_name'] + " , Product DESC : " + this['product_desc'] + " , Product Rate : " + this['product_rate'] + " , Product Image : " + this['product_image'] + "</li>";
            });
			result = result + "</ul>"
			$(".result").html(result);
		}
	});
});