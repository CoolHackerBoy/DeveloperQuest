var localPlayer = new Player();

$(document).ready(function(){
	$('div#mainUI').hide();
	$('div#usernameContainer').hide();
})

$(document). on('click','button#startGame',function(){
	$('div#titalContainer').hide();
	$('div#usernameContainer').show();
})

$(document).on('click','button#saveUsername',function(){
	var username = $('input#username').val();
	
	localPlayer.setUsername(username)
	$('div#usernameContainer').hide();
	$('div#mainUI').show();
})

$(document).on('click','button#buyComputer',function(){
	localPlayer.buyComputer();
})

$(document).on('click','button#createGame',function(){
	var createGame = $('input#game').val();
	
	localPlayer.makeGame(createGame)
})

$(document).on('click','button#exit',function(){
	window.location.href = 'index.php';
})