<template>
    <v-row>
        <v-col cols="4">
            <ListTrainings></ListTrainings>
        </v-col>
        <v-col cols="4">
            <ListCompanies></ListCompanies>
        </v-col>
        <v-col cols="4">
            <ListTrainers></ListTrainers>
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
