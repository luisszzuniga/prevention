<template>
    <div class="row">
        <div class="columns">
            <h3>Mes clients</h3>
            <div class="scrollable-table">
                <ListCompanies></ListCompanies>
            </div>
        </div>
        <div class="columns">
            <h3>Mes Formateurs</h3>
            <div class="scrollable-table">
                <ListTrainers></ListTrainers>
            </div>
        </div>
        <div class="columns">
            <h3>Mes Formations</h3>
            <div class="scrollable-table">
                <ListTrainings></ListTrainings>
            </div>
        </div>
    </div>

</template>

<script>
import { defineComponent } from "vue";
import ListCompanies from "./ListCompanies.vue";
import ListTrainers from './ListTrainers.vue';
import ListTrainings from "./ListTrainings.vue";

export default defineComponent({
    components: { ListTrainings, ListTrainers, ListCompanies },
});
</script>

<style scoped>
.row {
    padding-top: 200px;
    margin-bottom: 250px;
    width: 100%;
    text-align: center;
}

.columns h3 {
    text-align: center;
    color: #1b1e21;
    font-size: 20px;
    padding-bottom: 20px;
}

.columns td {
    color: #1b1e21;
}

.columns {
    width: 22%;
    height: 300px;
    min-width: 280px;
    vertical-align: top;
    display: inline-block;
    background-color: #ffffff;
    color: #000000;
    border-radius: 24px;
    box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
    margin: 0 auto;
}

.align-right {
    text-align: right;
}

.scrollable-table {
    overflow-y: scroll;
    height: 200px;
    padding-top: 20px;
    padding-bottom: 20px;
}

@media screen and (max-width: 680px) {
    .columns {
        width: 100%;
    }
}
</style>
