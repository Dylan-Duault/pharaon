import { createApp } from 'vue';
import components from './components/index.ts';
import ElementPlus from './element-plus.ts';

const app = createApp({components})

app.use(ElementPlus)
app.mount('#app')