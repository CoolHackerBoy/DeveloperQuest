<?php include('header.php')?>

<button id="exit">Go Back</button>

<div id="libaryContainer" class="mainUIContainer">
	<div id="createGameForm">
		<label>Title</label>
		<input type="text" id="title" value=""> 
		
		<label>Description</label>
		<textarea id="description"></textarea>
		
		<label>Budget</label>
		<input type="range" min=1 max=100 id="budget">
		
		<label>Genre</label>
		<select id="genre">
			<option value=""></option>
			<option value="adventure">Adventure</option>
			<option value="horror">Horror</option>
		</select>
		
		<label>Platform</label>
		<input type="checkbox" class="platform" value="computer" name="platform[]">Computer <br>
		<input type="checkbox" class="platform" value="website" name="platform[]">Website <br>
		<input type="checkbox" class="platform" value="mobile" name="platform[]">Mobile <br>
		
		
		<button id="createGame">Create Game</button>
	</div>
	<div id="gameContainer"></div>
</div>

<?php include('footer.php')?>