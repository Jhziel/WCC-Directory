document.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);

    const target = parseInt(params.get("target"));
    const room = params.get("room");

    const currentFloor = parseInt(document.body.dataset.floor);

    if (!target) return;

    if (currentFloor === target) {
        return; // stop navigation
    }

    let nextFloor;

    if (target > currentFloor) {
        nextFloor = currentFloor + 1;
    } else {
        nextFloor = currentFloor - 1;
    }

    // wait for animation
    setTimeout(() => {
        window.location.href = `/floor/${nextFloor}?target=${target}&room=${room}`;
    }, 4000); // match your arrow animation time
});
