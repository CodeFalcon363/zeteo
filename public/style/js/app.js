$(document).ready(function(){
	/*Update page class */
	$.ajax({
		url: "/?page_class",
		type: "GET",
		success: function(data){
			var page_profile = JSON.parse(data);
			$("." + page_profile['class']).addClass("active");
		}
	});


	$(".click-open-menu").click(function(){

		if ($("#" + $(this).attr("data-card")).is(":hidden")) {
			$('.nav-cards:visible').each(function(){
			    $(this).fadeToggle( "slow", "linear" );
			})
			$("#" + $(this).attr("data-card")).fadeToggle( "slow", "linear" );
		}else{
			$('.nav-cards:visible').each(function(){
			    $(this).fadeToggle( "slow", "linear" );
			})
		}
	});

});


$(document).mouseup(function(e) 
{
    var container = $(".nav-cards-deny");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        $('.nav-cards:visible').each(function(){
			$(this).fadeToggle( "slow", "linear" );
		})
    }
});


function modal_init() {
	$("#staticBackdrop").html('<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"><div class="modal-content"><div class="modal-header justify-content-between"><span class="h3">Please wait....</span><i class="fa fa-spinner fa-spin h3"></i></div></div></div>');
}

/*Process logout*/

$(".logout-button").click(function(){
	modal_init();
	$("#staticBackdrop").modal('toggle');
	$.ajax({
		url: '/page/contents/?content=logout-confirm',
		type: 'POST',
		success: function(data){
			$("#staticBackdrop").html(data);
		}
	});
});
