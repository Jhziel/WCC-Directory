import panzoom from "panzoom";

document.addEventListener("DOMContentLoaded", () => {
    const element = document.getElementById("panzoom-container");

    const instance = panzoom(element, {
        maxZoom: 6,
        minZoom: 1,
        bounds: true,
        boundsPadding: 0.7,
        smoothScroll: false,
    });
});
