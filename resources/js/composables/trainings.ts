import {ref, onMounted} from 'vue'
import axios from 'axios'
import { postData } from '../apiUtils'

export default function useTrainings(): {
    message: any,
    errors: any,
    training: any,
    trainings: any,
    getTraining: (id: number) => Promise<void>,
    getTrainings: () => Promise<void>,
    createTraining: (data: object) => Promise<void>,
} {
    axios.defaults.withCredentials = true;
    const training = ref([]);
    const trainings = ref([]);
    const message = ref('');
    const errors = ref('');
    const url = '/api/training/create';
    let config = {
        headers: {
            'Content-Type': "application/json",
        },
        timeout: 0
    };

    const getTrainings = async (): Promise<void> => {
        let response = await axios.get('/api/trainings');
        trainings.value = response.data.trainings;
    }

    const getTraining = async (id: number): Promise<void> => {
        let response = await axios.get(`/api/trainings/${id}`);
        training.value = response.data.data;

    }

    const createTraining = async (data: object): Promise<void> => {
        const { response, error } = await postData(url, data);
        if (response) {
            message.value = response.message;
        } else if (error) {
            errors.value = error;
        }
    };

    return {
        message,
        errors,
        training,
        trainings,
        getTraining,
        getTrainings,
        createTraining
    }
}
