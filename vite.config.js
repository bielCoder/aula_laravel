import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/views/site/css/style.css', 'resources/views/site/js/script.js'],
            refresh: true,
        }),
    ],

     plugins: [
        laravel({
            input: ['resources/views/admin/css/style.css', 'resources/views/admin/js/script.js'],
            refresh: true,
        }),
    ],
});
