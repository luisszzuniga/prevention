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
                    <v-text-field label="Entreprise" v-model="entreprise" required></v-text-field>
                    <v-date-picker label="Date" v-model="date" required></v-date-picker>
                    <v-text-field label="Liste de stagiaires" v-model="stagiaires" required></v-text-field>
                    <v-select
                        :items="centres"
                        label="Centre de formation"
                        v-model="centre"
                        required
                    ></v-select>
                    <v-text-field label="Offre" v-model="offre" readonly></v-text-field>
                    <v-select
                        :items="grilles"
                        label="Grille de notation"
                        v-model="grille"
                        required
                    ></v-select>
                    <v-btn @click="submitForm">Créer la session</v-btn>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const entreprise = ref('');
const date = ref('');
const stagiaires = ref('');
const centres = ref(['Centre 1', 'Centre 2', 'Centre 3']); // Mettez ici la liste de vos centres
const centre = ref('');
const offre = ref('Offre Business');
const grilles = ref(['Grille 1', 'Grille 2', 'Grille 3']); // Mettez ici la liste de vos grilles de notation
const grille = ref('');

const submitForm = () => {
    // Logique de soumission du formulaire
};
</script>

<style scoped>
.v-container {
    margin-top: 20px;
}
</style>
