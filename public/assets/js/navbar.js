document.addEventListener("DOMContentLoaded", () => {
    const action_btn = document.querySelector(".header_next_navbar_left_container .action_btn");
    const animation_btn = document.querySelector(".header_next_navbar_left_container .animation_btn");
    const science_fiction_btn = document.querySelector(".header_next_navbar_left_container .science_fiction_btn");
    const drama_btn = document.querySelector(".header_next_navbar_left_container .drama_btn");
    const fantastic_btn = document.querySelector(".header_next_navbar_left_container .fantastic_btn");
    const more_categories = document.querySelector(".header_next_navbar_left_container .more_categories");
    const dropdown_menu = document.querySelector(".header_next_navbar_left_container .dropdown-menu");

    if (!dropdown_menu || !more_categories) {
        return;
    }

    function check_screen_size_for_navbar() {
        if (window.innerWidth < 1400) {
            if (!document.getElementById("fantastic_btn_in_dropdown")) {
                const new_fantastic_item = document.createElement("li");
                new_fantastic_item.id = "fantastic_btn_in_dropdown";
                new_fantastic_item.innerHTML = `<a class="dropdown-item" href="#">Fantastik</a>`;
                dropdown_menu.prepend(new_fantastic_item);
                if (fantastic_btn) fantastic_btn.style.display = "none";
            }
        } else {
            const fantastic_btn_in_dropdown = document.getElementById("fantastic_btn_in_dropdown");
            if (fantastic_btn_in_dropdown) fantastic_btn_in_dropdown.remove();
            if (fantastic_btn) fantastic_btn.style.display = "block";
        }
        if (window.innerWidth < 1200) {
            if (!document.getElementById("drama_btn_in_dropdown")) {
                const new_drama_item = document.createElement("li");
                new_drama_item.id = "drama_btn_in_dropdown";
                new_drama_item.innerHTML = `<a class="dropdown-item" href="#">Dram</a>`;
                dropdown_menu.prepend(new_drama_item);
                if (drama_btn) drama_btn.style.display = "none";
            }
        } else {
            const drama_btn_in_dropdown = document.getElementById("drama_btn_in_dropdown");
            if (drama_btn_in_dropdown) drama_btn_in_dropdown.remove();
            if (drama_btn) drama_btn.style.display = "block";
        }
        if (window.innerWidth < 992) {
            if (!document.getElementById("science_fiction_btn_in_dropdown")) {
                const new_science_fiction_item = document.createElement("li");
                new_science_fiction_item.id = "science_fiction_btn_in_dropdown";
                new_science_fiction_item.innerHTML = `<a class="dropdown-item" href="#">Bilim Kurgu</a>`;
                dropdown_menu.prepend(new_science_fiction_item);
                if (science_fiction_btn) science_fiction_btn.style.display = "none";
            }
        } else {
            const science_fiction_btn_in_dropdown = document.getElementById("science_fiction_btn_in_dropdown");
            if (science_fiction_btn_in_dropdown) science_fiction_btn_in_dropdown.remove();
            if (science_fiction_btn) science_fiction_btn.style.display = "block";
        }
        if (window.innerWidth < 768) {
            if (!document.getElementById("animation_btn_in_dropdown")) {
                const new_animation_item = document.createElement("li");
                new_animation_item.id = "animation_btn_in_dropdown";
                new_animation_item.innerHTML = `<a class="dropdown-item" href="#">Animasyon</a>`;
                dropdown_menu.prepend(new_animation_item);
                if (animation_btn) animation_btn.style.display = "none";
            }
            if (!document.getElementById("action_btn_in_dropdown")) {
                const new_action_item = document.createElement("li");
                new_action_item.id = "action_btn_in_dropdown";
                new_action_item.innerHTML = `<a class="dropdown-item" href="#">Aksiyon</a>`;
                dropdown_menu.prepend(new_action_item);
                if (action_btn) action_btn.style.display = "none";
            }
            more_categories.innerText = "KATEGORİLER";
        } else {
            const animation_btn_in_dropdown = document.getElementById("animation_btn_in_dropdown");
            const action_btn_in_dropdown = document.getElementById("action_btn_in_dropdown");
            if (animation_btn_in_dropdown) animation_btn_in_dropdown.remove();
            if (animation_btn) animation_btn.style.display = "block";
            if (action_btn_in_dropdown) action_btn_in_dropdown.remove();
            if (action_btn) action_btn.style.display = "block";
            more_categories.innerText = "VE DAHASI";
        }
    }
    check_screen_size_for_navbar();
    window.addEventListener("resize", check_screen_size_for_navbar);
});

document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const category = urlParams.get('category');
    const scrollToMovies = urlParams.get('scroll');
    if (category) {
        const moviesTitle = document.querySelector('#Movies');
        if (moviesTitle) {
            moviesTitle.textContent = ` ${category.charAt(0).toUpperCase() + category.slice(1)} `;
        }
    }
    if (scrollToMovies === 'movies') {
        setTimeout(function() {
            const moviesSection = document.querySelector('#Movies');
            if (moviesSection) {
                moviesSection.scrollIntoView({ behavior: 'smooth' });
            }
        }, 300);
    };
});