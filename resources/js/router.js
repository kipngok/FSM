import Vue from 'vue';
import VueRouter from 'vue-router';


import ListCategories from './views/category/ListCategories.vue';
import EditCategory from './views/category/EditCategory.vue';
import CreateCategory from './views/category/CreateCategory.vue';
import ShowCategory from './views/category/ShowCategory.vue';


import ListLocations from './views/location/ListLocations.vue';
import EditLocation from './views/location/EditLocation.vue';
import CreateLocation from './views/location/CreateLocation.vue';
import ShowLocation from './views/location/ShowLocation.vue';

import ListSections from './views/section/ListSections.vue';
import EditSection from './views/section/EditSection.vue';
import CreateSection from './views/section/CreateSection.vue';
import ShowSection from './views/section/ShowSection.vue';

import ListSurveys from './views/survey/ListSurveys.vue';
import EditSurvey from './views/survey/EditSurvey.vue';
import CreateSurvey from './views/survey/CreateSurvey.vue';
import ShowSurvey from './views/survey/ShowSurvey.vue';

import TakeSurvey from './views/takeSurvey/TakeSurvey.vue';

import Home from "./views/Home.vue";
import Dashboard from './views/Dashboard.vue';
import Login from "./views/Login.vue";
import Register from "./views/Register.vue";




Vue.use(VueRouter);
const routes = [
            {
            path: "/",
            name: "home",
            component: Home
            },
            {
            path: "/Login",
            name: "Login",
            component: Login,
            meta: { guestOnly: true }
          },
          {
            path: "/register",
            name: "Register",
            component: Register,
            meta: { guestOnly: true }
          },
        {
            path: '/dashboard',
            name: 'Dashboard',
            component: Dashboard,
            meta: { authOnly: true }

        },
          {
            path: '/category',
            name: 'category',
            component: ListCategories
        },
         {
            path: '/CreateCategory',
            name: 'createCategory',
            component: CreateCategory
        },
         {
            path: '/ShowCategory/:id',
            name: 'showCategory',
            component: ShowCategory
        },

         {
            path: '/EditCategory/:id',
            name: 'EditCategory',
            component: EditCategory
        },
        {
            path: '/ListSections',
            name: 'sections',
            component: ListSections
        },
         {
            path: '/EditSection/:id',
            name: 'editSection',
            component: EditSection
        },
         {
            path: '/CreateSection',
            name: 'createSection',
            component: CreateSection
        },
         {
            path: '/ShowSection/:id',
            name: 'showSection',
            component: ShowSection
        },
         {
            path: '/ListSurveys',
            name: 'surveys',
            component: ListSurveys
        },
         {
            path: '/CreateSurveys',
            name: 'createSurvey',
            component: CreateSurvey
        },
         {
            path: '/ShowSurvey/:id',
            name: 'showSurvey',
            component: ShowSurvey
        },
         {
            path: '/EditSurvey/:id',
            name: 'editSurvey',
            component: EditSurvey
        },
        {
            path: '/ListLocations',
            name: 'locations',
            component: ListLocations
        },
         {
            path: '/CreateLocation',
            name: 'createLocation',
            component: CreateLocation
        },
         {
            path: '/ShowLocation/:id',
            name: 'showLocation',
            component: ShowLocation
        },
         {
            path: '/EditLocation/:id',
            name: 'editLocation',
            component: EditLocation
        },

        {
            path: '/TakeSurvey',
            name: 'takeSurvey',
            component: TakeSurvey
        }
  
    ];
    const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});

function isLoggedIn() {
  return localStorage.getItem("auth");
}

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.authOnly)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (!isLoggedIn()) {
      next({
        path: "/login",
        query: { redirect: to.fullPath }
      });
    } else {
      next();
    }
  } else if (to.matched.some(record => record.meta.guestOnly)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (isLoggedIn()) {
      next({
        path: "/dashboard",
        query: { redirect: to.fullPath }
      });
    } else {
      next();
    }
  } else {
    next(); // make sure to always call next()!
  }
});


export default router;

