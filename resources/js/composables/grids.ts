import {ref, onMounted} from 'vue'
import axios from 'axios'

export default function useGrids(): {
    message: any,
    errors: any,
    grids: any,
    getGrids: () => Promise<void>,
} {

    const message = ref('');
    const errors = ref('');
    const grids = ref([]);

    const getGrids = async () => {
        try {
            const response = await axios.get('/api/getGrids');
            grids.value = response.data.grids;
        } catch (error) {
            console.error('Erreur lors de la récupération des grilles:', error);
        }
    };

    return {
        message,
        errors,
        grids,
        getGrids
    }
}
