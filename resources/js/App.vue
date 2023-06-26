<template>
    <v-app>
        <v-row no-gutters>
            <v-col cols="3">
                <Sidebar />
            </v-col>
            <v-col cols="9">
                <router-view />
            </v-col>
        </v-row>
    </v-app>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import Sidebar from "./components/common/Sidebar.vue";
import TableHome from "./components/views/Dashboard.vue";
export default defineComponent({
    components: {TableHome, Sidebar }
})
</script>
