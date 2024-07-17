// PDF.js setup to display PDF
const url = '/pii.pdf';

var pdfjsLib = window['pdfjs-dist/build/pdf'];
console.log(pdfjsLib);
var loadingTask = window.pdfjsLib;
console.log(pdfjsLib);

document.addEventListener('DOMContentLoaded', function() {
pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
    pdfDoc = pdfDoc_;
    const dropzone = document.getElementById('dropzone');

    pdfDoc.getPage(1).then(page => {
        const viewport = page.getViewport({scale: 1});
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        canvas.height = viewport.height;
        canvas.width = viewport.width;
        dropzone.appendChild(canvas);

        const renderCtx = {
            canvasContext: ctx,
            viewport: viewport
        };
        page.render(renderCtx);
    });
});
});
// Drag and drop functionality
// const icon = document.getElementById('icon1');
// icon.addEventListener('dragstart', (e) => {
//     e.dataTransfer.setData('text/plain', 'icon1');
// });
// dropzone.addEventListener('dragover', (e) => {
//     e.preventDefault();
//     dropzone.style.backgroundColor = "#e9ecef"; // light gray
// });

// dropzone.addEventListener('dragleave', () => {
//     dropzone.style.backgroundColor = "white";
// });

// dropzone.addEventListener('drop', () => {
//     dropzone.style.backgroundColor = "white";
// });

// const dropzone = document.getElementById('dropzone');
// dropzone.addEventListener('dragover', (e) => {
//     e.preventDefault();
// });

// dropzone.addEventListener('drop', (e) => {
//     e.preventDefault();
//     const iconId = e.dataTransfer.getData('text/plain');
//     const droppedIcon = document.getElementById(iconId);
//     const iconClone = droppedIcon.cloneNode(true);
//     iconClone.style.position = 'absolute';
//     iconClone.style.top = (e.clientY - dropzone.getBoundingClientRect().top - 25) + 'px'; // 25 is half of icon height
//     iconClone.style.left = (e.clientX - dropzone.getBoundingClientRect().left - 25) + 'px'; // 25 is half of icon width
//     dropzone.appendChild(iconClone);
// });
