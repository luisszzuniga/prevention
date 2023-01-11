import { createRouter, createWebHistory } from 'vue-router'

import Vehicles from '@/components/Vehicles.vue'

const routes = [
    {
        path: '/vehicles',
        name: 'Vehicles',
        component: Vehicles
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
