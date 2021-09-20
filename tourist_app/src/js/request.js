import axios from 'axios';

const BASE_URL = "https://api.tourapp.carlroom.cc/";

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
        document.getElementById('LoaderVue').classList.add("show");
        axios.get(BASE_URL + request.do, {
            params: request,
            headers: { "Content-Type": "application/x-www-form-urlencoded" }
        }).then((response) => {
            document.getElementById('LoaderVue').classList.remove("show");
            callback(response.data);
        }).catch((error) => {
            document.getElementById('LoaderVue').classList.remove("show");
            return Promise.reject(error);
        });
    }
};

export default service;
