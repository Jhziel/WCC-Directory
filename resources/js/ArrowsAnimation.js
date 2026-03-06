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
    setupArrow("ROOM-211", "Circle-211", 2);
    setupArrow("ROOM-210", "Circle-210", 2);
    setupArrow("ROOM-208", "Circle-208", 3);
    setupArrow("COMPUTER-ROOM", "Circle-COMPUTER ROOM", 3);
    setupArrow("ROOM-202", "Circle-202", 4);
    setupArrow("ROOM-CR-2", "Circle-CR-2", 6);
    setupArrow("ROOM-203", "Circle-203", 6);
    setupArrow("ROOM-205", "Circle-205", 6);
    setupArrow("ROOM-207", "Circle-207", 4);
    setupArrow("ROOM-209", "Circle-209", 4);
    setupArrow("ROOM-111", "Circle-111", 3);
    setupArrow("ROOM-EE-SHOP", "Circle-EE-SHOP", 3);
    setupArrow("ROOM-103-B", "Circle-103-B", 4);
    setupArrow("ROOM-103-A", "Circle-103-A", 4);
    setupArrow("COMFORT-ROOM-1", "Circle-COMFORT-ROOM-1", 6);
    setupArrow("ROOM-101", "Circle-ROOM-101", 6);
    setupArrow("ROOM-CLINIC-1", "Circle-ROOM-CLINIC-1", 8);
    setupArrow("ROOM-112", "Circle-112", 3);
    setupArrow("ROOM-108", "Circle-108", 4);
    setupArrow("ROOM-106", "Circle-106", 5);
    setupArrow("ROOM-104", "Circle-104", 6);
    setupArrow("ROOM-102", "Circle-102", 7);
    setupArrow("CAREER-CENTER", "Circle-CAREER-CENTER", 3);
    setupArrow("ATM-LAB", "Circle-ATM-LAB", 5);
    setupArrow("HANGAR", "Circle-HANGAR", 4);
    setupArrow("ROOM-401", "Circle-401", 6);
    setupArrow("ROOM-403", "Circle-403", 6);
    setupArrow("ROOM-405", "Circle-405", 5);
    setupArrow("ROOM-407", "Circle-407", 5);
    setupArrow("ROOM-409", "Circle-409", 3);
    setupArrow("ROOM-411", "Circle-411", 2);
    setupArrow("COMFORT-ROOM-4", "Circle-COMFORT-ROOM-4", 7);
    setupArrow("ROOM-402", "Circle-402", 7);
    setupArrow("ROOM-404", "Circle-404", 7);
    setupArrow("ROOM-406", "Circle-406", 5);
    setupArrow("ROOM-408", "Circle-408", 5);
    setupArrow("ROOM-410", "Circle-410", 4);
    setupArrow("ROOM-412", "Circle-412", 2);
    setupArrow("LIBRARY", "Circle-LIBRARY", 2);
    setupArrow("DEPARTMENT", "Circle-DEPARTMENT", 3);
    setupArrow("ROOM-513", "Circle-513", 2);
    setupArrow("ROOM-511", "Circle-511", 3);
    setupArrow("ROOM-509", "Circle-509", 4);
    setupArrow("ROOM-507", "Circle-507", 4);
    setupArrow("ROOM-505", "Circle-505", 5);
    setupArrow("ROOM-503", "Circle-503", 5);
    setupArrow("ROOM-501", "Circle-501", 8);
    setupArrow("COMFORT-ROOM-5", "Circle-COMFORT-ROOM-5", 8);
    setupArrow("ROOM-512", "Circle-512", 2);
    setupArrow("ROOM-510", "Circle-510", 3);
    setupArrow("ROOM-508", "Circle-508", 3);
    setupArrow("ROOM-506", "Circle-506", 5);
    setupArrow("ROOM-514", "Circle-514", 3);
    setupArrow("LIBRARY-5", "Circle-LIBRARY-5", 3);
    setupArrow("ROOM-504-502", "Circle-504-502", 2);
    setupArrow("MOCK-HOTEL", "Circle-MOCK-HOTEL", 2);
    setupArrow("ROOM-614", "Circle-614", 2);
    setupArrow("ROOM-615", "Circle-615", 3);
    setupArrow("ROOM-613", "Circle-613", 2);
    setupArrow("ROOM-611", "Circle-611", 3);
    setupArrow("ROOM-609", "Circle-609", 3);
    setupArrow("ROOM-607", "Circle-607", 4);
    setupArrow("ROOM-605", "Circle-605", 6);
    setupArrow("ROOM-603", "Circle-603", 6);
    setupArrow("ROOM-601", "Circle-601", 6);
    setupArrow("ROOM-602", "Circle-602", 6);
    setupArrow("ROOM-604", "Circle-604", 6);
    setupArrow("ROOM-606", "Circle-606", 5);
    setupArrow("ROOM-608", "Circle-608", 4);
    setupArrow("ROOM-610", "Circle-610", 4);
    setupArrow("ROOM-612", "Circle-612", 3);
    setupArrow("EXIT", "Circle-EXIT", 1.9);

    const activeRoom = new URLSearchParams(window.location.search).get("room");
    const activeArrow = arrows.find((a) => a.room === activeRoom);

    let lastTime = 0;

    function animate(time) {
        if (!activeArrow) return;

        const delta = (time - lastTime) / 16.67;
        lastTime = time;

        if (activeArrow.finished) {
            goNextFloor();
            return;
        }

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

    function goNextFloor() {
        const currentFloor = parseInt(
            window.location.pathname.split("/").pop(),
        );
        const targetFloor = parseInt(localStorage.getItem("targetFloor"));
        const room = parseInt(localStorage.getItem("room"));

        if (!targetFloor) return;

        if (currentFloor === targetFloor) {
            localStorage.removeItem("targetFloor");
            localStorage.removeItem("room");
            return;
        }

        let nextFloor;

        if (targetFloor > currentFloor) {
            nextFloor = currentFloor + 1;
        } else {
            nextFloor = currentFloor - 1;
        }

        setTimeout(() => {
            const isFar = Math.abs(currentFloor - targetFloor) > 1;

            if (isFar) {
                if (currentFloor > targetFloor)
                    window.location.href = "/floor/" + nextFloor + "?room=down";
                else window.location.href = "/floor/" + nextFloor + "?room=up";
            } else {
                window.location.href = `/floor/${nextFloor}?room=${room}`;
            }
        }, 2000);
    }
});
