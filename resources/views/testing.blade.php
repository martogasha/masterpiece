<div>
        <h1 class="cssanimation sequence zoomInLeft"><a href="{{url('/')}}"><img src="images/fggg.png" alt="Header Logo"></a></h1>
    <!--<h1 class="cssanimation zoomInLeft random">AlejandroFerrari.com</h1>
  please uncomment if you want to see random version-->
</div>
<style>
    body {overflow: hidden;}
    div { font-family: 'Ubuntu', sans-serif; position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); } /* center text styling */
    h1 { font-size: 4.5em; letter-spacing: -4px; font-weight: 700; color: #4684ee; text-align: center; } /* h1 styling */
    @media screen and (max-width: 488px) { h1 { font-size: 2.6em; letter-spacing: -2px; } } /* control h1 font size below 768px screen */

    /* animation duration and fill mode */
    .cssanimation {
        animation-duration: 1s;
        animation-fill-mode: both;
        display: inline-block;
    }

    /* zoomInLeft animation declaration & iteration counting */
    .zoomInLeft { animation-name: zoomInLeft }

    /* zoomInLeft animation keyframes */
    @keyframes zoomInLeft {
        from {
            transform: scale(10) translateX(-50%);
            opacity: 0;
        }
    }
    body {
        background-color: var(--backgroundColor);
        background-image:
            linear-gradient(90deg, var(--backgroundLinesColor), transparent 0px),
            linear-gradient(var(--backgroundLinesColor), transparent 0px),
            linear-gradient(var(--backgroundLinesColor), transparent 2px),
            linear-gradient(90deg, var(--backgroundLinesColor), transparent 1px);
        background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px;
        background-position:-2px -2px, -2px -2px, -1px -1px, -1px -1px;
    }

</style>
<script>
    function randomColor() {
        var myArray = ['#DFB916','#000000'];
        var r = myArray[Math.floor(Math.random()*myArray.length)];
        return r;
    }

    function squareCoordinates(x, y){
        // round x, y to the nearest 20
        var x = Number.parseInt(x/10) * 20;
        var y = Number.parseInt(y/10) * 20;
        return [x, y];
    }

    class Block {
        // when user clicks on grid, generate these four pixels
        constructor(x, y){
            new Pixel(x, y, "u");
            new Pixel(x, y, "d");
            new Pixel(x, y, "l");
            new Pixel(x, y, "r");
        }
    }

    class Pixel {

        constructor(x, y, direction, step=1){
            this.left = x;
            this.top = y;
            this.direction = direction;
            this.step = step;
            this.canMove = true;

            var elem = document.createElement("div");
            this.elem = elem;
            elem.classList = ["pixel"];
            elem.style.position = "absolute";
            elem.style.width = "20px";
            elem.style.height = "20px";
            elem.style.border = "solid";
            elem.style.borderColor =randomColor();
            elem.style.display = "block";
            elem.style.left = `${this.left}px`;
            elem.style.top = `${this.top}px`;

            document.body.appendChild(elem);

            // set interval to move pixel (if it can move)
            this.moving = setInterval(() => {
                if(!this.canMove){
                    this.stop();
                }else{
                    this.move();
                }
            }, 1);
        }

        draw(){
            // update the elements left and top position
            this.elem.style.left = `${this.left}px`;
            this.elem.style.top = `${this.top}px`;
        }

        stop(){
            // stop moving and remove element from body
            clearInterval(this.moving);
            document.body.removeChild(this.elem);
        }

        move(){
            // decide on how to move pixel across screen
            this.draw();

            switch(this.direction){
                case "u":
                    if(this.top > 0){
                        this.top -= this.step;
                    }else{
                        this.canMove = false;
                    }
                    break;

                case "d":
                    if(this.top < window.innerHeight){
                        this.top += this.step;
                    }else{
                        this.canMove = false;
                    }
                    break;

                case "l":
                    if(this.left > 0){
                        this.left -= this.step;
                    } else {
                        this.canMove = false;
                    }
                    break;

                case "r":
                    if(this.left < window.innerWidth){
                        this.left += this.step;
                    } else {
                        this.canMove = false;
                    }
                    break;
            }
        }

    }

    function getRandomIntInclusive(min, max) {
        // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function getRandomCoordinates(){
        // return random x, y coordinates based on window height and window width
        [x, y] = [
            getRandomIntInclusive(0, window.innerWidth),
            getRandomIntInclusive(0, window.innerHeight)
        ];
        return squareCoordinates(x, y);
    }

    function getRandomDirection(){
        // return random direction
        return ["u", "d", "l", "r"][getRandomIntInclusive(0,3)];
    }

    var mouseDown = false;

    // listen for mouse down
    document.addEventListener("mousedown", function(e){
        mouseDown = true;
        [x, y] = squareCoordinates(e.clientX, e.clientY);
        new Block(x, y);
    });

    // listen for mouse up
    document.addEventListener("mouseup", function(e){
        mouseDown = false;
    });

    document.addEventListener("mousemove", function(e){
        if(mouseDown && (document.getElementsByClassName("pixel").length < 100) ){
            [x, y] = squareCoordinates(e.clientX, e.clientY);
            new Block(x, y);
        }
    });

    setInterval(function(){
        if( (Math.random() > .1) && !mouseDown){
            [x, y] = getRandomCoordinates();
            new Pixel(x, y, getRandomDirection());
        }
    }, 100);
    setTimeout(function(){
        window.location.href = 'home';
    }, 4000);
</script>
