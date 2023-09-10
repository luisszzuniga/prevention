import axios from 'axios';

const config = {
    headers: {
        'Content-Type': "application/json",
    },
    timeout: 0
};

export const postData = async (endpoint: string, data: object): Promise<any> => {
    try {
        const response = await axios.post(endpoint, data, config);
        return { response: response.data, error: null };
    } catch (e) {
        const error = e as any;
        let errorMessage: Record<string, any> = {};
        if (error.response.status === 422) {
            for (const key in error.response.data.errors) {
                errorMessage[key] = error.response.data.errors[key];
            }
        }
        return { response: null, error: errorMessage };
    }
};
