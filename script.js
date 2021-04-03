var localPlayer = new Player();

$(document).ready(function(){
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
	var createGame = $('input#game').val();
	
	localPlayer.makeGame(createGame)
})

$(document).on('click','button#exit',function(){
	window.location.href = 'mainUI.php';
})