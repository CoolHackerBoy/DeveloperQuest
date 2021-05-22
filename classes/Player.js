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
		var computerToBuy = new Computer();
		if(this.money >= computerToBuy.price){
			this.updateMoney(-computerToBuy.price);
			this.computer = computerToBuy;
		}
		
	}
	
	this.makeGame = function(genre){
		var randMoney = rand(1, 20)
		if(typeof this.computer == "undefined"){
			console.log('You need a computer')
		}
		else{
			var gameToMake = new Game();
			
			gameToMake.setGenre(genre);
			this.games.push(gameToMake);
			this.updateMoney(randMoney);
		}
		
	}
	
	this.updateMoney = function(amount){
		this.money = this.money +amount;
		
		$('p#money').text('$'+this.money);
	}
	
	
}