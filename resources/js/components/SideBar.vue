<template>
<div>

  <div class="col-sm-2 sidebar">
    <ul class="sidebar-menu">
    <li> 
      <router-link
              class="navy"
              data-toggle="collapse"
              :to="{ name: 'Dashboard' }"
                  > <i class="fa fa-tachometer" style="color: #eada0f;"></i>
                  Dashboard
            </router-link>
     </li>
       <li>
     <a href="#Category" class="navy"><i class="fa fa-flask" style="color: #eada0f;"></i>  Category <i class="fa fa-chevron-right"></i>
     </a>
     <ul class="nolist">
      <li> <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'category' }"
                  >
                  Categories
            </router-link></li>
      <li> 
        <router-link :to="{name: 'createCategory'}"><i class="fa fa-plus"></i> Create Category
        </router-link>
      </li>
      </ul>
      </li> 


      <li>
     <a href="#Sections" class="navy"><i class="fa fa-flask" style="color: #eada0f;"></i>  Section <i class="fa fa-chevron-right"></i>
     </a>
     <ul class="nolist">
      <li> <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'sections' }"
                  >
                  Sections
            </router-link></li>

      <li> 
        <router-link :to="{name: 'createSection'}"><i class="fa fa-plus"></i> Create Section
        </router-link>
      </li>
      </ul>
      </li> 

       <li>
     <a href="#Survey" class="navy"><i class="fa fa-flask" style="color: #eada0f;"></i>  Survey <i class="fa fa-chevron-right"></i>
     </a>
     <ul class="nolist">
      <li> 
        <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'surveys' }"
              >
            Surveys
            </router-link></li>
      <li> 
      <!--   <router-link :to="{name: 'createSurvey'}"><i class="fa fa-plus"></i> Create Sur
        </router-link> -->
      </li>
      </ul>
      </li> 

      <li>
     <a href="#Location" class="navy"><i class="fa fa-flask" style="color: #eada0f;"></i>  Locations <i class="fa fa-chevron-right"></i>
     </a>
     <ul class="nolist">
      <li> 
        <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'locations' }"
              >
            Locations
            </router-link></li>
      <li> 
        <router-link :to="{name: 'createLocation'}"><i class="fa fa-plus"></i> Create Location
        </router-link>
      </li>
      </ul>
      </li> 


      

  </ul>
</div>
   <!--  <div class="row flex-nowrap">
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
    
    </div> -->
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }

    }

</script>



