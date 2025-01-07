// Rastgele renk üreten fonksiyon
function getRandomColor() {
    return '#' + Math.floor(Math.random() * 16777215).toString(16);
}

// Belirli CSS dosyasında tanımlı olan class'ı filtreleyen ve içindeki tüm öğelere rastgele border atan fonksiyon
function addBordersToClass(cssFileName, targetClass) {
    const stylesheets = document.styleSheets;
    let classFound = false;

    // CSS dosyasında class kontrolü
    for (let sheet of stylesheets) {
        if (sheet.href && sheet.href.includes(cssFileName)) {
            for (let rule of sheet.cssRules) {
                if (rule.selectorText === `.${targetClass}`) {
                    classFound = true;
                    break;
                }
            }
        }
    }

    // Eğer belirtilen class CSS dosyasında varsa, tüm elemanlara border ekle
    if (classFound) {
        const elements = document.querySelectorAll(`.${targetClass} *`);
        elements.forEach(element => {
            element.style.border = `1px solid ${getRandomColor()}`;
        });
        console.log(`"${targetClass}" class'ının içindeki tüm öğelere border eklendi.`);
    } else {
        console.warn(`Belirtilen CSS dosyasında "${targetClass}" class'ı bulunamadı.`);
    }
}

// Kullanım: CSS dosyası adı ve dış kapsayıcı class ismi
addBordersToClass('', '');
