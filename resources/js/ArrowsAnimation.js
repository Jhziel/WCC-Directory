document.addEventListener("DOMContentLoaded", () => {
    function animateArrow(pathId, arrowId, speed, direction = 1) {
        const path = document.getElementById(pathId);
        const arrow = document.getElementById(arrowId);

        if (!path || !arrow) return;

        const length = path.getTotalLength();
        let progress = direction === 1 ? 0 : length;

        // Hide the line initially
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

      let phase = "draw"; // draw → erase

      function animate() {
          if (phase === "draw") {
              progress += speed * direction;

              path.style.strokeDashoffset = length - progress;

              // Arrow movement
              const point = path.getPointAtLength(progress);
              const ahead = path.getPointAtLength(
                  Math.min(Math.max(progress + 2 * direction, 0), length),
              );

              const angle =
                  (Math.atan2(ahead.y - point.y, ahead.x - point.x) * 180) /
                  Math.PI;

              arrow.setAttribute(
                  "transform",
                  `translate(${point.x}, ${point.y}) rotate(${angle})`,
              );

              arrow.style.opacity = "1";

              // When reach end → switch phase
              if (
                  (direction === 1 && progress >= length) ||
                  (direction === -1 && progress <= 0)
              ) {
                  progress = direction === 1 ? length : 0;
                  arrow.style.opacity = "0"; // hide arrow
                  phase = "erase";
              }
          } else if (phase === "erase") {
              progress += speed * direction;
            
              path.style.strokeDashoffset = length - progress;

              if (direction === 1 && progress >= length*2) {
                  progress = 0;
                  phase = "draw";
              }
          }

          requestAnimationFrame(animate);
      }

        animate();
    }
    // EE SHOP
    animateArrow("path1", "arrow1", 1);
    animateArrow("path2", "arrow2", 0.9);
    animateArrow("path3", "arrow3", 0.9);
    animateArrow("path4", "arrow4", 0.9);
    animateArrow("path6", "arrow6", 0.9);
    animateArrow("path7", "arrow7", 0.9);
    animateArrow("path8", "arrow8", 0.9);
    animateArrow("path9", "arrow9", 1);
    animateArrow("path10", "arrow10", 0.9);
    animateArrow("path11", "arrow11", 0.9);
    animateArrow("path12", "arrow12", 0.9);
    animateArrow("path13", "arrow13", 1);

    //Cashier

    
});
