const container = document.getElementById('projects-scroll');
const cards = container.querySelectorAll('.snap-start');
const cardWidth = container.offsetWidth;
let index = 0;

const scrollToSlide = (i) => {
    index = (i + cards.length) % cards.length;
    container.scrollTo({
        left: index * cardWidth,
        behavior: 'smooth'
    });
};

document.getElementById('scroll-left').addEventListener('click', () => scrollToSlide(index - 1));
document.getElementById('scroll-right').addEventListener('click', () => scrollToSlide(index + 1));

var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var stars = [],
    FPS = 120,
    x = 100,
    mouse = { x: 0, y: 0 };

for (var i = 0; i < x; i++) {
    stars.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        radius: Math.random() * 1 + 1,
        vx: Math.floor(Math.random() * 50) - 25,
        vy: Math.floor(Math.random() * 50) - 25
    });
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.globalCompositeOperation = "lighter";

    for (var i = 0; i < stars.length; i++) {
        var s = stars[i];
        ctx.fillStyle = "#000";
        ctx.beginPath();
        ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
        ctx.fill();
        ctx.stroke();
    }

    ctx.beginPath();
    for (var i = 0; i < stars.length; i++) {
        var starI = stars[i];
        ctx.moveTo(starI.x, starI.y);

        if (distance(mouse, starI) < 150)
            ctx.lineTo(mouse.x, mouse.y);

        for (var j = 0; j < stars.length; j++) {
            var starII = stars[j];
            if (distance(starI, starII) < 150)
                ctx.lineTo(starII.x, starII.y);
        }
    }

    ctx.lineWidth = 0.05;
    ctx.strokeStyle = 'gray';
    ctx.stroke();
}

function distance(p1, p2) {
    var dx = p2.x - p1.x;
    var dy = p2.y - p1.y;
    return Math.sqrt(dx * dx + dy * dy);
}

function update() {
    for (var i = 0; i < stars.length; i++) {
        var s = stars[i];
        s.x += s.vx / FPS;
        s.y += s.vy / FPS;

        if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
        if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
    }
}

document.addEventListener('mousemove', function (e) {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
});

function tick() {
    draw();
    update();
    requestAnimationFrame(tick);
}

tick();




