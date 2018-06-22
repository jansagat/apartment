import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        component: require('./components/Home')
    },
    {
        path: '/about',
        component: require('./components/About')
    },
    {
        path: '*',
        component: require('./components/404')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
})