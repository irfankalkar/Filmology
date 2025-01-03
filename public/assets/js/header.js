
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




        // responsive_header_items_field.classList.remove("col-md-8");
        // responsive_header_items_field.classList.add("col-md-7");