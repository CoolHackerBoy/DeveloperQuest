var Player = function(){
	this.username = 'new player';
	this.computer;
	this.money = 0;
	this.workers = 0;
	this.games = [];
	
	this.setUsername = function(name){
		this.username = name;
	}
	
	this.buyComputer = function(){
		var postData = {action: 'buyComputer'};
		$.post('ajax.php',postData,function(result){
			console.log(result);
		});
		var computerToBuy = new Computer();
		if(this.money >= computerToBuy.price){
			this.updateMoney(-computerToBuy.price);
			this.computer = computerToBuy;
		}
		
	}
	
	this.makeGame = function(param){
		
		// if(typeof this.computer == "undefined"){
			// console.log('You need a computer')
		// }
		// else{

			// gameToMake.setGenre(genre);
			// var postData = {action: 'makeGame', gameType: genre};
			param['action'] = 'makeGame';
			var parentObj = this;
			$.post('ajax.php',param,function(result){
				param['game_id'] = result;
				var gameToMake = new Game(param);
				parentObj.appendGame(gameToMake);
				parentObj.games.push(gameToMake);
				parentObj.updateMoney(gameToMake.budget);
			});
			
		// }
		
	}
	
	this.loadGames = function(games){
		for(var c = 0; c<games.length; c++){
			this.appendGame(games[c]);
		}
		
	}
	
	this.appendGame = function(game){
		var game_id = game.game_id;
		$('div#gameContainer').append('<a class="game" href="game_details.php?game_id='+game_id+'">'+game.genre+'</a>');
	}
	
	this.updateMoney = function(amount){
		this.money = this.money +amount;
		
		$('p#money').text('$'+this.money);
	}
	
	
}