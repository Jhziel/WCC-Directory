document.addEventListener("DOMContentLoaded", () => {
    const arrows = [];

    function setupArrow(pathId, arrowId, speed, direction = 1) {
        const path = document.getElementById(pathId);
        const arrow = document.getElementById(arrowId);

        if (!path || !arrow) return;

        const length = path.getTotalLength();

        path.style.strokeDasharray = length;
        path.style.strokeDashoffset = 0;

        const arrowShape = document.createElementNS(
            "http://www.w3.org/2000/svg",
            "circle",
        );

        arrowShape.setAttribute("r", "10");
        arrowShape.setAttribute("cx", "0");
        arrowShape.setAttribute("cy", "0");
        arrowShape.setAttribute("fill", "blue");

        arrow.appendChild(arrowShape);

        arrows.push({
            room: path.dataset.room,
            path,
            arrow,
            length,
            progress: 0,
            speed,
            direction,
            finished: false,
        });
    }

    setupArrow("ROOM-332", "Circle-332", 2);
    setupArrow("ROOM-315", "Circle-315", 2);
    setupArrow("ROOM-311-B", "Circle-311-B", 2);
    setupArrow("ROOM-313", "Circle-313", 2);
    setupArrow("ROOM-312", "Circle-312", 2);
    setupArrow("ROOM-310", "Circle-310", 3);
    setupArrow("ROOM-308", "Circle-308", 3);
    setupArrow("ROOM-306", "Circle-306", 3);
    setupArrow("ROOM-302-304", "Circle-302-304", 4);
    setupArrow("ROOM-309", "Circle-309", 3);
    setupArrow("ROOM-307", "Circle-307", 4);
    setupArrow("ROOM-305", "Circle-305", 4);
    setupArrow("ROOM-303", "Circle-303", 5);
    setupArrow("COMFORT-ROOM", "Circle-COMFORT-ROOM", 6);
    setupArrow("CR", "Circle-CR", 2);
    setupArrow("ROOM-321", "Circle-321", 2);
    setupArrow("ROOM-320", "Circle-320", 2); 
    setupArrow("ROOM-319", "Circle-319", 2); 
    setupArrow("ROOM-318", "Circle-318", 2); 
    setupArrow("ROOM-317", "Circle-317", 2); 
    setupArrow("ROOM-316", "Circle-316", 2); 
    setupArrow("FACULTY-ROOM", "Circle-FACULTY-ROOM", 3); 

    const activeRoom = new URLSearchParams(window.location.search).get("room");
    const activeArrow = arrows.find((a) => a.room === activeRoom);

    let lastTime = 0;

    function animate(time) {
        if (!activeArrow) return;

        const delta = (time - lastTime) / 16.67;
        lastTime = time;

        if (activeArrow.finished) return;

        const { path, arrow, length, direction } = activeArrow;

        activeArrow.progress += activeArrow.speed * delta * direction;

        if (activeArrow.progress >= length) {
            activeArrow.progress = length;
            activeArrow.finished = true; // stop animation
        }

        path.style.strokeDashoffset = activeArrow.progress;

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

        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
});
