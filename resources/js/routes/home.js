

const Posts = () =>import ( '../components/PostsComponent.vue');

const Createposts = () =>import ( '../components/CreatepostComponent.vue');

const Editposts = () =>import ( '../components/EditpostComponent.vue');







export default [
    
    {
        path: '/posts',
        component: Posts,
        name: 'Posts',
    },
    {
        path: '/posts/add',
        component: Createposts,
        name: 'Createposts',

    },
    {
        path: '/posts/edit/:id',
        component: Editposts,
        name: 'Editposts',

    }
]
