import {createApp} from 'vue';
import router from './router'

import Vehicles from '@/components/Vehicles.vue';
import Learner from '@/components/Learner.vue';
import ListsDashboard from "@/components/ListsDashboard.vue";

createApp({
    components: {
        Vehicles,
        Learner,
        ListsDashboard
    }
}).use(router).mount('#app')


