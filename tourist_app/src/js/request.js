import axios from 'axios';

const BASE_URL = "http://localhost:8000/";

let service = {
    post: (request, callback) => {
        axios.post(BASE_URL + request.do, {
            params: request,
            headers: { "Content-Type": "application/x-www-form-urlencoded" }
        }).then((response) => {
            callback(response.data);
        }).catch((error) => {
            return Promise.reject(error);
        });
    },
    get: (request, callback) => {
        axios.get(BASE_URL + request.do, {
            params: request,
            headers: { "Content-Type": "application/x-www-form-urlencoded" }
        }).then((response) => {
            callback(response.data);
        }).catch((error) => {
            return Promise.reject(error);
        });
    }
};

export default service;
