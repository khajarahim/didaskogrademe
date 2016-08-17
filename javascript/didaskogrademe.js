YUI().use("node","io-base", function(Y) {
	
	var ajaxUri = "../blocks/didaskogrademe/ajax";
	var loadGradeMeContent = function(){
		var ajaxUrl = ajaxUri+"/grademe.php?action=load&format=json";
		Y.io(ajaxUrl, {
			 on: {
				start: function (){
					Y.one("#didaskoGradeMeButton").set("disabled", true);
					Y.one("#didaskoGradeMePanel").setHTML("Loading....");
				},
				success: function (x, o) {
					 var parsedResponse;
					 try {
						 d = (o.responseText);
					 } catch (e) {
						 console.log("JSON Parse failed!");
						 return;
					 }
					 Y.one("#didaskoGradeMePanel").setHTML(d);
				 }
			 }
		});						
	}
	
	Y.one("#didaskoGradeMeButton").on("click",function(e) {
		loadGradeMeContent();
		Y.one("#didaskoGradeMeButton").hide();
	});	
});