import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin'; // Importa el plugin laravel

export default defineConfig({
    plugins: [

        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
