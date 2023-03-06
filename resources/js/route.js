import { createRouter, createWebHistory } from "vue-router";

const Welcome = () => import('./components/Welcome.vue')
const CategoryList = () => import('./components/category/List.vue')
const CategoryCreate = () => import('./components/category/Add.vue')
const CategoryEdit = () => import('./components/category/Edit.vue')
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Welcome
    },
    {
        name: 'categoryList',
        path: '/category',
        component: CategoryList
    },
    {
        name: 'categoryEdit',
        path: '/category/:id/edit',
        component: CategoryEdit
    },
    {
        name: 'categoryAdd',
        path: '/category/add',
        component: CategoryCreate
    }
]


export default createRouter({
    history: createWebHistory(),
    routes
})