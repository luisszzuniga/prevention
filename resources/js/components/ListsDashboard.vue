<template>
    <div class="row">

        <div class="columns">
            <h3>Mes clients</h3>
            <table >
            <tr>
                <td>Contenu de la cellule 1</td>
                <td>Contenu de la cellule 2</td>
            </tr>
            <tr>
                <td>Contenu de la cellule 3</td>
                <td>Contenu de la cellule 4</td>
            </tr>
            </table>
        </div>
        <div class="columns">
            <h3>Mes Formateurs</h3>
            <table>
                <tr>
                    <td>Contenu de la cellule 1</td>
                    <td>Contenu de la cellule 2</td>
                </tr>
                <tr>
                    <td>Contenu de la cellule 3</td>
                    <td>Contenu de la cellule 4</td>
                </tr>
            </table>
        </div>
        <div class="columns">
            <h3>Mes Formations</h3>
            <table>
                <tr>
                    <td>Contenu de la cellule 1</td>
                    <td>Contenu de la cellule 2</td>
                </tr>
                <tr>
                    <td>Contenu de la cellule 3</td>
                    <td>Contenu de la cellule 4</td>
                </tr>
            </table>
        </div>

    </div>

</template>

<script>
export default {
    name: "ListsDashboard"
}
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
