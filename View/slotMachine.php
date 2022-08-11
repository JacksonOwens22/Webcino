<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content= "width=device-width, initial-scale=1.0">
<link href="CSS/slotMachine.css" rel="stylesheet" type="text/css"/>
<title>Slot Machine</title>
<link href='http://fonts.googleapis.com/css?family=Gravitas+One&text=1234567' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="Javascript/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<script src="Javascript/jquery.jSlots.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
    <div class="fancy">
        <ul class="slot">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
        </ul>
    </div>
    <input type="button" id="playNormal" value="play">

    
    <script type="text/javascript" charset="utf-8">    
        $('.fancy .slot').jSlots({
            number : 7,
            winnerNumber : 7,
            spinner : '#playNormal',
            easing : 'easeOutSine',
            time : 5000,
            loops : 5,
            onStart : function() {
                $('.slot').removeClass('winner');
            },
            onWin : function(winCount, winners) {
                // only fires if you win
                
                $.each(winners, function() {
                    this.addClass('winner');
                });

                // react to the # of winning slots                 
                if ( winCount === 1 ) {
                    //if your number gets choosen then you loose
                } else if ( winCount > 1 ) {
                    //if your number does not get choosen then you win
                }
            }
        });
  
    </script>
    
</body>
</html>
