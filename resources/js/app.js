import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler'

import TotalPost from './component/TotalPost.vue';

const app = createApp({});

app.component('total-post', TotalPost);


app.mount("#wrapper");



