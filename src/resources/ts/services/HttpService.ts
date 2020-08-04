import axios, { AxiosResponse, AxiosRequestConfig, AxiosInstance } from 'axios';
import camelcaseKeysRecursive from 'camelcase-keys-recursive';
import querystring from 'querystring';
import snakeCaseKeys from 'snakecase-keys';
import { AppStoreInterface } from '@/stores';

/* eslint-disable  @typescript-eslint/no-explicit-any */

export default class HttpService {

    protected appStore: AppStoreInterface;

    protected client: AxiosInstance;

    constructor(appStore: AppStoreInterface) {
        const client = axios.create({
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Accept': 'application/json'
            }
        });

        client.interceptors.response.use(
            (res: AxiosResponse<any>): any => res.data && camelcaseKeysRecursive(res.data),
            (error) => Promise.reject(error)
        );

        client.defaults.transformRequest = [data => data && querystring.stringify(snakeCaseKeys(data))];
        client.defaults.withCredentials = true;

        this.appStore = appStore;
        this.client = client;
    }

    private preProcess(): Promise<void> {
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

    post(url: string, data?: Record<string, unknown>, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.post(url, data, config))
            .finally(this.postProcess.bind(this));
    }

    put(url: string, data?: Record<string, unknown>, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.put(url, data, config))
            .finally(this.postProcess.bind(this));
    }

    patch(url: string, data?: Record<string, unknown>, config?: AxiosRequestConfig): Promise<any> {
        return this.preProcess()
            .then(() => this.client.patch(url, data, config))
            .finally(this.postProcess.bind(this));
    }
};
