import NotFound from "./components/NotFound";
import Explore from "./components/Explore";
import Cases from "./components/Cases";
import CaseDetail from "./components/CaseDetail";
import CaseCreate from "./components/CaseCreate";


export default {
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
            path: '/cases/create',
            component: CaseCreate
        },

        {
            path: '/cases/:id',
            component: CaseDetail,
            props: true
        }
    ]
}
