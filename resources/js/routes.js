import NotFound from "./components/NotFound";
import Explore from "./components/pages/Explore";
import CaseDetail from "./components/displayComponents/CaseDetail";
import CaseCreate from "./components/pages/CaseCreate";
import TagOverview from "./components/pages/TagOverview";
import CaseOverview from "./components/pages/CaseOverview";
import Home from "./Home";


export default {
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound
        },

        {
            path: '/',
            component: Home
        },

        {
            path: '/explore',
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
