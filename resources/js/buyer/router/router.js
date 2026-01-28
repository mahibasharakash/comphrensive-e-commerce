import {createRouter, createWebHistory} from "vue-router";

const title = 'Jonopod It Office - ';

import authenticationLayout from "../authentication/layout/page.vue";
import login from "../authentication/pages/login/page.vue";
import registration from "../authentication/pages/registration/page.vue";
import forgot from "../authentication/pages/forgot/page.vue";
import reset from "../authentication/pages/reset/page.vue";
import verification from "../authentication/pages/verification/page.vue";

import portalLayout from "../portal/layout/page.vue";
import home from "../portal/pages/home/page.vue";

import profileLayout from "../profile/layout/page.vue";
import dashboard from "../profile/pages/dashboard/page.vue";

const routes = [
    { path: '', name: 'portalLayout', component: portalLayout,
        children: [
            { path: '', name: 'home', component: home, meta: {title: title + 'Home'} },
            { path: 'auth', name: 'authenticationLayout', component: authenticationLayout,
                children: [
                    { path: 'login', name: 'login', component: login, meta: {title: title + 'Login'} },
                    { path: 'registration', name: 'registration', component: registration, meta: {title: title + 'Registration'} },
                    { path: 'forgot', name: 'forgot', component: forgot, meta: {title: title + 'Forgot'} },
                    { path: 'reset', name: 'reset', component: reset, meta: {title: title + 'Reset'} },
                    { path: 'verification', name: 'verification', component: verification, meta: {title: title + 'Verification'} },
                ]
            },
            { path: 'profile', name: 'profileLayout', component: profileLayout,
                children: [
                    { path: '', name: 'dashboard', component: dashboard, meta: {title: title + 'Dashboard'} },
                ]
            },
        ]
    },
];

const router = createRouter({ history: createWebHistory(), routes,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) { return { el: to.hash, behavior: 'smooth' }; } else { return {top: 0, behavior: 'smooth'}; }
    }
});

export default router;
