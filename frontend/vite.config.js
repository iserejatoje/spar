import autoprefixer from "autoprefixer"
import {defineConfig} from "vite"
import {resolve} from 'path';
import handlebars from 'vite-plugin-handlebars'

export default defineConfig({
    base: '',
    root: './',
    publicDir: 'public',
    plugins: [
        handlebars({
            partialDirectory: resolve(__dirname, 'inc'),
        }),
    ],
    build: {
        outDir: '../docs',
        rollupOptions: {
            input: {
                about: resolve(__dirname, 'index.html'),
                contacts: resolve(__dirname, 'contacts.html'),
                career: resolve(__dirname, 'career.html'),
                news: resolve(__dirname, 'news.html'),
                newsdetail: resolve(__dirname, 'news-detail.html'),
                policy: resolve(__dirname, 'policy.html'),
                sale: resolve(__dirname, 'sale.html'),
                sales: resolve(__dirname, 'sales.html'),
            },
            output: {
                chunkFileNames: 'assets/app.min.js',
                entryFileNames: 'assets/app.min.js',
            },
        },
        css: {
            postcss: {
                plugins: [
                    autoprefixer()
                ],
                sourceMap: true
            },
        },
    }
})