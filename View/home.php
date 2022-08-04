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
			<img class="img1 paused" id="dice1" src="Photos/dice6.png">
                    </div>

                    <div class="dice">
			<img class="img2 paused" id="dice2" src="Photos/dice6.png">
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
                        <div class="tile" id="row1">1</div>
                        <div class="tile" id="row2">2</div>
                        <div class="tile" id="row3">3</div>  
                        <div class="tile" id="row4">4</div>
                        <div class="tile" id="row5">5</div>
                        <div class="tile" id="row6">6</div>
                    </div>
                    <div class="row2">
                        <div class="tile" id="column1">1</div>
                        <div class="tile" id="sqaure11"></div>
                        <div class="tile" id="sqaure12"></div>  
                        <div class="tile" id="sqaure13"></div>
                        <div class="tile" id="sqaure14"></div>
                        <div class="tile" id="sqaure15"></div>
                        <div class="tile" id="sqaure16"></div>
                    </div>
                    <div class="row3">
                        <div class="tile" id="column2">2</div>
                        <div class="tile" id="sqaure21"></div>
                        <div class="tile" id="sqaure22"></div>  
                        <div class="tile" id="sqaure23"></div>
                        <div class="tile" id="sqaure24"></div>
                        <div class="tile" id="sqaure25"></div>
                        <div class="tile" id="sqaure26"></div>
                    </div>
                    <div class="row4">
                        <div class="tile" id="column3">3</div>
                        <div class="tile" id="sqaure31"></div>
                        <div class="tile" id="sqaure32"></div>  
                        <div class="tile" id="sqaure33"></div>
                        <div class="tile" id="sqaure34"></div>
                        <div class="tile" id="sqaure35"></div>
                        <div class="tile" id="sqaure36"></div>
                    </div>
                    <div class="row5">
                        <div class="tile" id="column4">4</div>
                        <div class="tile" id="sqaure41"></div>
                        <div class="tile" id="sqaure42"></div>  
                        <div class="tile" id="sqaure43"></div>
                        <div class="tile" id="sqaure44"></div>
                        <div class="tile" id="sqaure45"></div>
                        <div class="tile" id="sqaure46"></div>
                    </div>
                    <div class="row6">
                        <div class="tile" id="column5">5</div>
                        <div class="tile" id="sqaure51"></div>
                        <div class="tile" id="sqaure52"></div>  
                        <div class="tile" id="sqaure53"></div>
                        <div class="tile" id="sqaure54"></div>
                        <div class="tile" id="sqaure55"></div>
                        <div class="tile" id="sqaure56"></div>
                    </div>
                    <div class="row7">
                        <div class="tile" id="column6">6</div>
                        <div class="tile" id="sqaure61"></div>
                        <div class="tile" id="sqaure62"></div>  
                        <div class="tile" id="sqaure63"></div>
                        <div class="tile" id="sqaure64"></div>
                        <div class="tile" id="sqaure65"></div>
                        <div class="tile" id="sqaure66"></div>
                    </div>
                </div>
            </main>
    </body>

</html>
