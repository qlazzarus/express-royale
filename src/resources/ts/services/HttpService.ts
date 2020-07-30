import axios, { AxiosResponse, AxiosRequestConfig, AxiosInstance } from 'axios';
import camelcaseKeysRecursive from 'camelcase-keys-recursive';
import querystring from 'querystring';
import snakeCaseKeys from 'snakecase-keys';
import { AppStoreInterface } from '@/stores';

export default class HttpService {

    protected appStore: AppStoreInterface;

    protected client: AxiosInstance;

    constructor(appStore: AppStoreInterface) {
        this.appStore = appStore;
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
            (res: AxiosResponse<any>): any => res.data && camelcaseKeysRecursive(res.data),
            (error: any) => Promise.reject(error)
        );

        client.defaults.transformRequest = [data => data && querystring.stringify(snakeCaseKeys(data))];
        client.defaults.withCredentials = true;

        return client;
    }

    private preProcess(): Promise<any> {
        return new Promise((resolve) => {
            this.appStore.setPending(true);
            resolve();
        });
    }

    private postProcess(): void {
        this.appStore.setPending(false);
    }

    get(url: string, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.get(url, config))
            .finally(this.postProcess.bind(this));
    }

    delete(url: string, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.delete(url, config))
            .finally(this.postProcess.bind(this));
    }

    post(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.post(url, data, config))
            .finally(this.postProcess.bind(this));
    }

    put(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.put(url, data, config))
            .finally(this.postProcess.bind(this));
    }

    patch(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.patch(url, data, config))
            .finally(this.postProcess.bind(this));
    }
};
