import {createApp} from 'vue';
import router from './router'

import Vehicles from '@/components/Vehicles.vue';
import Learner from '@/components/Learner.vue';
import ListsDashboard from "@/components/ListsDashboard.vue";
import ListCompanies from '@/components/ListCompanies.vue';
import ListTrainers from '@/components/ListTrainers.vue';
import ListTrainings from "@/components/ListTrainings.vue";

createApp({
    components: {
        Vehicles,
        Learner,
        ListsDashboard,
        ListCompanies,
        ListTrainers,
        ListTrainings
    }
}).use(router).mount('#app')


