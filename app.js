

window.addEventListener( 'DOMContentLoaded', function () {
        
        const buttonRoolDice = document.querySelector( '.dice-roll' );

var rolls =0;

function new_game(){
document.getElementById('roll').disabled = false;






}
    function rollDice () {

        const diceSide1 = document.getElementById( 'dice-side-1' );
        const diceSide2 = document.getElementById( 'dice-side-2' );
         const diceSide3 = document.getElementById( 'dice-side-3' );
        const status = document.getElementById( 'status' );

        const side1 = Math.floor( Math.random() * 6 ) + 1;
        const side2 = Math.floor( Math.random() * 6 ) + 1;
         const side3 = Math.floor( Math.random() * 6 ) + 1;
        const diceTotal = side1 + side2 + side3;

        diceSide1.innerHTML = side1;
        diceSide2.innerHTML = side2;
        diceSide3.innerHTML = side3;

        status.innerHTML = 'You rolled ' + diceTotal + '.';

        if ( side1 === side2 && side1 === side3 && side2 === side3) {
            status.innerHTML += ' Doubles! You win ' + diceTotal*0.1 +"EUR";
        }
        console.log(diceTotal);

        rolls++;

        console.log(rolls);
        if(rolls>3){
            alert("gameover");
        }
    }

   buttonRoolDice.addEventListener( 'click', rollDice, false );

}, false);