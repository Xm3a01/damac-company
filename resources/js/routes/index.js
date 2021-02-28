
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


// import Profile from '../views/dashboard/Company'
// import Index from '../views/dashboard/Index'

export default new VueRouter({
    mode: 'history',
    routes: [
        // {
        //     path: '/dashboard',
        //     name: 'home',
        //     component: Index
        // },
        // {
        //     path: 'profile',
        //     name: 'profile',
        //     component: Profile,
        // }
    ],
});