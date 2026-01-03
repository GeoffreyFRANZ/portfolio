/* -----------------------------------------
   1) YEAR AUTO
----------------------------------------- */
document.getElementById("year").textContent = new Date().getFullYear();


/* -----------------------------------------
   2) SCROLL REVEAL
----------------------------------------- */
const revealElements = document.querySelectorAll(".reveal");

const revealOnScroll = () => {
    const trigger = window.innerHeight * 0.85;

    revealElements.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < trigger) {
            el.classList.add("reveal-visible");
        }
    });
};

window.addEventListener("scroll", revealOnScroll);
window.addEventListener("load", revealOnScroll);


/* -----------------------------------------
   3) CARD TILT EFFECT
----------------------------------------- */
const tiltCards = document.querySelectorAll(".card-tilt");

tiltCards.forEach(card => {
    card.addEventListener("mousemove", e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const rotateX = ((y / rect.height) - 0.5) * 10;
        const rotateY = ((x / rect.width) - 0.5) * -10;

        card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        card.classList.add("hovered");
    });

    card.addEventListener("mouseleave", () => {
        card.style.transform = "rotateX(0deg) rotateY(0deg)";
        card.classList.remove("hovered");
    });
});


/* -----------------------------------------
   4) NEURON LINES (SVG)
----------------------------------------- */
const svg = document.querySelector(".neuron-lines");
const neurons = document.querySelectorAll(".neuron");

function drawNeuronLines() {
    if (!svg) return;

    svg.innerHTML = ""; // reset

    neurons.forEach((n1, i) => {
        const r1 = n1.getBoundingClientRect();
        const x1 = r1.left + r1.width / 2 + window.scrollX;
        const y1 = r1.top + r1.height / 2 + window.scrollY;

        neurons.forEach((n2, j) => {
            if (i >= j) return;

            const r2 = n2.getBoundingClientRect();
            const x2 = r2.left + r2.width / 2 + window.scrollX;
            const y2 = r2.top + r2.height / 2 + window.scrollY;

            const dx = x1 - x2;
            const dy = y1 - y2;
            const dist = Math.sqrt(dx * dx + dy * dy);

            if (dist < 180) {
                const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
                line.setAttribute("x1", x1);
                line.setAttribute("y1", y1);
                line.setAttribute("x2", x2);
                line.setAttribute("y2", y2);
                line.setAttribute("class", "neuron-line");
                svg.appendChild(line);
            }
        });
    });
}

window.addEventListener("load", drawNeuronLines);
window.addEventListener("resize", drawNeuronLines);
window.addEventListener("scroll", drawNeuronLines);


/* -----------------------------------------
   5) PARALLAX (léger, subtil)
----------------------------------------- */
const universe = document.querySelector(".nebula-universe");

window.addEventListener("mousemove", e => {
    const x = (e.clientX / window.innerWidth - 0.5) * 10;
    const y = (e.clientY / window.innerHeight - 0.5) * 10;

    universe.style.transform = `translate(${x}px, ${y}px)`;
});

document.addEventListener("DOMContentLoaded", () => {
    const layers = document.querySelectorAll(".dust-layer");

    layers.forEach(layer => {
        const depth = layer.dataset.depth;
        const count = 200; // tu peux monter à 400 si tu veux

        for (let i = 0; i < count; i++) {
            const p = document.createElement("div");
            p.classList.add("dust-particle");

            // Position aléatoire
            p.style.top = Math.random() * 100 + "%";
            p.style.left = Math.random() * 100 + "%";

            // Taille aléatoire
            const size = (Math.random() * 3) + 1;
            p.style.width = size + "px";
            p.style.height = size + "px";

            // Opacité aléatoire
            p.style.opacity = (Math.random() * 0.6 + 0.2).toFixed(2);

            // Blur aléatoire
            p.style.filter = `blur(${Math.random() * 3}px)`;

            // Vitesse aléatoire
            p.style.animationDuration = (Math.random() * 20 + 20) + "s";

            // Profondeur 3D
            p.style.transform = `translateZ(${depth}px)`;

            layer.appendChild(p);
        }
    });
});
