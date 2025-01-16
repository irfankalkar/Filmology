
// Sayfa tamamen yüklendiğinde bu kod çalışacak
document.addEventListener("DOMContentLoaded", function () {

    // İlgili HTML elemanlarını seçiyoruz
    const textarea = document.getElementById("resizableTextArea"); 
    const resizeBar = document.getElementById("resizeBar");        

    // Eğer elemanlar bulunmazsa, kodu burada durduruyoruz
    if (!textarea || !resizeBar) { 
        return; 
    }

    // Kullanıcı yazdıkça otomatik olarak yükseklik ayarlama
    textarea.addEventListener('input', function () {
        // Önce yükseklik sıfırlanır, ardından içerik yüksekliği kadar ayarlanır
        textarea.style.height = 'auto';  
        textarea.style.height = textarea.scrollHeight + 'px';  
    });

    // Sürükleyerek boyutlandırma için gerekli değişken
    let isResizing = false;  

    // Kullanıcı fare ile sürüklemeye başladığında
    resizeBar.addEventListener("mousedown", function () {
        isResizing = true;  
        
        // Fare hareket ettikçe boyutlandırma fonksiyonunu çağır
        document.addEventListener("mousemove", resizeTextArea);  

        // Fare bırakıldığında boyutlandırmayı durdur
        document.addEventListener("mouseup", function () {
            isResizing = false;  
            document.removeEventListener("mousemove", resizeTextArea);  
        });
    });

    // Boyutlandırma fonksiyonu: Fare konumuna göre textarea'nın yüksekliğini ayarlıyor
    function resizeTextArea(e) {
        if (isResizing) {
            const yeniYukseklik = e.clientY - textarea.getBoundingClientRect().top;
            textarea.style.height = yeniYukseklik + "px";  
        }
    }
});




