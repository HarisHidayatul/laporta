<style>
    .progress-container {
        width: 100px;
        height: 50px;
        position: relative;
        overflow: hidden;
    }

    .progress-background {
        fill: none;
        stroke: #ccc;
        stroke-width: 5;
    }

    .progress {
        fill: none;
        stroke-width: 5;
        stroke-linecap: round;
        transform: rotate(-90deg);
        transform-origin: center;
        transition: stroke-dashoffset 0.3s ease;
    }

    .color1 { stroke: #ff5733; }
    .color2 { stroke: #ffa500; }
</style>