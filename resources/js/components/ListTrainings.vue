<template>
    <div v-if="trainings">
        <table>
            <thead>
            <tr>
                <th>Code de session</th>
                <th>Date</th>
            </tr>
            </thead>
            <tr v-for="training in trainings" :key="training.id">
                <td>{{ training.seance_code }}</td>
                <td>{{ training.date}}</td>
            </tr>
        </table>
    </div>
</template>

<script lang="ts" setup>
import { onMounted } from 'vue';
import useTrainings from '../composables/trainings';

const { trainings, getTrainings } = useTrainings();

onMounted(getTrainings);
</script>

<style scoped>

table {
    width: 100%;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

th {
    padding-bottom: 10px;
}
</style>

