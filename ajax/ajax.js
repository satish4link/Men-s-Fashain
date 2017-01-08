$(document).ready(function() {
	$.ajax({
		type: "Post",
		url: "companyInfo.php",
		success: function(data) {
			var obj = $.parseJSON(data);
			var result = "<ul>"
			$.each(obj, function() {
				result = result + "<h3>"+this['company_name'] +"</h3>"+
                        "<br/>" + this['street_name'] + 
                        "<br/>" + this['city_name'] +","+ this['postal_code'] +
                        "<br/>" + this['country'] + 
                        "<br/>Cell Number: " + this['phone_number'] + 
                        "</li>";
			     
            });
            result = result + "</ul>"
			$(".result").html(result);
		}
	});
});