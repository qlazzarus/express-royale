import axios, { AxiosRequestConfig, AxiosResponse } from 'axios';
import querystring from 'querystring';
import camelcaseKeysRecursive from 'camelcase-keys-recursive';
import uuid from 'uuid-random';

// TODO will get mobx data
// https://github.com/al-nkow/boco_admin/blob/master/src/resources/services/APIService.js
const accessToken = '__DUMMY__';

const client = axios.create({
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        'Accept': 'application/json',
        'Authorization': `Bearer ${accessToken}`
    }
});

client.interceptors.request.use((config: AxiosRequestConfig) => {
    let identifier = localStorage.getItem('identifier');
    if (!identifier) {
        identifier = uuid();
        localStorage.setItem('identifier', identifier);
    }

    config.headers['Request-Id'] = identifier;
    return config;
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

client.defaults.transformRequest = [data => querystring.stringify(data)];

export default client;