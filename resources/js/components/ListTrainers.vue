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


<script>
import {defineComponent} from 'vue';
import useTrainers from '../composables/trainers';
import {onMounted} from 'vue';

const {trainers, getTrainers} = useTrainers();

export default defineComponent({
    name: "ListTrainers",
    setup() {
        onMounted(getTrainers);
        return {trainers};
    },
    data() {
        return {
            trainers: trainers.value
        }
    }
});

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
