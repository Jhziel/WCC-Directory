import Panzoom from "panzoom";

document.addEventListener("DOMContentLoaded", () => {
    const element = document.getElementById("panzoom-container");

    const panzoom = Panzoom(element, {
        maxZoom: 6,
        minZoom: 1,
        contain: "outside",
    });

    // Enable mouse wheel zoom
    element.parentElement.addEventListener("wheel", panzoom.zoomWithWheel);

    // 🔹 Only drag when NOT clicking a room
    element.addEventListener("mousedown", function (e) {
        if (e.target.closest(".room")) {
            return;
        }
    });

    // 🎯 Click room → zoom into it
    document.querySelectorAll(".room").forEach((room) => {
        room.addEventListener("click", function () {
            const rect = room.getBBox();
            zoomToRoom(rect);

            // Optional: update URL
            const roomId = room.dataset.room;
            const url = new URL(window.location);
            url.searchParams.set("room", roomId);
            window.history.pushState({}, "", url);
        });
    });

    // 🔍 Auto focus from query string
    const selectedRoom = new URLSearchParams(window.location.search).get(
        "room",
    );

    if (selectedRoom) {
        const room = document.querySelector(`[data-room="${selectedRoom}"]`);
        if (room) {
            const rect = room.getBBox();
            zoomToRoom(rect);
        }
    }

    function zoomToRoom(rect) {
        const scale = 3;
        const x = rect.x + rect.width / 2;
        const y = rect.y + rect.height / 2;

        panzoom.zoom(scale);

        panzoom.pan(
            -x * scale + window.innerWidth / 2,
            -y * scale + window.innerHeight / 2,
        );
    }
});
