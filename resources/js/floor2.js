// const path = document.getElementById("arrowPath");
// const arrow = document.getElementById("movingArrow");

// if (!path || !arrow) return;

// const length = path.getTotalLength();

// // Hide line initially
// path.style.strokeDasharray = length;
// path.style.strokeDashoffset = length;
// console.log(length);

// let progress = 0;
// const speed = 1.4;

// function animate() {
//     progress += speed;

//     if (progress > length) {
//         progress = 0;
//     }

//     // Reveal line
//     path.style.strokeDashoffset = length - progress;

//     const point = path.getPointAtLength(progress);
//     const pointAhead = path.getPointAtLength(
//         Math.min(progress + 2, length),
//     );

//     const angle =
//         (Math.atan2(pointAhead.y - point.y, pointAhead.x - point.x) * 180) /
//             Math.PI +
//         180;

//     // ⚡ Important: Move + rotate the whole <g>
//     arrow.setAttribute(
//         "transform",
//         `translate(${point.x}, ${point.y}) rotate(${angle})`,
//     );

//     requestAnimationFrame(animate);
// }

// animate();

// // Enable mouse wheel zoom
// wrapper.addEventListener("wheel", instance.zoomWithWheel);

// // // 🔹 Only drag when NOT clicking a room
// // element.addEventListener("mousedown", function (e) {
// //     if (e.target.closest(".room")) {
// //         return;
// //     }
// // });

// /* ----------------------------------
//    🎯 Click room → Zoom into it
// ---------------------------------- */
// document.querySelectorAll(".room").forEach((room) => {
//     room.addEventListener("click", function (e) {
//         e.stopPropagation();

//         const rect = room.getBoundingClientRect();
//         zoomToRoom(room);

//         // Update URL without reload
//         const roomId = room.dataset.room;
//         const url = new URL(window.location);
//         url.searchParams.set("room", roomId);
//         window.history.pushState({}, "", url);
//     });
// });

// /* ----------------------------------
//    🔍 Auto focus from URL
// ---------------------------------- */
// const selectedRoom = new URLSearchParams(window.location.search).get(
//     "room",
// );

// if (selectedRoom) {
//     const room = document.querySelector(`[data-room="${selectedRoom}"]`);
//     if (room) zoomToRoom(room.getBBox());
// }

// function smoothReset() {
//     const transform = instance.getTransform();
//     const currentScale = transform.scale;
//     const minScale = instance.getMinZoom();

//     const wrapperRect = wrapper.getBoundingClientRect();

//     const moveX = wrapperRect.x + wrapperRect.width / 2;
//     const moveY = wrapperRect.y + wrapperRect.height / 2;

//     // Optional: gently move back to origin
//     setTimeout(() => {
//         instance.smoothZoom(moveX, moveY, minScale / currentScale);
//     }, 300);
// }
// /* ----------------------------------
//    🔥 Zoom Function
// ---------------------------------- */
// function zoomToRoom(room) {

//     const wrapperRect = wrapper.getBoundingClientRect();
//     const roomRect = room.getBoundingClientRect();

//     const wrapperCenterX = wrapperRect.left + wrapperRect.width / 2;
//     const wrapperCenterY = wrapperRect.top + wrapperRect.height / 2;

//     const roomCenterX = roomRect.left + roomRect.width / 2;
//     const roomCenterY = roomRect.top + roomRect.height / 2;

//     const dx = wrapperCenterX - roomCenterX;
//     const dy = wrapperCenterY - roomCenterY;

//     const targetScale = 3;

//     const currentScale = instance.getTransform().scale;

//     // Clamp zoom safely
//     const safeScale = Math.max(
//         instance.getMinZoom(),
//         Math.min(targetScale, instance.getMaxZoom()),
//     );
//     // Reset first (important for consistent centering)
//     instance.moveTo(0, 0);
//     instance.zoomAbs(0, 0, 1);
//     // Smooth zoom relative
//     instance.smoothZoom(dx, dy, safeScale / currentScale);

//     setTimeout(() => {
//         smoothReset();
//     }, 1500);
// }
