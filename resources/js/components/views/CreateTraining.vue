<template>
    <v-container>
        <v-row class="mb-4">
            <v-col cols="12">
                <h2>Création d'une journée de formation</h2>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="12">
                <v-form ref="form">
                    <div class="form-group row">
                        <label for="subclient" class="col-form-label">Client</label>
                        <select id="subclient" v-model="selectedSubclient" class="form-control" required>
                            <option v-for="subclient in subclients" :value="subclient.id" :key="subclient.id">
                                {{ subclient.company.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="center" class="col-form-label">Centre</label>
                        <select id="center" v-model="selectedCenter" class="form-control" required>
                            <option v-for="center in centers" :value="center.id" :key="center.id">
                                {{ center.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="grid" class="col-form-label">Grille de notation</label>
                        <select id="grid" v-model="selectedGrid" class="form-control" required>
                            <option v-for="grid in grids" :value="grid.id" :key="grid.id">
                                {{ grid.name }}
                            </option>
                        </select>
                    </div>
                    <v-text-field label="Nom de la formation" v-model="nomFormation" required></v-text-field>

                    <v-locale-provider :lang="{ current: 'fr' }">
                        <v-date-picker v-model="dateFormation"></v-date-picker>
                    </v-locale-provider>


                    <br>
                    <v-btn @click="submitForm">Créer la session</v-btn>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>

<script setup lang="ts">
import useCenters from '../../composables/centers';
import { ref, onMounted } from 'vue';
import { VDatePicker } from 'vuetify/labs/VDatePicker'
import useSubclients from '../../composables/subclients';
import useGrids from '../../composables/grids';
import useTrainings from '../../composables/trainings';

const entreprise = ref('');
const nomFormation = ref('');
const dateFormation = ref('');
const menu = ref(false);
const selectedSubclient = ref(null);
const selectedCenter = ref(null);
const selectedGrid = ref(null);
const { getSubclients, subclients } = useSubclients();
const { getCenters, centers } = useCenters();
const { getGrids, grids } = useGrids();
const { createTraining, message, errors } = useTrainings();

onMounted(async () => {
    await getSubclients();

    await getCenters();

    await getGrids();
});

const submitForm = async () => {
    const trainingData = {
        subclient_id: selectedSubclient.value,
        center_id: selectedCenter.value,
        grid_id: selectedGrid.value,
        training_name: nomFormation.value,
        training_date: dateFormation.value
    };
    await createTraining(trainingData);
};

defineExpose({
    submitForm,
    entreprise,
    nomFormation,
    dateFormation,
    menu,
    selectedSubclient,
    selectedCenter,
    selectedGrid,
    grids
});
</script>

<style scoped>
.v-container {
    margin-top: 20px;
}
</style>
