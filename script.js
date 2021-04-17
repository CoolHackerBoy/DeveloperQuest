var money = 917;
var localPlayer = new Player();
localPlayer.updateMoney(money);

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

$(document).on('click','.menu-icon',function(){
	$(this).toggleClass("active");
	$(".navigation-menu").toggleClass("active");
	$(".menu-icon i").toggleClass("fa-times");
})