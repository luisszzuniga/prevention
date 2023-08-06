import { createApp } from 'vue';
import router from './router';
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';

import Vehicles from '@/components/Vehicles.vue';
import Learner from '@/components/Learner.vue';
import ListsDashboard from '@/components/ListsDashboard.vue';
import ListCompanies from '@/components/ListCompanies.vue';
import ListTrainers from '@/components/ListTrainers.vue';
import ListTrainings from '@/components/ListTrainings.vue';

const vuetify = createVuetify({
    components,
    directives
});

const app = createApp({
    components: {
        Vehicles,
        Learner,
        ListsDashboard,
        ListCompanies,
        ListTrainers,
        ListTrainings
    }
});

app.use(router).use(vuetify).mount('#app');
