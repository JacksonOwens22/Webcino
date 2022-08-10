'use stric';
//Canvas variables
var canvas;
var ctx;
//Game Variables
var gameLoop;
var player;
//Input variables
var w;
var a;
var s;
var d;

$(document).ready(function() {    
    //Assigning the canvas and the context
    canvas = document.getElementById("game-canvas");
    ctx = canvas.getContext("2d");
    
    //Setup key listners
    setupInputs();
    //Create player
    player = new Player(100,400);
    
    //Start game loop
    gameLoop = setInterval(step,1000/30);
    
    //Drawing on the canvas
    ctx.fillStyle = "white";
    ctx.fillRect(0,0,600,600);
});

function step(){
    player.step();
    
    draw();
};

function draw(){
    
    //Clear canvas
    ctx.fillStyle = "white";
    ctx.fillRect(0,0,600,600);
    
    //Draw player
    player.draw();
};

function setupInputs(){
  document.addEventListener("keydown",function(event){
      if(event.key === "w") {
          w = true;
      } else if (event.key === "a"){
          a = true;
      } else if (event.key === "s"){
          s = true;
      } else if (event.key === "d"){
          d = true;
      }
  });
  document.addEventListener("keyup",function(event){
      if(event.key === "w") {
          w = false;
      } else if (event.key === "a"){
          a = false;
      } else if (event.key === "s"){
          s = false;
      } else if (event.key === "d"){
          d = false;
      }
  });
};
