import {ref, onMounted} from 'vue'
import axios from 'axios'

export default function useLearners(): {
    message: any,
    errors: any,
    learner: any,
    learners: any,
    getLearner: (id: number) => Promise<void>,
    getLearners: () => Promise<void>,
    storeLearner: (data: object) => Promise<void>,
} {
    const learner = ref([]);
    const learners = ref([]);
    const message = ref('');
    const errors = ref('');
    const url = '/api/learners-store';

    let config = {
        headers: {
            'Content-Type': "application/json",
        },
        timeout: 0
    };

    const getLearners = async (): Promise<void> => {
        let response = await axios.get('/api/learners');
        learners.value = response.data.data;
    }

    const getLearner = async (id: number): Promise<void> => {
        let response = await axios.get(`/api/learners/${id}`);
        learner.value = response.data.data;
    }

    const storeLearner = async (data: object): Promise<void> => {

        errors.value = '';
        try {
            let response = await axios.post(url, data, config);
            console.log('done')
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

    return {
        message,
        errors,
        learner,
        learners,
        getLearner,
        getLearners,
        storeLearner,
    }
}
