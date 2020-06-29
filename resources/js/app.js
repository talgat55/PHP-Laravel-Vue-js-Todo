window.Vue = require('vue');
import App from './components/App';
import vuetify from './vuetify';
import Vuex from 'vuex';
import storeData from "./store/index"

const store = new Vuex.Store(
    storeData
);
const app = new Vue({
    vuetify,
    el: '#app',
    render: h => h(App),
    store
});
