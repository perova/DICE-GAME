 console.log("dice game loaded");


 const buttonRoolDice = document.querySelector( '.dice-roll' );
 buttonRoolDice.addEventListener( 'click', rollDice, false );
 rolls =0;
 max_rolls =4;
 win = 0;
 side1 = 0;
 side2 = 0;
 side3 = 0;
 diceSide1 = document.getElementById( 'dice-side-1' );
 diceSide2 = document.getElementById( 'dice-side-2' );
 diceSide3 = document.getElementById( 'dice-side-3' );
 status1 = document.getElementById( 'status1' );
 status2 = document.getElementById( 'status2' );
 status3 = document.getElementById( 'status3' );
 status1 = document.getElementById( 'status1' );
 status2 = document.getElementById( 'status2' );
 status3 = document.getElementById( 'status3' );
 function new_game(){
  console.log("start new game...");
  document.getElementById('roll').disabled = false;

  document.getElementById("game_over").innerHTML=" ";
  document.getElementById("win").innerHTML= " ";
  rolls = null;
  win = 0;
  

  side1 = 0;
  side2 = 0;
  side3 = 0;
}





function rollDice () {

     // diceSide1 = document.getElementById( 'dice-side-1' );
     // diceSide2 = document.getElementById( 'dice-side-2' );
     // diceSide3 = document.getElementById( 'dice-side-3' );
     // status1 = document.getElementById( 'status1' );
     // status2 = document.getElementById( 'status2' );
     // status3 = document.getElementById( 'status3' );

     side1 = Math.floor( Math.random() * 6 ) + 1;
     side2 = Math.floor( Math.random() * 6 ) + 1;
     side3 = Math.floor( Math.random() * 6 ) + 1;
        //const diceTotal = side1 + side2 + side3;

        diceSide1.innerHTML = side1;
        diceSide2.innerHTML = side2;
        diceSide3.innerHTML = side3;

        //status.innerHTML = win;


// win
if ( side1 == side2 ){

 win += (side1 + side2)*10;
            //status1.innerHTML = side1 + side2;

          } else if(side1 == side3){

            win+= (side1 + side3)*10;

          } else if( side2 == side3) {

           win+= (side2 + side3)*10;
         }else{



         }
         
         
         rolls++;

         console.log(rolls);


        //win =  document.getElementById( 'status1' ).value +document.getElementById( 'status2' ).value  + document.getElementById( 'status3' ).value ;

        if(rolls >= max_rolls){
          document.getElementById("game_over").innerHTML="Game over";
          document.getElementById("win").innerHTML= ' Doubles! You win ' + win + " " + "EUR!";
          document.getElementById('roll').disabled = true;

          $.post(
            'game.php',
            {
              result: win,
            },
            function(data,textStatus,xhr){
              console.log("posted");
              console.log(data);
            });




        }
        
      }

//   var myObj = { result:win };
// var myJSON = JSON.stringify(myObj);
// window.location = "game.php?x=" + myJSON;
// function check_game_over(){
//     if(rolls >= max_rolls){
//         document.getElementById("game_over").innerHTML="Game over";
//         document.getElementById("win").innerHTML= ' Doubles! You win ' + diceTotal*0.1 +"EUR";
//         document.getElementById('roll').disabled = true;

//         $.post(
//             'game.php',
//             {
//             username: username,
//             result: win,
//         },
//         function(data,textStatus,xhr){
//             console.log("posted");
//         });

//     }
// }