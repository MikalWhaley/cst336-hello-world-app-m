var monkey_01;
var gameTimer
var output;
var numHits =0;

function init(){
    monkey_01 = document.getElementById('monkey_01');
    output = document.getElementById('output');
    
    gameTimer = setInterval(gameloop,50);
    placeMonkey();
}

function gameloop(){
    //output.innerHTML = output.innerHTML + '* ';
    var y = parseInt(monkey_01.style.top)-10;
    //output.innerHTML = y;
    if(y<-100){
        placeMonkey();
    } else{
        monkey_01.style.top = y+ 'px';
    } 
}
function placeMonkey(){
    var x = Math.floor(Math.random()*421)
    monkey_01.style.left = x + 'px';
    monkey_01.style.top = '350px';
    
}
function hitMonkey(){
    //output.innerHTML = 'No animals are harmed in the playing of this game.';
    numHits ++;
    output.innerHTML = numHits;
    if(numHits==3){
        alert('You Win!');
        clearInterval(gameTimer);
    }
    placeMonkey();
}