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
                    <v-text-field label="Client" v-model="entreprise" required></v-text-field>

                    <v-text-field label="Nom de la formation" v-model="nomFormation" required></v-text-field>

                    <v-date-picker label="Date de formation" v-model="dateFormation" required></v-date-picker>

                    <v-btn @click="submitForm">Créer la session</v-btn>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const entreprise = ref('');
const nomFormation = ref(''); // Champ pour le nom de la formation
const dateFormation = ref(''); // Calendrier pour choisir une date de formation

const submitForm = () => {
    // Logique de soumission du formulaire
};
</script>

<style scoped>
.v-container {
    margin-top: 20px;
}
</style>
