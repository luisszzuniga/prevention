import {ref, onMounted} from 'vue'
import axios from 'axios'
import {useRouter} from 'vue-router'

export default function useCompanies(): {
    message: any,
    errors: any,
    company: any,
    companies: any,
    getCompany: (id: number) => Promise<void>,
    getCompanies: () => Promise<void>,
    storeCompany: (data: object) => Promise<void>,
    updateCompany: (id: number) => Promise<void>,
} {
    axios.defaults.withCredentials = true;
    const company = ref([]);
    const companies = ref([]);
    const message = ref('');
    const errors = ref('');
    const router = useRouter();

    const getCompanies = async (): Promise<void> => {
        let response = await axios.get('/api/companies');
        companies.value = response.data.companies;
    }

    const getCompany = async (id: number): Promise<void> => {
        let response = await axios.get(`/api/companies/${id}`);
        company.value = response.data.data;

    }

    const storeCompany = async (data: object): Promise<void> => {

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

    const updateCompany = async (id: number): Promise<void> => {
        errors.value = ''
        try {
            await axios.patch(`/api/companies/${id}`, company.value);
            await router.push({name: 'companies.index'});
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
        company,
        companies,
        getCompany,
        getCompanies,
        storeCompany,
        updateCompany
    }
}
