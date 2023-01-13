<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer un véhicule</div>
                    <div class="card-body">
                        <div v-if="errors">
                            <div v-for="(v, k) in errors" :key="k" class="bg-red-400 text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
                                <p v-for="error in v" :key="error" class="text-sm">
                                    {{ error }}
                                </p>
                            </div>
                        </div>
                        <form class="form-vehicle" @submit.prevent="saveVehicle">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" v-model="form.name" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="brand" class="col-md-4 col-form-label text-md-right">Marque</label>
                                <div class="col-md-6">
                                    <input id="brand" type="text" class="form-control" v-model="form.brand" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="license_plate" class="col-md-4 col-form-label text-md-right">Plaque d'immatriculation</label>
                                <div class="col-md-6">
                                    <input id="license_plate" type="text" class="form-control" v-model="form.license_plate" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>
                                <div class="col-md-6">
                                    <input id="type" type="text" class="form-control" v-model="form.type" required autofocus>
                                </div>
                            </div>
                            <button type="submit">
                                Create
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import useVehicles from '../composables/vehicles.ts'
import { reactive } from 'vue'

const form = reactive({
    name: '',
    brand: '',
    license_plate: '',
    type: ''
})

const { errors, storeVehicle } = useVehicles()

const saveVehicle = async () => {
    await storeVehicle({ ...form })
}

</script>


<style>
.text-sm{
    color: #c53030;
}
</style>
