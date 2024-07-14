import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    vue(),
  ],
  root: 'public',
  build: {
    outDir: '../public/dist',
    assetsDir: '.',
    rollupOptions: {
      input: {
        main: resolve(__dirname, '../resources/js/main.js'),
        style: resolve(__dirname, '../resources/scss/style.scss'),
      },
      output: {
        entryFileNames: 'js/[name].min.js',
        chunkFileNames: 'js/[name].min.js',
        assetFileNames: 'css/[name].min.css',
      },
    },
    minify: true,
  },
  server: {
    proxy: {
      '/': {
        target: 'http://test.test',
        changeOrigin: true,
        secure: false,
      }
    },
    watch: {
      include: 'resources/**/*.scss',
    },
  },
});