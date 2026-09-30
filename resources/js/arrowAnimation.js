function createArrow(pathId, arrowId, speed) {
    const path = document.getElementById(pathId);
    const arrow = document.getElementById(arrowId);

    if (!path || !arrow) return null;

    const length = path.getTotalLength();
    const arrowShape = document.createElementNS(
        "http://www.w3.org/2000/svg",
        "circle",
    );

    path.style.strokeDasharray = "0,13";
    arrowShape.setAttribute("r", "10");
    arrowShape.setAttribute("cx", "0");
    arrowShape.setAttribute("cy", "0");
    arrowShape.setAttribute("fill", "blue");
    arrow.appendChild(arrowShape);

    return {
        room: path.dataset.room,
        path,
        arrow,
        length,
        progress: 0,
        speed,
        direction: 1,
        finished: false,
    };
}

export function createArrows(definitions) {
    return definitions
        .map(([pathId, arrowId, speed]) => createArrow(pathId, arrowId, speed))
        .filter(Boolean);
}

function updateArrowPosition(activeArrow) {
    const { path, arrow, length } = activeArrow;
    const point = path.getPointAtLength(length - activeArrow.progress);
    const ahead = path.getPointAtLength(
        Math.min(activeArrow.progress + 1, length),
    );
    const angle =
        (Math.atan2(ahead.y - point.y, ahead.x - point.x) * 180) / Math.PI +
        180;

    arrow.setAttribute(
        "transform",
        `translate(${point.x}, ${point.y}) rotate(${angle})`,
    );
}

export function animateArrow(activeArrow, onFinished) {
    let lastTime = 0;

    function animate(time) {
        if (activeArrow.finished) {
            onFinished();
            return;
        }

        const delta = (time - lastTime) / 16.67;
        lastTime = time;
        activeArrow.progress = Math.min(
            activeArrow.progress +
                activeArrow.speed * delta * activeArrow.direction,
            activeArrow.length,
        );
        activeArrow.finished = activeArrow.progress >= activeArrow.length;

        updateArrowPosition(activeArrow);
        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
}
