document.addEventListener("DOMContentLoaded", () => {
    const arrows = [];

    function setupArrow(pathId, arrowId, speed, direction = 1) {
        const path = document.getElementById(pathId);
        const arrow = document.getElementById(arrowId);

        if (!path || !arrow) return;

        const length = path.getTotalLength();

        path.style.strokeDasharray = length;
        path.style.strokeDashoffset = length;

        // Create arrow shape
        const arrowShape = document.createElementNS(
            "http://www.w3.org/2000/svg",
            "path",
        );

        arrowShape.setAttribute("d", "M -8,-6 L 12,0 L -8,6 Z");
        arrowShape.setAttribute("fill", path.getAttribute("stroke"));

        arrow.appendChild(arrowShape);

        arrows.push({
            path,
            arrow,
            length,
            progress: direction === 1 ? 0 : length,
            speed,
            direction,
            phase: "draw",
        });
    }

    // Register all arrows
    setupArrow("path1", "arrow1", 1.2);
    setupArrow("path2", "arrow2", 1.1);
    setupArrow("path3", "arrow3", 1.1);
    setupArrow("path4", "arrow4", 1.1);
    setupArrow("path6", "arrow6", 1.1);
    setupArrow("path7", "arrow7", 1.1);
    setupArrow("path8", "arrow8", 1.1);
    setupArrow("path9", "arrow9", 1.2);
    setupArrow("path10", "arrow10", 1.1);
    setupArrow("path11", "arrow11", 1.1);
    setupArrow("path12", "arrow12", 1.1);
    setupArrow("path13", "arrow13", 1.2);

    let lastTime = 0;

    function animate(time) {
        const delta = (time - lastTime) / 16.67; // normalize to 60fps
        lastTime = time;

        arrows.forEach((obj) => {
            const { path, arrow, length, direction } = obj;

            if (obj.phase === "draw") {
                obj.progress += obj.speed * delta * direction;

                path.style.strokeDashoffset = length - obj.progress;

                const point = path.getPointAtLength(obj.progress);

                const ahead = path.getPointAtLength(
                    Math.min(Math.max(obj.progress + 2 * direction, 0), length),
                );

                const angle =
                    (Math.atan2(ahead.y - point.y, ahead.x - point.x) * 180) /
                    Math.PI;

                arrow.setAttribute(
                    "transform",
                    `translate(${point.x}, ${point.y}) rotate(${angle})`,
                );

                arrow.style.opacity = "1";

                if (
                    (direction === 1 && obj.progress >= length) ||
                    (direction === -1 && obj.progress <= 0)
                ) {
                    obj.progress = direction === 1 ? length : 0;
                    arrow.style.opacity = "0";
                    obj.phase = "erase";
                }
            } else if (obj.phase === "erase") {
                obj.progress += obj.speed * delta * direction;

                path.style.strokeDashoffset = length - obj.progress;

                if (direction === 1 && obj.progress >= length * 2) {
                    obj.progress = 0;
                    obj.phase = "draw";
                }
            }
        });

        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
});
