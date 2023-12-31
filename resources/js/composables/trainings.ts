import {ref, onMounted} from 'vue'
import axios from 'axios'
import { postData } from '../utils/apiUtils'

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
    const urlGetTrainings = '/api/trainings';
    const urlGetTraining = '/api/trainings/${id}';
    const urlCreateTraining = '/api/trainings/create';

    const getTrainings = async (): Promise<void> => {
        let response = await axios.get(urlGetTrainings);
        trainings.value = response.data.trainings;
    }

    const getTraining = async (id: number): Promise<void> => {
        let response = await axios.get(urlGetTraining);
        training.value = response.data.data;

    }

    const createTraining = async (data: object): Promise<void> => {
        const { response, error } = await postData(urlCreateTraining, data);
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
