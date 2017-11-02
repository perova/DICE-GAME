<html>
<head>
<script type = "text/javascript">

//player1 variables
var dice1;  //string for concatenation
var dice2;
var score1;                                 //concatenation
var total1 = 0;                             //total number of wins

//player2 variables
var dice3;
var dice4;
var score2;
var total2 = 0;
var rnum = 0;    //round number for table from 1 till 5
var decicsion1; //if player1 won
var decision2; // if player2 won
var round = 0;    //the counter variable to limit the button to be clicked 5 times
var game1;
var game2;
var game3;
var game4;
var game5;



if (round<=5) // here starts the counter to limit and let the function only work 5 times for the button
{
<button roll="disabled">

//IDK what to put here return 0; does nothing obviously. I want it to close after the button has been clicked the 5th time.
//starting table headers
document.write("<table border = \"1\"><thead><tr>");
document.write("<th>Round</th><th>Player 1</th><th>Player 2</th>");
document.write("</tr></thead>"); //1st row
function play()
{
//player1
dice1 = Math.floor(  1 + Math.random() * 6 )+''; //this should randomize the string values or generate new numbers.
dice2 = Math.floor(  1 + Math.random() * 6 )+'';
if(dice1>dice2)
score1 = dice1 + dice2;  //concatination I've seen this method there is another methods like score1 = dice1.concat(dice2); both do not work
else
score1 = dice2 + dice1;
document.write("Score 1: "+score1+"<br/>");
//player2
dice3 = Math.floor( 1 + Math.random() * 6 )+'';
dice4 = Math.floor( 1 + Math.random() * 6 )+'';
if(dice3>dice4)
score2 = dice3 + dice4;
else
score2 = dice4 + dice3;


//total wins
/*what I want this to do is add 1 to the winner so player1, 2 start at 0,0 
then who ever wins its 0,1 then 1,1 or 0,1 like a soccer scoring board*/
if (score1>score2)                  
                        {
                        total1 += 1; 
                        //total2 += 0;
                        }
                        else{

                        //total1 += 0;
                        total2 += 1;
                        }
//desicion of who won
if (total1>total2)
    {
decision1= document.write("Winner");
decision2= document.write("Loser");
    }
                        else{
decision1= document.write("Loser");
decision1= document.write("Winner");
                        }


// The 3x8 table that has all the results 
rnum = Math.floor(1 + Math.random()*5); //round  number 
document.write("<tbody><tr><td>round</td><td>"+rnum+"</td>");
document.write("<td>"+score1+"</td><td>"+score2+"</td><tr>");// 1-5 rows
document.writeln("<tr><td>total</td><td>"+total1+"</td>");
document.write("<td>"+total2+"</td><tr>"); //6th row
document.writeln("<tr><td>Winner</td><td>"+decision1);
document.write("</td><td>"+decision2+"</td><tr>"); //7th row
document.write("</tbody></table>"); //closing table                 

} //this is the closing of this play
}




</script>
</head>
<body>

<form action="">
<input type="button" value="Roll" onclick="play()"> 

</form>
</body>
</html>
