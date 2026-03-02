@props(['floor'])

<script>
document.addEventListener('DOMContentLoaded', function () {
    const svg = document.querySelector('.svg-wrapper svg');
    if (!svg) return;
    
    // State: null = no selection, object = from location selected
    let fromLocation = null;
    
    // Hallway Y coordinates for Floor 1 (main horizontal corridors)
    const MAIN_HALLWAY_Y = 270;  // Between top and bottom rows
    const LOWER_HALLWAY_Y = 500; // Between main floor and AMT area
    
    // Check if there's a room parameter in the URL
    const urlParams = new URLSearchParams(window.location.search);
    const roomId = urlParams.get('room');
    
    if (roomId) {
        fetchRoomAndNavigate(roomId);
    }
    
    // Add click handlers to SVG
    svg.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        // Get click position relative to SVG
        const pt = svg.createSVGPoint();
        pt.x = e.clientX;
        pt.y = e.clientY;
        const svgP = pt.matrixTransform(svg.getScreenCTM().inverse());
        
        const clickX = svgP.x;
        const clickY = svgP.y;
        
        // Find closest room to click position
        fetch(`/api/rooms/floor/{{ $floor }}`)
            .then(response => response.json())
            .then(rooms => {
                let closestRoom = null;
                let minDistance = Infinity;
                
                rooms.forEach(room => {
                    const dist = Math.sqrt(
                        Math.pow(room.center_x - clickX, 2) + 
                        Math.pow(room.center_y - clickY, 2)
                    );
                    if (dist < minDistance) {
                        minDistance = dist;
                        closestRoom = room;
                    }
                });
                
                // Increased distance threshold for better click detection
                if (closestRoom && minDistance < 200) {
                    handleRoomClick(closestRoom);
                }
            });
    });

    function fetchRoomAndNavigate(roomId) {
        fetch(`/api/rooms/${roomId}`)
            .then(response => response.json())
            .then(room => {
                if (room && room.floor === {{ $floor }}) {
                    fromLocation = null;
                    highlightRoom(room, 'to');
                    showRoomInfo(room, 'destination');
                }
            })
            .catch(error => console.error('Error fetching room:', error));
    }

    function handleRoomClick(room) {
        if (!fromLocation) {
            // First click - set FROM location
            fromLocation = room;
            clearPath();
            highlightRoom(room, 'from');
            showRoomInfo(room, 'from');
        } else {
            // Second click - set TO location and draw path
            highlightRoom(room, 'to');
            drawHallwayPath(fromLocation, room);
            showPathInfo(fromLocation, room);
            fromLocation = null; // Reset for next selection
        }
    }

    function highlightRoom(room, type) {
        // Remove existing highlight of same type
        const existingHighlight = svg.querySelector(`#highlight-${type}`);
        if (existingHighlight) existingHighlight.remove();

        const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
        circle.setAttribute('id', `highlight-${type}`);
        circle.setAttribute('cx', room.center_x);
        circle.setAttribute('cy', room.center_y);
        circle.setAttribute('r', '20');
        circle.setAttribute('fill', 'none');
        circle.setAttribute('stroke', type === 'from' ? '#00FF00' : '#FF0000');
        circle.setAttribute('stroke-width', '4');
        
        svg.appendChild(circle);
    }

    function clearPath() {
        const existingPath = svg.querySelector('#direction-path');
        const existingFrom = svg.querySelector('#highlight-from');
        const existingTo = svg.querySelector('#highlight-to');
        if (existingPath) existingPath.remove();
        if (existingFrom) existingFrom.remove();
        if (existingTo) existingTo.remove();
    }

    function drawHallwayPath(from, to) {
        const existingPath = svg.querySelector('#direction-path');
        if (existingPath) existingPath.remove();

        // Determine which hallway to use based on room positions
        const fromY = from.center_y;
        const toY = to.center_y;
        
        // Create path points through hallway
        let pathPoints = [];
        pathPoints.push({ x: from.center_x, y: from.center_y });
        
        // Determine the best hallway to use
        // Top row rooms: y < 250
        // Middle row rooms: y between 250 and 500
        // Bottom row (AMT): y > 500
        
        const fromIsTop = fromY < 220;
        const toIsTop = toY < 220;
        const fromIsBottom = fromY > 500;
        const toIsBottom = toY > 500;
        
        if (fromIsTop && toIsTop) {
            // Both in top row - go through main hallway
            pathPoints.push({ x: from.center_x, y: MAIN_HALLWAY_Y });
            pathPoints.push({ x: to.center_x, y: MAIN_HALLWAY_Y });
        } else if (fromIsBottom && toIsBottom) {
            // Both in AMT area - go through lower hallway
            pathPoints.push({ x: from.center_x, y: LOWER_HALLWAY_Y });
            pathPoints.push({ x: to.center_x, y: LOWER_HALLWAY_Y });
        } else if (!fromIsBottom && !toIsBottom) {
            // Both in main area (top or middle) - use main hallway
            pathPoints.push({ x: from.center_x, y: MAIN_HALLWAY_Y });
            pathPoints.push({ x: to.center_x, y: MAIN_HALLWAY_Y });
        } else {
            // One in main area, one in AMT area - need to use both hallways
            if (fromIsBottom) {
                // Going from AMT to main area
                pathPoints.push({ x: from.center_x, y: LOWER_HALLWAY_Y });
                pathPoints.push({ x: 1000, y: LOWER_HALLWAY_Y }); // Connection point
                pathPoints.push({ x: 1000, y: MAIN_HALLWAY_Y });
                pathPoints.push({ x: to.center_x, y: MAIN_HALLWAY_Y });
            } else {
                // Going from main area to AMT
                pathPoints.push({ x: from.center_x, y: MAIN_HALLWAY_Y });
                pathPoints.push({ x: 1000, y: MAIN_HALLWAY_Y });
                pathPoints.push({ x: 1000, y: LOWER_HALLWAY_Y }); // Connection point
                pathPoints.push({ x: to.center_x, y: LOWER_HALLWAY_Y });
            }
        }
        
        pathPoints.push({ x: to.center_x, y: to.center_y });
        
        // Create SVG polyline from points
        const pointsStr = pathPoints.map(p => `${p.x},${p.y}`).join(' ');
        
        const polyline = document.createElementNS('http://www.w3.org/2000/svg', 'polyline');
        polyline.setAttribute('id', 'direction-path');
        polyline.setAttribute('points', pointsStr);
        polyline.setAttribute('fill', 'none');
        polyline.setAttribute('stroke', '#FF0000');
        polyline.setAttribute('stroke-width', '4');
        polyline.setAttribute('stroke-dasharray', '10,5');
        polyline.setAttribute('stroke-linecap', 'round');
        polyline.setAttribute('stroke-linejoin', 'round');
        
        svg.appendChild(polyline);
    }

    function showRoomInfo(room, type) {
        removeInfoBox();
        
        const label = type === 'from' ? 'FROM' : 'TO';
        const color = type === 'from' ? 'green' : 'red';
        
        const infoBox = document.createElement('div');
        infoBox.id = 'room-info-box';
        infoBox.className = 'fixed top-20 right-8 bg-white p-4 rounded-lg shadow-xl z-50 max-w-xs';
        infoBox.style.borderLeft = `4px solid ${color}`;
        infoBox.innerHTML = `
            <div class="flex justify-between items-start mb-2">
                <span class="text-xs font-bold text-${color}-600">${label}</span>
                <button onclick="this.closest('#room-info-box').remove();" class="text-gray-400 hover:text-gray-600">&times;</button>
            </div>
            <h3 class="font-bold text-gray-800">${room.name}</h3>
            <p class="text-sm text-gray-600">${room.type}</p>
            <p class="text-xs text-gray-500 mt-2">${type === 'from' ? 'Now click your destination' : 'Click anywhere to start new route'}</p>
        `;
        document.body.appendChild(infoBox);
    }

    function showPathInfo(from, to) {
        removeInfoBox();
        
        const infoBox = document.createElement('div');
        infoBox.id = 'room-info-box';
        infoBox.className = 'fixed top-20 right-8 bg-white p-4 rounded-lg shadow-xl z-50 max-w-xs border-l-4 border-red-500';
        infoBox.innerHTML = `
            <div class="flex justify-between items-start mb-2">
                <span class="text-xs font-bold text-gray-600">ROUTE</span>
                <button onclick="this.closest('#room-info-box').remove(); document.querySelector('#direction-path')?.remove(); document.querySelector('#highlight-from')?.remove(); document.querySelector('#highlight-to')?.remove();" class="text-gray-400 hover:text-gray-600">&times;</button>
            </div>
            <div class="mb-2">
                <span class="text-xs text-green-600 font-semibold">FROM:</span>
                <p class="font-bold text-gray-800">${from.name}</p>
            </div>
            <div>
                <span class="text-xs text-red-600 font-semibold">TO:</span>
                <p class="font-bold text-gray-800">${to.name}</p>
            </div>
            <p class="text-xs text-gray-500 mt-3">Click anywhere to start new route</p>
        `;
        document.body.appendChild(infoBox);
    }

    function removeInfoBox() {
        const existing = document.querySelector('#room-info-box');
        if (existing) existing.remove();
    }
});
</script>
