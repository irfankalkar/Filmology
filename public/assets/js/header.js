
const responsive_header_items_field = document.getElementById("responsive_header_items_field");
const more_options_icon = document.getElementById("more_options_icon");

function check_screen_size_for_header_toggle_navigation()
{

    if(window.innerWidth < 768)
    {
        responsive_header_items_field.style.display = "none";
    }

    else
    {
        responsive_header_items_field.style.display = "block";
    }
}

window.addEventListener("resize", check_screen_size_for_header_toggle_navigation);

check_screen_size_for_header_toggle_navigation();

more_options_icon.onclick = function () {

    if (window.innerWidth >= 0 && window.innerWidth <= 767)
    {
        if (responsive_header_items_field.style.display === "none") {
            responsive_header_items_field.style.display = "block";
        }
        
        else if (responsive_header_items_field.style.display === "block") {
            responsive_header_items_field.style.display = "none";
        }
    }
};

const lightButton = document.getElementById("lightButton");
const darkButton = document.getElementById("darkButton");


const lightIcon = lightButton.querySelector("i");
const darkIcon = darkButton.querySelector("i");

const light_class_active = "bi-brightness-high-fill_active";
const dark_class_active = "bi-moon-fill_active";

lightButton.addEventListener("click", function () {
    lightIcon.classList.add(light_class_active); 
    darkIcon.classList.remove(dark_class_active);
    console.log("Light theme activated.");
});

darkButton.addEventListener("click", function () {
    darkIcon.classList.add(dark_class_active);  
    lightIcon.classList.remove(light_class_active);
    console.log("Dark theme activated.");
});