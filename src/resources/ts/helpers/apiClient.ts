import axios, {AxiosError, AxiosResponse} from 'axios';
import humps from 'humps';
import qs from 'qs';

export default () => {
    const {MIX_APP_URL} = process.env;

    const client = axios.create({
        baseURL: `${MIX_APP_URL}/api`,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Accept': 'application/json'
        },
        transformRequest: [
            data => qs.stringify(humps.decamelizeKeys(data))
        ]
    });

    client.interceptors.response.use(
        (res: AxiosResponse<any>) => {
            res.data = res.data && humps.camelizeKeys(res.data) || {};
            return res;
        },
        (error: AxiosError) => Promise.reject(error)
    );

    return client;
}
