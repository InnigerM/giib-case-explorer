import NotFound from "./components/NotFound";
import Explore from "./components/Explore";
import Cases from "./components/Cases";
import CaseDetail from "./components/CaseDetail";


export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound
        },

        {
            path: '/',
            component: Explore
        },

        {
            path: '/cases',
            component: Cases
        },

        {
            path: '/cases/:id',
            component: CaseDetail
        }
    ]
}
