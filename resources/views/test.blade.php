<!-- Curtain moving to the sides and stopping when 30% of sides is left to be seen  -->


<div class="container">
    <div class="center">

        <div>
            <main class="container" id="right">
                <!-- first loader -->
                <div class="loader-1">
                    <div class="dot"></div>
                </div>

            </main>
            <style>
                #right {
                    position: absolute;
                    right: 500px;
                    width: 300px;
                    padding: 10px;
                }
                #bright {
                    position: absolute;
                    right: 500px;
                    bottom: 200px;
                    width: 300px;
                    padding: 10px;
                }
                #bleft {
                    position: absolute;
                    left: 500px;
                    bottom: 300px;
                    width: 300px;
                    padding: 10px;
                }
                #left {
                    position: absolute;
                    left: 500px;
                    width: 300px;
                    padding: 10px;
                }
                #top {
                    position: absolute;
                    top: 300px;
                    width: 300px;
                    padding: 10px;
                }
                #bottom {
                    position: absolute;
                    bottom: 300px;
                    width: 300px;
                    padding: 10px;
                }
            </style>

            <h1 class="cssanimation sequence zoomInLeft"></h1>
            <!--<h1 class="cssanimation zoomInLeft random">AlejandroFerrari.com</h1>
          please uncomment if you want to see random version-->
            <main class="container" id="bleft">
                <!-- first loader -->
                <div class="loader-1">
                    <div class="dot"></div>
                </div>

            </main>
            <main class="container" id="bright">
                <!-- first loader -->
                <div class="loader-1">
                    <div class="dot"></div>
                </div>

            </main>
            <main class="container" id="bottom">
                <!-- first loader -->
                <div class="loader-1">
                    <div class="dot"></div>
                </div>

            </main>
            <main class="container" id="left">
                <!-- first loader -->
                <div class="loader-1">
                    <div class="dot"></div>
                </div>

            </main>
            <main class="container" id="top">
                <!-- first loader -->
                <div class="loader-1">
                    <div class="dot"></div>
                </div>

            </main>
        </div>
    </div>

</div>

<main class="container">
    <!-- first loader -->
    <div class="loader-1">
        <div class="dot"></div>
    </div>

</main>
<style>
    *,
    ::before,
    ::after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 62.5%;
    }

    body {
        background: #eee;
    }



    .loader-1 {
        width: 20rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .dot {
        width: 3rem;
        height: 3rem;
        background-color: #DFB916;
        margin: 1.6rem;
        opacity: 0.6;
    }

    .dot:nth-child(1) {
        animation: animateLoader1 1.5s infinite;
    }
    .dot:nth-child(2) {
        animation: animateLoader1 1.3s infinite;
    }
    .dot:nth-child(3) {
        animation: animateLoader1 1.7s infinite;
    }
    .dot:nth-child(4) {
        animation: animateLoader1 1.1s infinite;
    }
    .dot:nth-child(5) {
        animation: animateLoader1 0.9s infinite;
    }
    .dot:nth-child(6) {
        animation: animateLoader1 0.7s infinite;
    }
    .dot:nth-child(7) {
        animation: animateLoader1 0.5s infinite;
    }
    .dot:nth-child(8) {
        animation: animateLoader1 1.3s infinite;
    }
    .dot:nth-child(9) {
        animation: animateLoader1 1.5s infinite;
    }

    @keyframes animateLoader1 {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.5);
            opacity: 1;
        }
        100% {
            transform: scale(1);
            opacity: 0.6;
        }
    }

    /* LOADER 2 */

    .loader-2 {
        width: 25rem;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .line {
        width: 1.5rem;
        height: 5rem;
        background-color: #4169e1;
        border-radius: 1rem;
    }

    .line:nth-child(1) {
        animation: animateLoader2 0.7s 0.6s infinite;
    }
    .line:nth-child(2) {
        animation: animateLoader2 0.7s 0.3s infinite;
    }
    .line:nth-child(3) {
        animation: animateLoader2 0.7s infinite;
    }
    .line:nth-child(4) {
        animation: animateLoader2 0.7s 0.3s infinite;
    }
    .line:nth-child(5) {
        animation: animateLoader2 0.7s 0.6s infinite;
    }

    @keyframes animateLoader2 {
        0% {
            height: 5rem;
        }
        50% {
            height: 18rem;
        }
        100% {
            height: 5rem;
        }
    }

    /* LOADER 3 */

    .loader-3 {
        width: 40rem;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .circle {
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
        position: relative;
    }

    .circle:nth-child(1) {
        background-color: #90be6d;
    }
    .circle:nth-child(2) {
        background-color: #f9c74f;
    }
    .circle:nth-child(3) {
        background-color: #f8961e;
    }
    .circle:nth-child(4) {
        background-color: #f3722c;
    }
    .circle:nth-child(5) {
        background-color: #f94346;
    }

    .circle::before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        border-radius: 50%;
        opacity: 0.5;
        animation: animateLoader3 2s ease-out infinite;
    }

    .circle:nth-child(1)::before {
        background-color: #90be6d;
    }
    .circle:nth-child(2)::before {
        background-color: #f9c74f;
        animation-delay: 0.2s;
    }
    .circle:nth-child(3)::before {
        background-color: #f8961e;
        animation-delay: 0.4s;
    }
    .circle:nth-child(4)::before {
        background-color: #f3722c;
        animation-delay: 0.6s;
    }
    .circle:nth-child(5)::before {
        background-color: #f94346;
        animation-delay: 0.8s;
    }

    @keyframes animateLoader3 {
        0% {
            transform: scale(1);
        }

        50%,
        75% {
            transform: scale(2.5);
        }

        80%,
        100% {
            opacity: 0;
        }
    }


    /* animation duration and fill mode */
    .cssanimation {
        animation-duration: 3s;
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
    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .curtain {
        width: 50%;
        height: 99vh;
        float: left;
        animation-duration: 3s;
        animation-iteration-count: 1;
        animation-timing-function:ease-out;
    }

    .curtain-left {
        animation-name: go-left;

    }

    .curtain-right {
        animation-name: go-right;
    }

    @keyframes go-left {
        0% {
            transform: translate(0%, 0%);
        }
        100% {
            transform: translate(-70%, 0%);
        }
    }

    @keyframes go-right {
        0% {
            transform: translate(0%, 0%);
        }
        100% {
            transform: translate(70%, 0%);
        }
    }

    .curtain-element {
        width: 10%;
        height: 100%;
        float: left;
    }

    /* Alternating color of curtain pieces */

    .curtain-element:nth-child(odd) {
        background-color: black;
    }

    .curtain-element:nth-child(even) {
        background-color: black;
    }

</style>
<script data-cfasync="false"
        src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6f3ef95afd63cb73","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
<script>
setTimeout( function(){
    window.location = "{{url('home')}}";//here double curly bracket
}  , 3000 );
</script>
