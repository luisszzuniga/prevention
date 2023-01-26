import {ref, onMounted} from 'vue'
import axios from 'axios'
import {useRouter} from 'vue-router'

export default function useTrainings(): {
    message: any,
    errors: any,
    training: any,
    trainings: any,
    getTraining: (id: number) => Promise<void>,
    getTrainings: () => Promise<void>,
    storeTraining: (data: object) => Promise<void>,
    updateTraining: (id: number) => Promise<void>,
} {
    axios.defaults.withCredentials = true;
    const training = ref([]);
    const trainings = ref([]);
    const message = ref('');
    const errors = ref('');
    const router = useRouter();

    const getTrainings = async (): Promise<void> => {
        let response = await axios.get('/api/trainings');
        trainings.value = response.data.trainings;
        console.log(response.data)
    }

    const getTraining = async (id: number): Promise<void> => {
        let response = await axios.get(`/api/trainings/${id}`);
        training.value = response.data.data;

    }

    const storeTraining = async (data: object): Promise<void> => {
        errors.value = '';
        try {
            let response = await axios.post('', data);
            message.value = response.data.message;
        } catch (e) {
            const error = e as any;
            if (error.response.status === 422) {
                for (const key in error.response.data.errors) {
                    errors.value = error.response.data.errors;
                }
            }
        }
    }

    const updateTraining = async (id: number): Promise<void> => {
        errors.value = ''
        try {
            await axios.patch(`/api/trainings/${id}`, training.value);
            await router.push({name: 'trainings.index'});
        } catch (e) {
            const error = e as any;
            if (error.response.status === 422) {
                for (const key in error.response.data.errors) {
                    errors.value = error.response.data.errors;
                }
            }
        }
    }

    return {
        message,
        errors,
        training,
        trainings,
        getTraining,
        getTrainings,
        storeTraining,
        updateTraining
    }
}
