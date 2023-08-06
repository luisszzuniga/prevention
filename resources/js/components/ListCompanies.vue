<template>
    <div v-if="companies">
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Ville</th>
            </tr>
            </thead>
            <tr v-for="company in companies" :key="company.id">
                <td>{{ company.name }}</td>
                <td>{{ company.town }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
import { defineComponent, onMounted } from 'vue';
import useCompanies from '../composables/companies';

export default defineComponent({
    name: "ListCompanies",
    setup() {
        const { companies, getCompanies } = useCompanies();

        onMounted(getCompanies);

        return {
            companies
        };
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
