import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        typography,
        require("tailwindcss-plugins/pagination")({
            link: "bg-white px-3 py-1 border-r border-t border-b text-black no-underline",
            linkActive: "bg-yellow-lighter border-yellow font-bold",
            linkSecond: "rounded-l border-l",
            linkBeforeLast: "rounded-r",
            linkFirst: {
                "@apply mr-3 pl-5 border": {},
                "border-top-left-radius": "999px",
            },
            linkLast: {
                "@apply ml-3 pr-5 border": {},
                "border-top-right-radius": "999px",
            },
        }),
    ],
};
