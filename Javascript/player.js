function Player(x,y) {
    this.x = x;
    this.y = y;
    this.xspeed = 0;
    this.yspeed = 0;
    this.friction = 0.6;
    this.maxSpeed = 10;
    this.width = 50;
    this.height = 50;
    this.active = true;
    
    this.step = function(){
        if (this.active) {
            if (!a && !d || a && d) {
                this.xspeed *= this.friction;
            } else if (d) {
                this.xspeed ++;
            } else if (a) {
                this.xspeed --;
            }
            //Vertical Speed
            if(w){
                this.yspeed -= 15;
            }
            //Apply gravity
            this.yspeed += 5;
            
            //Correct X Speed
            if (this.xspeed > this.maxSpeed){
                this.xspeed = this.maxSpeed;
            } else if (this.xspeed < -this.maxSpeed){
                this.xspeed = -this.maxSpeed;
            }
            //Correct Y speed
            if (this.yspeed > this.maxSpeed){
                this.yspeed = this.maxSpeed;
            } else if (this.yspeed < -this.maxSpeed){
                this.yspeed = -this.maxSpeed;
            }
            
            this.x += this.xspeed;
            this.y += this.yspeed;
        }
    };


    this.draw = function() {
        ctx.fillStyle = "green";
        ctx.fillRect(this.x, this.y, this.width, this.height);
    };
}