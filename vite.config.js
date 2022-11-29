import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins:    [
        laravel(['resource/js/app/jsx']),
    ],
    resolve: {
        alias: {
            '@':'/resources/js',},},
});

