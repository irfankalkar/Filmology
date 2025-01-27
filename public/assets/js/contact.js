document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.getElementById("resizableTextArea"); 
    const resizeBar = document.getElementById("resizeBar");        
    if (!textarea || !resizeBar) { 
        return; 
    }
    textarea.addEventListener('input', function () {
        textarea.style.height = 'auto';  
        textarea.style.height = textarea.scrollHeight + 'px';  
    });
    let isResizing = false;  

    resizeBar.addEventListener("mousedown", function () {
        isResizing = true;  
        document.addEventListener("mousemove", resizeTextArea);  
        document.addEventListener("mouseup", function () {
            isResizing = false;  
            document.removeEventListener("mousemove", resizeTextArea);  
        });
    });

    function resizeTextArea(e) {
        if (isResizing) {
            const yeniYukseklik = e.clientY - textarea.getBoundingClientRect().top;
            textarea.style.height = yeniYukseklik + "px";  
        }
    }
});

    document.getElementById('clearButton').addEventListener('click', function() {
        var form = document.getElementById('myForm');
        form.reset();
});


