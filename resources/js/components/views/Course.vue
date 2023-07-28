<template>
    <button class="create-button" @click="createCourse">Créer une journée de formation</button>
</template>

<script setup lang="ts">
import { useRouter } from 'vue-router';

const router = useRouter();

const createCourse = () => {
    router.push({ name: 'create-course' });
};
</script>

<style scoped>
.create-button {
    margin-top: 100px;
    margin-left: 100px;
    background-color: #1C3356;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.create-button:hover {
    background-color: #1C3356;
}
</style>

