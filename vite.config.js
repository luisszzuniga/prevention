import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.ts',
                'resources/css/nav.css',
                'resources/css/auth/auth.css',
                'resources/js/layout/vendor/modernizr-3.5.0.min.js',
                'resources/js/layout/vendor/jquery-1.12.4.min.js',
                'resources/js/layout/jquery.slicknav.min.js',
                'resources/js/layout/slick.min.js',
                'resources/js/layout/animated.headline.js',
                'resources/js/layout/jquery.sticky.js',
                'resources/js/layout/main.js',
                'resources/css/style.css',
                'resources/css/layout/bootstrap.min.css',
                'resources/css/layout/slicknav.css',
                'resources/css/layout/animate.min.css',
                'resources/css/layout/slick.css',
                'resources/css/style.css',
                'resources/css/app.css',
                'resources/css/contact.css',
                'resources/js/contact.js',
                'resources/js/home.js',
                'resources/css/offers.css',
                'resources/js/offers.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        })
    ],

    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
