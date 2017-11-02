
lucky_numbers = []; // random lucky number array. Up to 8 members
ticket = [];
random_number = 0; // random number 0-9
gameOver = true; // game over flag
data=[];

// generating DIVs with unique IDs and corresponding content (0-9) in number_block DIV
number_blocks = document.getElementById('number_blocks');
for (var i = 0; i <= 9; i++) {
	number_blocks.innerHTML += "<div id='"+i+"' class='col number'>"+i+"</div>";
}

function new_game() {
	if (gameOver) {
		gameOver = false;
		// start a game 
		console.log("Starting a new game..");

		// clear lucky_numbers array
		lucky_numbers = [];

		// generate ticket of 4 numbers
		ticket = [];
		for (var i = 0; i < 4; i++) {
			ticket.push(Math.floor(Math.random() * 10));
		}
		document.getElementById('ticket').innerHTML = ticket;
	} else {
		alert('Game is not yet over!');
	}
}

function get_number() {
	if (lucky_numbers.length < 4) {
		// we have to clear all number DIVs before we enlight one
		for (var i = 0; i <= 9; i++) {
			// set style to default background collor
			document.getElementById(i).style.backgroundColor = "brown";
		}

		// getting random number range 0-9
		random_number = Math.floor(Math.random() * 10);

		// selecting corresponding DIV by ID
		document.getElementById(random_number).style.backgroundColor = "red";

		// displaying random number in lucky_number DIV
		document.getElementById('lucky_number').innerHTML = random_number;

		// adding to array and showing lucky number on the screen
		lucky_numbers.push(random_number);
		document.getElementById('lucky_numbers').innerHTML = lucky_numbers;
	} else if(gameOver=true){
		document.getElementById('data').innerHTML = data;
		lucky_numbers.push(data);
		// for (var i =0; i <= lucky; i++) {
		// 	document.getElementById('li').innerHTML = i;
		// }
	}else {
		alert("Game over!");
		gameOver = true;
	}
}

