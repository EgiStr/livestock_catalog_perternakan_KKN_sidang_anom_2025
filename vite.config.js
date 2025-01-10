import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.jsx",
                "resources/css/filament/admin/theme.css",
            ],
            refresh: [...refreshPaths, "app/Livewire/**"],
        }),
        react(), // React plugin that we installed for vite.js,
    ],
});
