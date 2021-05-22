<template>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'Dashboard' }"
                  >
                  Dashboard
            </router-link>
              <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'category' }"
                  >
                  Category
            </router-link>
              <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'sections' }"
                  >
                  Sections
            </router-link>
              <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'surveys' }"
                  >
                  Surveys
            </router-link>
              <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'surveyTaking' }"
                  >
                  Take Survey
            </router-link>
              <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'locations' }"
                  >
                  Location
            </router-link>
              <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'user' }"
                  >
                  Users
            </router-link>
               
                <hr>
            </div>
        </div>
    
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
