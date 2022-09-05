
import Home from "../components/HomeComponent.vue";
import Stone from "../components/StoneComponents.vue";

import Review from "../components/ReviewComponents.vue";






export default [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/stone",
        name: "Stone",
        component: Stone,
        
    },
    {
        path: "/review",
        name: "Review",
        component: Review,
        
    },
    
];
