/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",

    data: {
        isError: false,
    },
});

$().ready(function() {
    $("form").submit(function(event) {
        $("#error-title").hide();
        $("#error-content").hide();

        if (
            $("#title").val().length === 0 ||
            $("#content").val().length === 0
        ) {
            $("#error-title")
                .show("slow")
                .text("Il titolo è un campo obbligatorio")
                .fadeOut(5000);
            $("#error-content")
                .show("slow")
                .text("La descrizione è un campo obbligatorio")
                .fadeOut(5000);
            isError = true;
        } else if (
            $("#title").val().length < 3 ||
            $("#content").val().length < 3
        ) {
            $("#error-title")
                .show("slow")
                .text("Deve contenere minimo 3 caratteri")
                .fadeOut(5000);
            $("#error-content")
                .show("slow")
                .text("La descrizione deve contenere minimo 3 caratteri")
                .fadeOut(5000);
            isError = true;
        } else if (
            $("#title").val().length > 100 ||
            $("#content").val().length > 500
        ) {
            $("#error-title")
                .show("slow")
                .text("Può contenere massimo 100 caratteri")
                .fadeOut(5000);
            $("#error-content")
                .show("slow")
                .text("Può contenere massimo 500 caratteri")
                .fadeOut(5000);
            isError = true;
        }
        event.preventDefault();
    });
});