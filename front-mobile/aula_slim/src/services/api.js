import axios from 'axios'

const api = axios.create({
    baseURL: 'http://localhost:8012'
})

export default api