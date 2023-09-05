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
                    <v-text-field label="Nom de la formation" v-model="nomFormation" required></v-text-field>

                    <v-locale-provider :lang="{ current: 'fr' }">
                        <v-date-picker></v-date-picker>
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

const entreprise = ref('');
const nomFormation = ref('');
const dateFormation = ref('');
const menu = ref(false);
const selectedSubclient = ref(null);
const selectedCenter = ref(null);
const { getSubclients, subclients } = useSubclients();
const { getCenters, centers } = useCenters();

onMounted(() => {
    getSubclients();
    getCenters();
});

const submitForm = () => {

};

defineExpose({
    submitForm,
    entreprise,
    nomFormation,
    dateFormation,
    menu,
    selectedSubclient,
    selectedCenter
});
</script>

<style scoped>
.v-container {
    margin-top: 20px;
}
</style>
