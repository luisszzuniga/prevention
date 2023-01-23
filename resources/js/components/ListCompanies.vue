<template>
    <table>
        <tr v-for="company in companies" :key="company.id">
            <td>  {{ company.name }}</td>
        </tr>

    </table>
</template>

<script>
export default {
    name: "ListCompanies",
    props: ['companies']
}


</script>

<style scoped>

</style>
