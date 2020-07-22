import axios, { AxiosResponse, AxiosRequestConfig, AxiosInstance } from 'axios';
import camelcaseKeysRecursive from 'camelcase-keys-recursive';
import querystring from 'querystring';
import snakeCaseKeys from 'snakecase-keys';

export default class HttpService {

    protected client: AxiosInstance;

    constructor() {
        this.client = this.initClient();
    }

    protected initClient(): AxiosInstance {
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

        return client;
    }

    get(url: string, config?: AxiosRequestConfig): Promise<any> {
        return this.client.get(url, config);
    }

    delete(url: string, config?: AxiosRequestConfig): Promise<any> {
        return this.client.delete(url, config);
    }
    
    post(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        return this.client.post(url, data, config);
    }

    put(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        return this.client.put(url, data, config);
    }

    patch(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        return this.client.patch(url, data, config);
    }
};