import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from "path";
import vue from '@vitejs/plugin-vue';
import { liveDesigner } from '@pinegrow/vite-plugin'

export default defineConfig({
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        }
    },
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        liveDesigner({
            tailwindcss: {
                /* Please ensure that you update the filenames and paths to accurately match those used in your project. */
                configPath: 'tailwind.config.js',
                cssPath: '@/assets/css/tailwind.css',
                // themePath: false, // Set to false so that Design Panel is not used
                // restartOnConfigUpdate: true,
                restartOnThemeUpdate: true,
              },
            devServerUrls: {
                /* Please ensure that you update this URL with the actual URL of your app-server. */
                local: 'http://127.0.0.1:8000/', // App-server URL
              },
              dirs: {
                /* Please ensure that you update the filenames and paths to accurately match those used in your project. */
                src: './resources/js/',
                layouts: './resources/js/Layouts',
                pages: './resources/js/Pages',
                components: './resources/js/Components',
              },
              startupPage: './resources/js/Pages/Welcome.vue',
          }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
