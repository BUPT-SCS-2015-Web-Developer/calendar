$(document).ready(function() {
  $.getJSON("notice_module.php",function(msg){

    $.each(msg, function(i, field){
    	console.log(field.Ndetail);
      $(".important-notice").append("<div>"+field.Ndetail+"</div>");
    });
  });
});