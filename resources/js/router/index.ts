import { createRouter, createWebHistory } from 'vue-router'

import Vehicles from '@/components/Vehicles.vue'
import Learner from '@/components/Learner.vue'
import ListsDashboard from '@/components/ListsDashboard.vue'

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
    },
    {
        path: '/lists-dashboard',
        name: 'lists-dashboard',
        component: ListsDashboard
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})

