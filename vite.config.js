import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    cssCodeSplit: true,
    lib: {
      entry: 'src/main.js',
      name: 'Authentication boilerplate',
      formats: ['umd'],
      fileName: 'authentication-boilerplate'
    },
    rollupOptions: {
      external: ['vue', 'axios'],
      output: {
        globals: {
          vue: 'Vue',
          axios: 'axios',
        }
      }
    }
  }
})