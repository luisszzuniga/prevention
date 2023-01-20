<template>
    <div class="row">

        <div class="columns">
            <h3>Mes clients</h3>
            <div id="app">
                <ListCompanies id="ListCompanies"></ListCompanies>
            </div>
        </div>
        <div class="columns">
            <h3>Mes Formateurs</h3>
            <div id="app">
                <ListTrainers id="ListTrainers"></ListTrainers>
            </div>
        </div>
        <div class="columns">
            <h3>Mes Formations</h3>
            <div id="app">
                <ListCourses id="ListCourses"></ListCourses>
            </div>
        </div>

    </div>

</template>

<script>

import {defineComponent} from "vue";
import ListCompanies from "./ListCompanies.vue";
import ListTrainers from './ListTrainers.vue';
import ListCourses from "./ListCourses.vue";

export default defineComponent({
    components: {ListCourses, ListTrainers, ListCompanies}
})
</script>

<style scoped>

.row {
    padding-top: 150px;
    width: 100%;
    text-align: center;
}

.columns h3 {
    text-align: center;
    color: #1b1e21;
    font-size: 20px;
    padding-bottom: 20px;
}
.columns td{
    color: #1b1e21;
}

#ListCourses, #ListTrainers, #ListCompanies {
    color: black;
    width: 100%;
}

.columns {
    width: 22%;
    height: 300px;
    min-width: 280px;
    vertical-align: top;
    display: inline-block;
    margin: 0 60px 10px 0;
    background-color: #ffffff;
    color: #fff;
    border-radius: 24px;
    box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
}
.align-right {
    text-align: right;
}
@media screen and (max-width: 680px) {
    .columns {
        width: 100%;
    }
}
</style>
