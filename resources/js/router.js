import Vue from 'vue';
import VueRouter from 'vue-router';

import Dashboard from './views/Dashboard.vue';
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



Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/dashboard',
            name: 'Dashboard',
            component: Dashboard
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
        }



        

  
    ]
});

export default router;