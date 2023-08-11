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
import { ref } from 'vue';
import { VDatePicker } from 'vuetify/labs/VDatePicker'

const entreprise = ref('');
const nomFormation = ref('');
const dateFormation = ref('');
const menu = ref(false);

const submitForm = () => {

};

defineExpose({
    submitForm,
    entreprise,
    nomFormation,
    dateFormation,
    menu
});
</script>

<style scoped>
.v-container {
    margin-top: 20px;
}
</style>
