import { createApp } from 'vue';
import components from './components/index.ts';
import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';
import 'element-plus/theme-chalk/dark/css-vars.css'

 
const app = createApp({components})

app.use(ElementPlus)
app.mount('#app')