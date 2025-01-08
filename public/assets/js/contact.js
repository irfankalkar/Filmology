const textarea = document.getElementById("resizableTextArea");
const resizeBar = document.getElementById("resizeBar");

// Otomatik büyüme (kullanıcı yazdıkça)
textarea.addEventListener('input', function () {
    textarea.style.height = 'auto';  // Önce sıfırla, sonra hesapla
    textarea.style.height = textarea.scrollHeight + 'px';
});

// Elle büyütme için sürükleme özelliği
let isResizing = false;

resizeBar.addEventListener("mousedown", function (e) {
    isResizing = true;
    document.addEventListener("mousemove", resizeTextArea);
    document.addEventListener("mouseup", function () {
        isResizing = false;
        document.removeEventListener("mousemove", resizeTextArea);
    });
});

function resizeTextArea(e) {
    if (isResizing) {
        const newHeight = e.clientY - textarea.getBoundingClientRect().top;
        textarea.style.height = newHeight + "px";
    }
}