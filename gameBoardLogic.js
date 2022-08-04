'use stric';
$(document).ready(function() {
    $('#rollBtn').click(rollTheDice);
});

var rollTheDice = function() {
        //$('#rollBtn').attr('disabled', true);
        var randomNumber1 = Math.floor(Math.random() * 6) + 1;
        var randomNumber2 = Math.floor(Math.random() * 6) + 1;
        
        $('#dice1').removeClass('paused');
        $('#dice2').removeClass('paused');
        rollingAnimation = setInterval(timer, 2200);
        
        
        
        $('#roll1').text(randomNumber1);
        $('#roll2').text(randomNumber2);
                
        document.querySelector(".img1").setAttribute("src",
            "Photos/dice" + randomNumber1 + ".png");
            
        document.querySelector(".img2").setAttribute("src",
            "Photos/dice" + randomNumber2 + ".png");
        
        selectNumber(randomNumber1, randomNumber2);
        clearInterval(timer);
};

var selectNumber = function(randomNumber1, randomNumber2){
    $('#column' + randomNumber1).css("background-color", "yellow");
    $('#row' + randomNumber2).css("background-color", "yellow");
};

function timer() {
        $('#dice1').addClass('paused');
        $('#dice2').addClass('paused');
};

