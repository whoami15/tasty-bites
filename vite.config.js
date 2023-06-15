import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import autoimport from "unplugin-auto-import/vite";
import components from "unplugin-vue-components/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        autoimport({
            vueTemplate: true,
            imports: [
                "vue",
                "@vueuse/core",
                {
                    "@inertiajs/vue3": ["router", "useForm", "usePage", "useRemember"],
                },
            ],
        }),
        components({
            resolvers: [
                // inertia components
                (name) => {
                    const components = ["Link", "Head"]
                    if (components.includes(name)) {
                        return {
                            name: name,
                            from: "@inertiajs/vue3",
                        }
                    }
                },
            ],
        }),
    ],
});
