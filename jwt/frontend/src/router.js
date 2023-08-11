import { createWebHistory, createRouter } from 'vue-router';
import Main from './components/MainComponent.vue';
import Login from './components/LoginComponent.vue';
import TokenController from './js/TokenController.js';

const configFlg = {
    main: true,
    login: false,
}

const beforeAuth = path => (from, to, next) => {
    const isToken = TokenController.getToken();
    const flg = configFlg[path];

    if (isToken && path === 'login') {
        next('main');
    } else if ((flg && isToken) || !flg) {
        return next();
    } else {
        next('/login');
    }
}

const routes = [
    {
        path: '/main',
        name: 'main',
        component: Main,
        beforeExter: beforeAuth('main'),
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        beforeExter: beforeAuth('login'),
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;