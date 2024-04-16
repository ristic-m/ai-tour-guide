import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            keyframes: {
                typing: {
                  "0%": {
                      width: "0%",
                      visibility: "hidden"

                  },
                  "100%": {
                      width: "100%"
                  }
                },
                blink: {
                    "50%": {
                        borderColor: "transparent"
                    },
                    "100%": {
                        borderColor: "white"
                    }
                },
            },
            animation: {
                typing: "typing 1s steps(20) alternate, blink .7s infinite",
                typing2: "typing 1s steps(20) alternate, blink 5s"
            },
            fontFamily: {
                sans: ['Figtree'],
                reddit: ['Reddit Mono', ...defaultTheme.fontFamily.sans]
            },
            color: {

            }
        },
    },

    plugins: [forms],
};
