<div data-animation='first'>
    <div></div>
    <div></div>
</div>
<style>
    :root {
        --transform-value: -100%;
        --animation-duration: 1s;
        --animation-ease: ease-in;
    }

    @keyframes initialAnimation-horizontal {
        from {
            transform: translateX(0)
        }
        to {
            transform: translateX(var(--transform-value));
        }
    }

    [data-animation*='first'] div:first-child, [data-animation*='first'] div:last-child {
        position: fixed;
        width: 50vw;
        height: 100vh;

        top: 0;

        background: linear-gradient(to right, black 0%,black 6%,black 10%,black 14%,black 20%,black 24%,black 28%,black 34%,black 38%,black 42%,black 48%,black  52%,black 56%,black 62%,black 66%,black 70%,black 76%,black 80%,black 84%,black 90%,black 94%,black 98%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

        z-index: 123456;
    }

    [data-animation*='first'] div:first-child {
        left: 0;

        animation: var(--animation-duration) var(--animation-ease) var(--animation-duration) 1 forwards initialAnimation-horizontal;
    }
    [data-animation*='first'] div:last-child {
        right: 0;

        --transform-value: 100%;
        animation: var(--animation-duration) var(--animation-ease) var(--animation-duration) 1 forwards initialAnimation-horizontal;
    }

</style>
<script>
    setTimeout(function(){
        window.location.href = 'logo';
    }, 1870);
</script>
