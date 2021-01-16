var localPlayer = new Player();

$(document).on('click','button#saveUsername',function(){
	var username = $('input#username').val();
	
	localPlayer.setUsername(username)
})

$(document).on('click','button#buyComputer',function(){
	localPlayer.buyComputer();
})

$(document).on('click','button#createGame',function(){
	var createGame = $('input#game').val();
	
	localPlayer.makeGame(createGame)
})