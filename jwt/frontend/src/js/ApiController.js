import axios from 'axios';
import tc from './TokenController.js';

const apiController = axios.create({
    baseURL: 'http://localhost:8000',
});

// axios가 실행되어서 서버에 요청할때 실행됨
apiController.interceptors.request.use(
    config => {
        config.headers['Content-Type'] = 'application/json; charset-utf-8';
        if (tc.getToken()) {
            config.headers['Authrization'] = tc.getToken();
        }
        return config;
    },
    error => {
        console.log(error);
        return Promise.reject(error);
    },
);

export default apiController;