<template>
    <v-app>
        <v-navigation-drawer app class="sidebar">
            <v-list dense>
                <v-list-item v-for="(link, i) in links" :key="i" class="link-item"
                             :class="{'link-item-active': link.active, 'link-item-inactive': !link.active}"
                             :to="link.route">
                    <div class="content-container">
                        <div class="indicator" v-if="link.active"></div>
                        <v-icon class="mr-3 link-icon">{{ link.icon }}</v-icon>
                        <v-list-item-content>
                            <v-list-item-title class="sidebar-link">{{ link.text }}</v-list-item-title>
                        </v-list-item-content>
                    </div>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
    </v-app>
</template>


<script lang="ts" setup>
import { ref, computed } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const links = ref([
    { icon: 'mdi-view-dashboard', text: 'Dashboard', active: computed(() => route.path === '/dashboard'), route: '/dashboard' },
    { icon: 'mdi-clock-outline', text: 'Sessions', active: computed(() => route.path === '/'), route: '/' },
    { icon: 'mdi-account-multiple', text: 'Clients', active: computed(() => route.path === '/'), route: '/' },
    { icon: 'mdi-human-male-board', text: 'Formateurs', active: computed(() => route.path === '/'), route: '/' },
    { icon: 'mdi-account-group-outline', text: 'Stagiaires', active: computed(() => route.path === '/learner'), route: '/learner' },
    { icon: 'mdi-car', text: 'Véhicules', active: computed(() => route.path === '/vehicles'), route: '/vehicles' },
    { icon: 'mdi-cog-outline', text: 'Paramètres', active: computed(() => route.path === '/'), route: '/' },
]);

</script>

<style scoped>
.sidebar {
    background: #11223D;
}

.sidebar-link {
    color: #ffffff;
    font-size: 20px;
    font-weight: 800;
    font-family: "Teko", sans-serif;
    display: block;
    margin-left: 20px;
}

.link-item {
    display: flex;
    align-items: center;
    padding-left: 0;
    margin-bottom: 20px;
    position: relative;
    text-decoration: none;
}

.content-container {
    display: flex;
    align-items: center;
    width: 100%;
    margin-left: 20px;
}

.indicator {
    background: #FF5F13;
    width: 10px;
    height: 100%;
    border-radius: 30%;
    position: absolute;
    left: -3px;
}
.link-item:hover {
    background-color: #13314f;
}
.link-item .sidebar-link {
    transition: transform 0.3s ease-in-out;
    margin-right: 20px;
}

.link-item:hover .sidebar-link, .link-item:hover .link-icon {
    transform: translateX(10px);
}
.link-item-active {
    background-color: #13314f;
    color : white;
}
.link-icon {
    color: white;
    transition: transform 0.3s ease-in-out;
}

</style>
