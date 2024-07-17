document.addEventListener('DOMContentLoaded', function() {
    const icon = document.getElementById('icon1');
    const pdfDisplay = document.getElementById('pdfDisplay');

    let offsetX, offsetY, isDragging = false;

    icon.addEventListener('dragstart', function(e) {
        offsetX = e.clientX - icon.getBoundingClientRect().left;
        offsetY = e.clientY - icon.getBoundingClientRect().top;
    });

    pdfDisplay.addEventListener('dragover', function(e) {
        e.preventDefault(); // Allow drop
    });

    pdfDisplay.addEventListener('drop', function(e) {
        e.preventDefault();
        if (isDragging) return;

        isDragging = true;
        const x = e.clientX - offsetX;
        const y = e.clientY - offsetY;
        
        const clonedIcon = icon.cloneNode(true);
        clonedIcon.style.left = x + 'px';
        clonedIcon.style.top = y + 'px';
        pdfDisplay.appendChild(clonedIcon);
        // AJAX call to Laravel backend
    fetch('/insert-icon', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // Add CSRF token for Laravel POST request
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ x: x, y: y })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.message);
        // Here, you can handle the new PDF's path from data.pdfPath
    });
});
        // You can now send x and y to your backend when required.
    });

    
    // Continuing from the previous JavaScript code...

