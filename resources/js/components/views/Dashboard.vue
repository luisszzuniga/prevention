<template>
    <v-row>
        <v-col>
            <h3>Mes clients</h3>
            <div class="scrollable-table">
                <ListCompanies></ListCompanies>
            </div>
        </v-col>
    </v-row>
    <v-row>
        <v-col>
            <h3>Mes Formateurs</h3>
            <div class="scrollable-table">
                <ListTrainers></ListTrainers>
            </div>
        </v-col>
    </v-row>
    <v-row>
        <v-col>
            <h3>Mes Formations</h3>
            <div class="scrollable-table">
                <ListTrainings></ListTrainings>
            </div>
        </v-col>
    </v-row>
</template>

<script lang="ts" setup>
import ListCompanies from "../ListCompanies.vue";
import ListTrainers from "../ListTrainers.vue";
import ListTrainings from "../ListTrainings.vue";
</script>

<style scoped>

</style>
