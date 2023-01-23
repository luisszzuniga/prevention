import {createApp} from 'vue';
import router from './router'

import Vehicles from '@/components/Vehicles.vue';
import Learner from '@/components/Learner.vue';
import ListsDashboard from "@/components/ListsDashboard.vue";
import ListCompanies from '@/components/ListCompanies.vue';
import ListTrainers from '@/components/ListTrainers.vue';
import ListCourses from "@/components/ListCourses.vue";

createApp({
    components: {
        Vehicles,
        Learner,
        ListsDashboard,
        ListCompanies,
        ListTrainers,
        ListCourses
    }
}).use(router).mount('#app')


