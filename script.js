var localPlayer = new Player();

$(document).ready(function(){
	localPlayer.updateMoney(session_vars.money);
	localPlayer.loadGames(session_vars.games);
})

// $(document).on('click','button#saveUsername',function(){
	// var username = $('input#username').val();
	
	// localPlayer.setUsername(username)
	// $('div#usernameContainer').hide();
// })

$(document).on('click','button#buyComputer',function(){
	localPlayer.buyComputer();
})

$(document).on('click','button#createGame',function(){
	var param = {
		user_id: 1, 
		budget: $('input#budget').val(), 
		title: $('input#title').val(), 
		description: $('textarea#description').val(), 
		platform: $('input#platform').val(), 
		genre: 'multiplayer'};
	
	localPlayer.makeGame(param)
})

$(document).on('click','button#exit',function(){
	window.location.href = 'mainUI.php';
})

$(document).on('click','.menu-icon',function(){
	$(this).toggleClass("active");
	$(".navigation-menu").toggleClass("active");
	$(".menu-icon i").toggleClass("fa-times");
})