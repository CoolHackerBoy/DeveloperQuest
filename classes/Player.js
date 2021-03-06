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
	
	this.makeGame = function(genre){
		var randMoney = rand(1, 20);
		
		// if(typeof this.computer == "undefined"){
			// console.log('You need a computer')
		// }
		// else{
			var gameToMake = new Game();
			var postData = {action: 'makeGame', gameType: genre};
			
			$.post('ajax.php',postData,function(result){
				console.log(result)
			});
			$('div#gameContainer').append('<div class="game">'+genre+'</div>');
			gameToMake.setGenre(genre);
			this.games.push(gameToMake);
			this.updateMoney(randMoney);
		// }
		
	}
	
	this.updateMoney = function(amount){
		this.money = this.money +amount;
		
		$('p#money').text('$'+this.money);
	}
	
	
}