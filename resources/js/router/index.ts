import { createRouter, createWebHistory } from 'vue-router'

import Vehicles from '@/components/Vehicles.vue'
import Learner from '@/components/Learner.vue'

const routes = [
    {
        path: '/offers',
        name: 'offers',
        component: Vehicles
    },
    {
        path: '/learner',
        name: 'learner',
        component: Learner
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})

