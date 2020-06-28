window.Vue = require('vue');
import App from './components/App';
import vuetify from './vuetify';
const app = new Vue({
    vuetify,
    el: '#app',
    render: h => h(App),
});
