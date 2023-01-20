import {createApp} from 'vue';
import router from './router'

import Vehicles from '@/components/Vehicles.vue';
import Learner from '@/components/Learner.vue';

createApp({
    components: {
        Vehicles,
        Learner
    }
}).use(router).mount('#app')


