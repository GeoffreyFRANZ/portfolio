document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', e => {
        const targetId = link.dataset.target;
        console.log(targetId);
        if (!targetId) return;
        e.preventDefault();
        const section = document.getElementById(targetId);
        if (!section) return;

        document.querySelectorAll('.container').forEach(sec => {
            sec.classList.remove('active');
        });

        section.classList.add('active');
    });
});

const section = document.querySelector("#projects");
const headers = section.querySelectorAll(".project-header");

// 1. Regrouper chaque projet en un bloc complet
const projectBlocks = [];

headers.forEach((header) => {
    const block = document.createElement("div");
    block.classList.add("project-block");

    // 1. Chercher le contenu associé AVANT de déplacer le header
    let content = header.nextElementSibling;
    while (content && !content.classList.contains("project-content") && !content.classList.contains("project-header")) {
        content = content.nextElementSibling;
    }

    // 2. Maintenant on peut déplacer les éléments
    block.appendChild(header);

    if (content && content.classList.contains("project-content")) {
        block.appendChild(content);
    }

    projectBlocks.push(block);
});

// 2. Réinjecter les blocs dans la section
section.innerHTML = "";
projectBlocks.forEach(block => section.appendChild(block));
