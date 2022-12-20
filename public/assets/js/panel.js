//Mostrar menus no painel administrativo

const create_pizza = (id) => {
    if (id == "create_pizza") {
        let menu_create_pizza = document.getElementById("menu_create_pizza");
        menu_create_pizza.classList.remove("hidden");

        let menu_edit_pizza = document.getElementById("menu_edit_pizza");
        menu_edit_pizza.classList.add("hidden");

        let menu_destroy_pizza = document.getElementById("menu_destroy_pizza");
        menu_destroy_pizza.classList.add("hidden");

        let menu_breaktime = document.getElementById("menu_breaktime");
        menu_breaktime.classList.add("hidden");
    }
};

const edit_pizza = (id) => {
    if (id == "edit_pizza") {
        let menu_create_pizza = document.getElementById("menu_create_pizza");
        menu_create_pizza.classList.add("hidden");

        let menu_edit_pizza = document.getElementById("menu_edit_pizza");
        menu_edit_pizza.classList.remove("hidden");

        let menu_destroy_pizza = document.getElementById("menu_destroy_pizza");
        menu_destroy_pizza.classList.add("hidden");

        let menu_breaktime = document.getElementById("menu_breaktime");
        menu_breaktime.classList.add("hidden");
    }
};

const destroy_pizza = (id) => {
    if (id == "destroy_pizza") {
        let menu_create_pizza = document.getElementById("menu_create_pizza");
        menu_create_pizza.classList.add("hidden");

        let menu_edit_pizza = document.getElementById("menu_edit_pizza");
        menu_edit_pizza.classList.add("hidden");

        let menu_destroy_pizza = document.getElementById("menu_destroy_pizza");
        menu_destroy_pizza.classList.remove("hidden");

        let menu_breaktime = document.getElementById("menu_breaktime");
        menu_breaktime.classList.add("hidden");
    }
};

const breaktime = (id) => {
    if (id == "breaktime") {
        let menu_create_pizza = document.getElementById("menu_create_pizza");
        menu_create_pizza.classList.add("hidden");

        let menu_edit_pizza = document.getElementById("menu_edit_pizza");
        menu_edit_pizza.classList.add("hidden");

        let menu_destroy_pizza = document.getElementById("menu_destroy_pizza");
        menu_destroy_pizza.classList.add("hidden");

        let menu_breaktime = document.getElementById("menu_breaktime");
        menu_breaktime.classList.remove("hidden");
    }
};
