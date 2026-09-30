export function goToNextFloor() {
    const currentFloor = parseInt(window.location.pathname.split("/").pop());
    const targetFloor = parseInt(localStorage.getItem("targetFloor"));
    const room = parseInt(localStorage.getItem("room"));

    if (!targetFloor) return;

    if (currentFloor === targetFloor) {
        localStorage.removeItem("targetFloor");
        localStorage.removeItem("room");
        return;
    }

    const nextFloor = currentFloor + (targetFloor > currentFloor ? 1 : -1);
    const isFar = Math.abs(currentFloor - targetFloor) > 1;

    setTimeout(() => {
        if (isFar) {
            const direction = currentFloor > targetFloor ? "down" : "up";
            window.location.href = `/floor/${nextFloor}?room=${direction}`;
            return;
        }

        window.location.href = `/floor/${nextFloor}?room=${room}`;
    }, 1500);
}
