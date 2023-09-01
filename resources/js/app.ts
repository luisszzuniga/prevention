import { createApp } from 'vue'
import App from './App.vue'
import router from './router/index.js'
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import '@mdi/font/css/materialdesignicons.css'
import DateFnsAdapter from '@date-io/date-fns'
import frLocale from 'date-fns/locale/fr'
import { fr } from 'vuetify/locale';
import axios from 'axios';

axios.defaults.withCredentials = true;
const tokenElement = document.head.querySelector('meta[name="csrf-token"]');

if (!tokenElement) {
    console.error('CSRF token not found.');
} else {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = (tokenElement as HTMLMetaElement).content;

}

const vuetify = createVuetify({
    components,
    directives,
    date: {
        adapter: DateFnsAdapter,
        locale: {
            fr: frLocale,
        },
    },
    locale: {
        locale: 'fr',
        messages: { fr },
    },
});

createApp(App)
    .use(router)
    .use(vuetify)
    .mount('#app')
