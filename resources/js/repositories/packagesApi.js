import Axios from "axios";

const resource = "/packages";
export default {
    get() {
        return axios.get(`${resource}`);
    }
};
