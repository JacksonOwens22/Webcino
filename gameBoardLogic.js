'use stric';
$(document).ready(function() {
    var gameBoard = ["black.png","blue.png","circle.png","drink.png","green.png","red.png"];
    gameBoardSetup(gameBoard);
    $('#rollBtn').click(rollTheDice);
});

var gameBoardSetup = function(GB){
    var a,b,c,d,e,f;    
    for (let i = 0; i < GB.length; i++){
    var temp = [];
            for(let j = 0; j <= 5; j++) {
                temp.push(Math.floor(Math.random() * 6));
                a = temp[0];
                b = temp[1];
                c = temp[2];
                d = temp[3];
                e = temp[4];
                f = temp[5];
            }           
        
        console.log(temp);
        document.getElementById("sqaure1" + (i+1)).style.backgroundImage="url(Photos/GamePieces/" + GB[a] + ")";
        document.getElementById("sqaure2" + (i+1)).style.backgroundImage="url(Photos/GamePieces/" + GB[b] + ")";
        document.getElementById("sqaure3" + (i+1)).style.backgroundImage="url(Photos/GamePieces/" + GB[c] + ")";
        document.getElementById("sqaure4" + (i+1)).style.backgroundImage="url(Photos/GamePieces/" + GB[d] + ")";
        document.getElementById("sqaure5" + (i+1)).style.backgroundImage="url(Photos/GamePieces/" + GB[e] + ")";
        document.getElementById("sqaure6" + (i+1)).style.backgroundImage="url(Photos/GamePieces/" + GB[f] + ")";
    }

};

var rollTheDice = function() {
        $('#rollBtn').attr('disabled', true);
        $('#dice1').removeClass('paused');
        $('#dice2').removeClass('paused');
        var dice1Timer = setInterval(timer1, 2200);
        var dice2Timer = setInterval(timer2, 4200);
        var rolledTimer1 = setInterval(showDice1,2200);
        var rolledTimer2 = setInterval(showDice2,4200);
        setInterval(clearTimer, 4200,dice1Timer,dice2Timer,rolledTimer1,rolledTimer2);
};

function timer1() {
        $('#dice1').addClass('paused');
};

function timer2() {
        $('#dice2').addClass('paused');
};

var showDice1 = function(){
        
        
        var randomNumber1 = Math.floor(Math.random() * 6) + 1;
        
        $('#roll1').text(randomNumber1);
        
        document.querySelector(".img1").setAttribute("src",
            "Photos/Dice/dice" + randomNumber1 + ".png");
            
        $('#column' + randomNumber1).css("background-color", "yellow");
        clearTimer();
};      
var showDice2 = function() {
        var randomNumber2 = Math.floor(Math.random() * 6) + 1;        
  
        $('#roll2').text(randomNumber2);
                    
        document.querySelector(".img2").setAttribute("src",
            "Photos/Dice/dice" + randomNumber2 + ".png");
        
        $('#row' + randomNumber2).css("background-color", "yellow");
        clearTimer(); 
};

var clearTimer = function(a,b,c,d) {
  clearInterval(a);  
  clearInterval(b);
  clearInterval(c);
  clearInterval(d);
};
        
        