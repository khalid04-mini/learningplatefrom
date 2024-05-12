import {createMemoryHistory, createRouter, createWebHistory} from 'vue-router'
import AjouterSalle from "../components/Salles/AjouterSalle.vue";
import Dashboard from "../components/Admin/Dashboard.vue";
import Centres from "../components/Centres/Centres.vue";
import AjouterCentre from "../components/Centres/AjouterCentre.vue";


const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: Dashboard
    },
    {
        path: '/salles',
        name: 'sallesajouter',
        component: AjouterSalle
    },
  /*  {
        path: '/centres',
        name: 'centres',
        component: Centres,
        children: [
            {
                path: '/ajouter',
                name: 'centres.ajouter',
                component: AjouterCentre
            }
        ]
    },*/
    {
        path: '/centres',
        children: [
            { path: '', component: Centres },
            { path: 'ajouter', component: AjouterCentre },

        ],
    },
]

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})
export default router
