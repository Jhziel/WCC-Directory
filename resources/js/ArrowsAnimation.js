import { animateArrow, createArrows } from "./arrowAnimation";
import { arrowDefinitions } from "./arrowDefinitions";
import { goToNextFloor } from "./floorNavigation";

document.addEventListener("DOMContentLoaded", () => {
    const arrows = createArrows(arrowDefinitions);
    const activeRoom = new URLSearchParams(window.location.search).get("room");
    const activeArrow = arrows.find((arrow) => arrow.room === activeRoom);

    if (activeArrow) animateArrow(activeArrow, goToNextFloor);
});
