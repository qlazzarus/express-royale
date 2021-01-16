import axios, {AxiosError, AxiosResponse} from 'axios';
import camelcaseKeysRecursive from "camelcase-keys-recursive";
import querystring from 'querystring';
import snakecaseKeys from "snakecase-keys";

export default () => {
    const {MIX_APP_URL} = process.env;

    const client = axios.create({
        baseURL: `${MIX_APP_URL}/api`,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Accept': 'application/json'
        }
    });

    client.interceptors.response.use(
        (res: AxiosResponse<any>) => {
            res.data = res.data && camelcaseKeysRecursive(res.data) || {};
            return res;
        },
        (error: AxiosError) => Promise.reject(error)
    );

    client.defaults.transformRequest = [data => data && querystring.stringify(snakecaseKeys(data))]

    return client;
}
