<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0">
        <link href="CSS/gameScreen.css" rel="stylesheet" type="text/css"/>
        <title>Dice</title>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="gameBoardLogic.js"></script>
    </head>
    <body>
        <header></header>
            <main>
                <div class="dice-container">
                    <div class="dice">
			<img class="img1" src="Photos/dice6.png">
                    </div>

                    <div class="dice">
			<img class="img2" src="Photos/dice6.png">
                    </div>
                    <div class="rollOutcome">
                        <p id="roll1"></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p id="roll2"></p>
                    </div>           
                </div>
  
                <div class="container-grid">
                    <div class="row1">
                        <div class="tile">
                            <button id="rollBtn" class="rollBtn">Roll the Dice</button>
                        </div>
                        <div class="tile">1</div>
                        <div class="tile">2</div>
                        <div class="tile">3</div>  
                        <div class="tile">4</div>
                        <div class="tile">5</div>
                        <div class="tile">6</div>
                    </div>
                    <div class="row2">
                        <div class="tile">1</div>
                        <div class="tile"></div>
                        <div class="tile"></div>  
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                    </div>
                    <div class="row3">
                        <div class="tile">2</div>
                        <div class="tile"></div>
                        <div class="tile"></div>  
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                    </div>
                    <div class="row4">
                        <div class="tile">3</div>
                        <div class="tile"></div>
                        <div class="tile"></div>  
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                    </div>
                    <div class="row5">
                        <div class="tile">4</div>
                        <div class="tile"></div>
                        <div class="tile"></div>  
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                    </div>
                    <div class="row6">
                        <div class="tile">5</div>
                        <div class="tile"></div>
                        <div class="tile"></div>  
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                    </div>
                    <div class="row7">
                        <div class="tile">6</div>
                        <div class="tile"></div>
                        <div class="tile"></div>  
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                        <div class="tile"></div>
                    </div>
                </div>
            </main>
    </body>

</html>
