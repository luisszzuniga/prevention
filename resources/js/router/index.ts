import {createRouter, createWebHistory, RouteRecordRaw} from 'vue-router'

import Vehicles from '@/components/views/Vehicles.vue'
import Learner from '@/components/views/Learner.vue'
import Dashboard from '@/components/views/Dashboard.vue'
import Course from '@/components/views/Course.vue'
import CreateCourse from '@/components/views/CreateCourse.vue'

const routes: Array<RouteRecordRaw> = [
    {
        path: '/vehicles',
        name: 'vehicles',
        component: Vehicles
    },
    {
        path: '/learner',
        name: 'learner',
        component: Learner
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard
    },
    {
        path: '/course',
        name: 'course',
        component: Course
    },
    {
        path: '/create-course',
        name: 'create-course',
        component: CreateCourse
    },

];

export default createRouter({
    history: createWebHistory(),
    routes
})

