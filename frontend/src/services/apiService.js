import axios from 'axios';

const apiService = axios.create({
  baseURL: 'http://localhost:8081/api', // Укажите базовый URL вашего API Laravel
  withCredentials: true,
});

export default apiService;
