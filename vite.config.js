import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import chartJs from 'chart.js/auto';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        chartJs(),
    ],
});
