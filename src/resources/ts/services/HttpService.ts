import axios, { AxiosResponse, AxiosRequestConfig } from 'axios';
import camelcaseKeysRecursive from 'camelcase-keys-recursive';
import { types, flow, Instance } from 'mobx-state-tree';
import querystring from 'querystring';
import snakeCaseKeys from 'snakecase-keys';

const client = axios.create({
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
    (error: any) => {
        throw error;
    }
);

client.defaults.transformRequest = [data => data && querystring.stringify(snakeCaseKeys(data))];
client.defaults.withCredentials = true;

const HttpService = types.model().volatile(() => ({
    get: flow(function* (url: string, config?: AxiosRequestConfig) {
        console.log(url, config);
        return yield client.get(url, config);
    }),
    delete: flow(function* (url: string, config?: AxiosRequestConfig) {
        return yield client.delete(url, config);
    }),
    post: flow(function* (url: string, data?: any, config?: AxiosRequestConfig) {
        return yield client.post(url, data, config);
    }),
    put: flow(function* (url: string, data?: any, config?: AxiosRequestConfig) {
        return yield client.put(url, data, config);
    }),
    patch: flow(function* (url: string, data?: any, config?: AxiosRequestConfig) {
        return yield client.patch(url, data, config);
    }),
}));

export default HttpService;

export interface HttpServiceInterface extends Instance<typeof HttpService> {}
