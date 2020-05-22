import { AxiosError } from 'axios';
import { flow, getParentOfType, Instance, types } from 'mobx-state-tree';
import { RootStore, RootStoreInterface, AuthStoreInterface } from '@/stores'
import { HttpServiceInterface } from './HttpService';

const ApiService = types.model()
    .views((self) => ({
        get sessionToken(): string | undefined {
            const authStore: AuthStoreInterface = getParentOfType(self, RootStore).authStore;
            return authStore.token;
        },
        get uniqueId(): string | undefined {
            const rootStore: RootStoreInterface = getParentOfType(self, RootStore);
            return rootStore.id;
        }
    }))
    .volatile((self) => {
        const rootStore: RootStoreInterface = getParentOfType(self, RootStore);
        const httpService: HttpServiceInterface = rootStore.httpService;
        const errorHandler = (error: AxiosError) => {
            console.warn('API Error:', error, error.response);
        };

        const get = flow(function* (url: string) {
            try {
                return yield httpService.get(url, {
                    headers: {
                        'Authorization': self.sessionToken,
                        'Request-Id': self.uniqueId
                    }
                });
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const deleted = flow(function* (url: string) {
            try {
                return yield httpService.delete(url, {
                    headers: {
                        'Authorization': self.sessionToken,
                        'Request-Id': self.uniqueId
                    }
                });
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const post = flow(function* (url: string, data?: any) {
            try {
                return yield httpService.post(url, data, {
                    headers: {
                        'Authorization': self.sessionToken,
                        'Request-Id': self.uniqueId
                    }
                });
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const put = flow(function* (url: string, data?: any) {
            try {
                return yield httpService.put(url, data, {
                    headers: {
                        'Authorization': self.sessionToken,
                        'Request-Id': self.uniqueId
                    }
                });
            } catch (error) {
                errorHandler(error);
                throw error;
            }
        });

        const patch = flow(function* (url: string, data?: any) {
            try {
                return yield httpService.patch(url, data, {
                    headers: {
                        'Authorization': self.sessionToken,
                        'Request-Id': self.uniqueId
                    }
                });
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