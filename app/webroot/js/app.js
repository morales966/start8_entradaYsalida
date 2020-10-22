$(document).ready(function () {

	switch (copy_js.controller_menu) {
		case 'PAGES':
		    if (copy_js.action == 'home') {
	            $("#home").removeClass('itemNegro');
				$('#home').addClass("activeNav");
		    } else if(copy_js.action == 'about') {
	            $("#about").removeClass('itemNegro');
		        $('#about').addClass("activeNav");
		    } else {
	            $("#businnes").removeClass('itemNegro');
		        $('#businnes').addClass("activeNav");
		    }
		break;
	}
	
});

$(document).keyup(function(event){
	// event.preventDefault();
    // return false;
    if(event.which==13){
        login();
    }
});



function message_alert(mensaje,type){
    $("#message_alert").css("display", "block");
    var alert = '<div class="banneralert '+type+'"><i class="fa fa-4 fa-exclamation-triangle"></i><i class="fa fa-times closess"></i><div class="copiealertmin">'+type+'</div><div>'+mensaje+'</div></div>';
    $("#message_alert").html(alert);
    setTimeout(function() {$("#message_alert").fadeOut("slow");},9000);
    $(".closess").click(function() {
        $("#message_alert").hide();
        $("#flashMessage").hide();
    })
}
setTimeout(function() {$("#flashMessage").fadeOut("slow");},9000);