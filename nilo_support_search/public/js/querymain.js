$actactivity_name == null ? (
	$( document ).ready(function() {
    	$("#info").hide();
	}) 
):(
	$( document ).ready(function() {
		$("#identity").click(function() {
			$("#info").show();
		});
	})
); 