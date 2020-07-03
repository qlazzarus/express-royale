import { AxiosError, AxiosResponse } from 'axios';
import { flow, getParentOfType, Instance, types } from 'mobx-state-tree';
import { RootStore, RootStoreInterface, AuthStoreInterface } from '@/stores'
import { HttpServiceInterface } from './HttpService';

const ApiService = types.model()
    .views((self) => ({
        get sessionToken(): string {
            const authStore: AuthStoreInterface = getParentOfType(self, RootStore).authStore;
            return authStore.token || '';
        },
        get uniqueId(): string {
            const rootStore: RootStoreInterface = getParentOfType(self, RootStore);
            return rootStore.id || '';
        }
    }))
    .volatile((self) => {
        const rootStore: RootStoreInterface = getParentOfType(self, RootStore);
        const httpService: HttpServiceInterface = rootStore.httpService;

        const headers = {
            'Authorization': self.sessionToken,
            'Request-Id': self.uniqueId
        };

        const errorHandler = (error: AxiosError) => {
            console.warn('API Error:', error, error.response);
        };

        const responseHandler = (res: AxiosResponse) => 200 === res.status ? res.data : res;

        const get = flow(function* (url: string) {
            try {
                return responseHandler(yield httpService.get(url, { headers }));
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const deleted = flow(function* (url: string) {
            try {
                return responseHandler(yield httpService.delete(url, { headers }));
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const post = flow(function* (url: string, data?: any) {
            try {
                return responseHandler(yield httpService.post(url, data, { headers }));
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const put = flow(function* (url: string, data?: any) {
            try {
                return responseHandler(yield httpService.put(url, data, { headers }));
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const patch = flow(function* (url: string, data?: any) {
            try {
                return responseHandler(yield httpService.patch(url, data, { headers }));
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        return {
            get,
            deleted,
            post,
            put,
            patch
        };
    })

export default ApiService;

export interface ApiServiceInterface extends Instance<typeof ApiService> {};