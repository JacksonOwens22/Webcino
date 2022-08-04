'use stric';
$(document).ready(function() {
    $('#rollBtn').click(rollTheDice);
    
});

var rollTheDice = function() {
        var randomNumber1 = Math.floor(Math.random() * 6) + 1;
        var randomNumber2 = Math.floor(Math.random() * 6) + 1;
        
        $('#roll1').text(randomNumber1);
        $('#roll2').text(randomNumber2);
        
        document.querySelector(".img1").setAttribute("src",
            "Photos/dice" + randomNumber1 + ".png");
            
        document.querySelector(".img2").setAttribute("src",
            "Photos/dice" + randomNumber2 + ".png");
};