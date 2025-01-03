
document.addEventListener("DOMContentLoaded", () =>
{
    
    const biography_btn = document.querySelector(".header_next_navbar_left_container .biography_btn");
    const documentary_btn = document.querySelector(".header_next_navbar_left_container .documentary_btn");
    const animation_btn = document.querySelector(".header_next_navbar_left_container .animation_btn");
    const action_btn = document.querySelector(".header_next_navbar_left_container .action_btn");
    const family_btn = document.querySelector(".header_next_navbar_left_container .family_btn");

    const more_categories = document.querySelector(".header_next_navbar_left_container .more_categories");

    const dropdown_menu = document.querySelector(".header_next_navbar_left_container .dropdown-menu");
  


    function check_screen_size_for_navbar()
    {
        if (window.innerWidth < 1400)
        {
            if (!document.getElementById("biography_btn_in_dropdown"))
            {
                const new_biography_item = document.createElement("li");
                new_biography_item.id = "biography_btn_in_dropdown";
                new_biography_item.innerHTML = `<a class="dropdown-item" href="#">Biyografi</a>`;

                dropdown_menu.prepend(new_biography_item);
                biography_btn.style.display = "none";
            }
        }      
        
        else
        {
            const biography_btn_in_dropdown = document.getElementById("biography_btn_in_dropdown");

            if (biography_btn_in_dropdown)
            {
                biography_btn_in_dropdown.remove();
                biography_btn.style.display = "block";
            }
        }







        if (window.innerWidth < 1200)
        {
            if (!document.getElementById("documentary_btn_in_dropdown"))
            {
                const new_documentary_item = document.createElement("li");
                new_documentary_item.id = "documentary_btn_in_dropdown";
                new_documentary_item.innerHTML = `<a class="dropdown-item" href="#">Belgesel</a>`;

                dropdown_menu.prepend(new_documentary_item);
                documentary_btn.style.display = "none";
            }
        }      
        
        else
        {
            const documentary_btn_in_dropdown = document.getElementById("documentary_btn_in_dropdown");

            if (documentary_btn_in_dropdown)
            {
                documentary_btn_in_dropdown.remove();
                documentary_btn.style.display = "block";
            }
        }





        if (window.innerWidth < 992)
        {
            if (!document.getElementById("animation_btn_in_dropdown"))
            {
                const new_animation_item = document.createElement("li");
                new_animation_item.id = "animation_btn_in_dropdown";
                new_animation_item.innerHTML = `<a class="dropdown-item" href="#">Animasyon</a>`;

                dropdown_menu.prepend(new_animation_item);
                animation_btn.style.display = "none";
            }
        }      
        
        else
        {
            const animation_btn_in_dropdown = document.getElementById("animation_btn_in_dropdown");

            if (animation_btn_in_dropdown)
            {
                animation_btn_in_dropdown.remove();
                animation_btn.style.display = "block";
            }
        }






        if (window.innerWidth < 768)
        {
            if (!document.getElementById("action_btn_in_dropdown"))
            {
                const new_action_item = document.createElement("li");
                new_action_item.id = "action_btn_in_dropdown";
                new_action_item.innerHTML = `<a class="dropdown-item" href="#">Aksiyon</a>`;

                dropdown_menu.prepend(new_action_item);
                action_btn.style.display = "none";
            }


            if (!document.getElementById("family_btn_in_dropdown"))
            {
                const new_family_item = document.createElement("li");
                new_family_item.id = "family_btn_in_dropdown";
                new_family_item.innerHTML = `<a class="dropdown-item" href="#">Aile</a>`;

                dropdown_menu.prepend(new_family_item);
                family_btn.style.display = "none";
            }

            more_categories.innerText = "KATEGORİLER";
        }      
        
        else
        {
            const action_btn_in_dropdown = document.getElementById("action_btn_in_dropdown");
            const family_btn_in_dropdown = document.getElementById("family_btn_in_dropdown");

            if (action_btn_in_dropdown)
            {
                action_btn_in_dropdown.remove();
                action_btn.style.display = "block";
            }

            if (family_btn_in_dropdown)
            {
                family_btn_in_dropdown.remove();
                family_btn.style.display = "block";
            }

            more_categories.innerText = "VE DAHASI";
        }
    }


    check_screen_size_for_navbar();

    window.addEventListener("resize", check_screen_size_for_navbar);

});
  