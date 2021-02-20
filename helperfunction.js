function rand(min,max){
	var num = min+Math.floor(Math.random()*(max-min+1));
	return num;
}

function is_between(x, a, b){
	if(b >= x && x >= a){
		return true;
	}
	else{
		return false;
	}
}