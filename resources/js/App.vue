 <template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <router-link :to="{ name: 'Dashboard' }" class="navbar-brand"
        >FSM</router-link
      >
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <!-- <ul class="navbar-nav">
          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'Dashboard' }"
            >
              Dashboard
            </router-link>
          </li>
           <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'survey' }"
            >
              Survey
            </router-link>
          </li>
           <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'section' }"
            >
              Sections
            </router-link>
          </li>
           <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'createCategory' }"
            >
              Create Category
            </router-link>
          </li>
        </ul> -->
      </div>
    </nav>
    <div class="row">
    	<div class="col-sm-6 ">
    	 <SideBar></SideBar>
    	</div>
    	<div class="col rv">
      <router-view></router-view>
    </div>
    </div>
    		

  
   
  </div>
</template>

<script>
import SideBar from "./components/SideBar.vue";
export default {
	 components: {
    SideBar
  },
  watch: {
    $route() {
      $("#navbarCollapse").collapse("hide");
    },
  },
};
</script>
<style>
.col-sm-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    margin-top: 70px;
     margin-left: 0px;
}

/*.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 173%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}*/
/*.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 64%;
   margin-left: -467px;
}*/
.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 61%;
    margin-left: -456px;
}

.page-header {
    background-color: #eada0f !important;
    padding: 20px;
    width: 1135px;
    height: 70px;
    margin-bottom: 30px;
    margin-left: 0px;
    margin-top: 70px;
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 11px;
    
}
.shadow-sm {
    position: fixed;
    display: flex;
    height: 70px;
    z-index: 1;
    width: 100%;
    padding-left: 22.2px;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}
.table {
    width: 141%;
    margin-bottom: 1rem;
    color: #212529;
}
.nav-link {
   
    color: #ffffff;
    font-weight: bolder;
    font-size: 16px;
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}
.createbtn{
  
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    margin-left: 149px;
  }
  .sidebar {
    float:left;
    background-color:#8B8C90;
    position: fixed;
    padding: 0px;
    min-height:85vh;

}
.sidebar-menu li a {
    text-transform: capitalize;
    color: #3a3b42;
    font-weight: 400 !important;
    padding: 5px;
    display: block;
    width: 100%;
    padding-left: 20px;
    font-size: 14px !important;
    transition: ease-out 1s;
}

.sidebar-menu li{
  list-style: none;
}
.sidebar-menu li a:hover{
  text-decoration: none;
  color: #FFF;
  /*background-color: #fff;*/
    transition: ease-in .5s;
}

.sidebar-menu li a.active {
    text-decoration: none;
    color: #E1B00B;
    background-color: #FFF;
}

.sidebar-menu{
  margin: 0px;
  margin-top: 50px;
    margin-bottom: 100px;
  padding: 0px;
}
.nolist{
    padding-left: 20px;
    padding-bottom: 10px;
    padding-top: 10px;
}
.sidebar .sidebar-menu li.nolistHighlight {
    background-color: #17629e;
    color: #1FB9B9;
    text-decoration: none
}
.sidebar .sidebar-menu li.nolistHighlight a {
    color: #1FB9B9;
}

.sidebar .sidebar-menu li ul {
    display: none;
    background-color: #ffffff;
}
.sidebar .sidebar-menu li ul li a {
    font-size: 16px;
    font-weight: 400;
    color: #00000090;
    padding-left: 10px;
}
.sidebar .sidebar-menu li ul li a.active {
    background-color: initial;
    color: #000;
    padding-bottom: initial
}
.sidebar .sidebar-menu li ul li a:hover {
    color:#000;
    /*background-color: #DDDDDD50;*/
}
.sidebar .sidebar-menu a {
  text-decoration: none !important;
  font-weight: 600 !important;
}
.navy .fa-chevron-right{
    float: right;
    margin-right: 20px;
    transition: ease-in-out .5s;
}
.navy.active .fa-chevron-right{
transform: rotate(90deg);
transition: ease-in-out .5s;
}

</style>