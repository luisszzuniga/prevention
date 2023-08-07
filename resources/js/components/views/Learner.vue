<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter un Stagiaire</div>
                    <div class="card-body">
                        <div v-if="errors">
                            <div v-for="(errorList, errorKey) in errors" :key="errorKey"
                                 class="errors">
                                <p v-for="error in errorList" :key="error" class="text-error">
                                    {{ error }}
                                </p>
                            </div>
                        </div>
                        <div v-if="message" class="success">
                            <p class="text-success">{{ message }}</p>
                        </div>
                        <form class="form-learner" @submit.prevent="saveLearner">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nom </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" v-model="form.lastname" required
                                           autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">Prénom</label>
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" v-model="form.firstname" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="form.email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Téléphone</label>
                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" v-model="form.phone" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Adresse</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" v-model="form.address">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip_code" class="col-md-4 col-form-label text-md-right">Code postal</label>
                                <div class="col-md-6">
                                    <input id="zip_code" type="text" class="form-control" v-model="form.zip_code">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="town" class="col-md-4 col-form-label text-md-right">Ville</label>
                                <div class="col-md-6">
                                    <input id="town" type="text" class="form-control" v-model="form.town">
                                </div>
                            </div>

                            <button type="submit">
                                Ajouter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>

import useLearners from '../../composables/learners'
import {reactive} from 'vue'

const form = reactive({
    lastname: '',
    firstname: '',
    email: '',
    phone: '',
    address: '',
    zip_code: '',
    town: ''
})

const {errors, storeLearner, message} = useLearners()

const saveLearner = async () => {
    await storeLearner({...form})
}

</script>

