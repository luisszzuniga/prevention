<template>
    <div v-if="trainers">
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
            </tr>
            </thead>
            <tr v-for="trainer in trainers" :key="trainer.id">
                <td>{{ trainer.lastname }}</td>
                <td>{{ trainer.firstname }}</td>
                <td>{{ trainer.phone }}</td>
            </tr>
        </table>
    </div>
</template>


<script lang="ts" setup>
import { onMounted } from 'vue';
import useTrainers from '../composables/trainers';

const { trainers, getTrainers } = useTrainers();

onMounted(getTrainers);
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
