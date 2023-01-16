import {createApp} from 'vue';
import router from './router'

import Vehicles from '@/components/Vehicles.vue';

createApp({
    components: {
        Vehicles
    }
}).use(router).mount('#app')


