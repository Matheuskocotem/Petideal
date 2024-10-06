import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/Register.vue'),
      meta: {
        title: 'register'
      }
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/Login.vue'),
      meta: {
        title: 'login'
      }
    },
    {
      path: '/shop',
      name: 'Shop',
      component: () => import('../views/PetShop.vue'),
      meta: {
        title: 'Shop'
      }
    },
    {
      path: '/homepage',
      name: 'homepage',
      component: () => import('../views/PetShopHome.vue'),
      meta: {
        title: 'Home'
      }
    },
    {
      path: '/admin',
      name: 'admin',
      component: () => import('../views/Admin.vue'),
      meta: {
        title: 'Admin'
      }
    },
    {
      path: '/graphic',
      name: 'graphic',
      component: () => import('../views/Graphic.vue'),
      meta: {
        title: 'graphic'
      }
    },
    {
      path: '/aboutus',
      name: 'aboutus',
      component: () => import('../views/PetShopAboutUs.vue'),
      meta: {
        title: 'aboutus'
      }
    },
    {
      path: '/ContactUs',
      name: 'ContactUs',
      component: () => import('../views/ContactUs.vue'),
      meta: {
        title: 'ContactUs'
      }
    },
  ]
})

router.beforeEach((to, from, next) => {
  document.title = to.meta.title;
  next();
});

export default router
