var localPlayer = new Player();

$(document).ready(function(){
	$('div#mainUI').hide();
	$('div#usernameContainer').hide();
	$('div#libaryContainer').hide();
	$('div#storeContainer').hide();
	$('div#computerContainer').hide();
	$('button#exit').hide();
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

$(document).on('click','div#computer',function(){
	$('div#mainUI').hide();
	$('button#exit').show();
	$('div#computerContainer').show();
})

$(document).on('click','div#store',function(){
	$('div#mainUI').hide();
	$('button#exit').show();
	$('div#storeContainer').show();
})

$(document).on('click','button#buyComputer',function(){
	localPlayer.buyComputer();
})

$(document).on('click','div#library',function(){
	$('div#mainUI').hide();
	$('button#exit').show();
	$('div#libaryContainer').show();
})

$(document).on('click','button#createGame',function(){
	var createGame = $('input#game').val();
	
	localPlayer.makeGame(createGame)
})

$(document).on('click','button#exit',function(){
	
})