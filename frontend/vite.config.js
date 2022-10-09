import autoprefixer from "autoprefixer"
import {defineConfig} from "vite"
import {resolve} from 'path';
import handlebars from 'vite-plugin-handlebars'
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    base: '',
    root: './',
    publicDir: 'public',
    plugins: [
        viteStaticCopy({
            targets: [
                {
                    src: 'README.md',
                    dest: './'
                }
            ]
        }),
        handlebars({
            partialDirectory: resolve(__dirname, 'inc'),
        }),
    ],
    build: {
        outDir: '../docs',
        rollupOptions: {
            input: {
                frontpage: resolve(__dirname, 'frontpage.html'),
                about: resolve(__dirname, 'about.html'),
                contacts: resolve(__dirname, 'contacts.html'),
                career: resolve(__dirname, 'career.html'),
                news: resolve(__dirname, 'news.html'),
                newsdetail: resolve(__dirname, 'news-detail.html'),
                policy: resolve(__dirname, 'policy.html'),
                sale: resolve(__dirname, 'sale.html'),
                sales: resolve(__dirname, 'sales.html'),
                maps: resolve(__dirname, 'maps.html'),
            },
            output: {
                assetFileNames: (assetInfo) => {
                    return `assets/app.min[extname]`;
                },
                chunkFileNames: 'assets/app.min.js',
                entryFileNames: 'assets/[name].js',
            },
        },
        css: {
            postcss: {
                plugins: [
                    autoprefixer()
                ],
            }
        }
    }
})