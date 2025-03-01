import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/css/home/app.css',
                'resources/css/services/app.css',
                'resources/js/app.js',
                'resources/js/home/app.js',
                'resources/js/services/app.js',
                'resources/js/common/app.js',],
            refresh: true,
        }),
    ],
});

