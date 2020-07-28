import NotFound from "./components/NotFound";
import Explore from "./components/Explore";
import CaseDetail from "./components/CaseDetail";
import CaseCreate from "./components/CaseCreate";
import TagOverview from "./components/TagOverview";
import CaseOverview from "./components/CaseOverview";


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
            component: CaseOverview
        },

        {
            path: '/cases/create',
            component: CaseCreate
        },

        {
            path: '/cases/:id',
            component: CaseDetail,
            props: true
        },

        {
            path: '/cases/tags/:id',
            component: TagOverview,
            props: true
        }
    ]
}
