import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/* Import Bootstrap */
import 'bootstrap/dist/css/bootstrap.min.css';

/* Import AdminLTE CSS */
import 'admin-lte/dist/css/adminlte.min.css';