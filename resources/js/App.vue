 <template>
  <div>
      <nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <router-link class="navbar-brand" :to="{ name: 'home' }">Laravel </router-link>
      </div>
      <ul class="nav navbar-nav">
        <router-link
          v-if="!isLoggedIn"
          class="nav-item nav-link"
          :to="{ name: 'Login' }"
        >
          Login
        </router-link>
        <router-link
          v-if="!isLoggedIn"
          class="nav-item nav-link"
          :to="{ name: 'Register' }"
        >
          Register
        </router-link>
        <router-link
          v-if="isLoggedIn"
          class="nav-item nav-link"
          :to="{ name: 'Dashboard' }"
        >
          Dashboard
        </router-link>  
        <a
          class="nav-item nav-link"
          v-if="isLoggedIn"
          @click.prevent="logout"
          href="#"
          >Logout</a
        >
      </ul>
    </div>
  </nav>
    <div class="row">
    	<div class="col-sm-4 col-sidebar ">
    	 <SideBar></SideBar>
    	</div>
    	<div class="col-sm-8 col">
      <router-view></router-view>
    </div>
    </div>
    		

  
   
  </div>
</template>


<script>
import User from "./apis/User";
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
    data() {
    return {
      isLoggedIn: false
    };
  },
    mounted() {
    this.$root.$on("login", () => {
      this.isLoggedIn = true;
    });

    this.isLoggedIn = !!localStorage.getItem("auth");
  },
  methods: {
    logout() {
      User.logout().then(() => {
        localStorage.removeItem("auth");
        this.isLoggedIn = false;
        this.$router.push({ path: "/login" });
      });
    }
  }
};
</script>
<style>
.col-sidebar {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    margin-top: 70px;
     margin-left: 0px;
}
.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 61%;
    margin-left: -420px;
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
    background-color: #171819;
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
    color: #fff;
    background-color: #949494;
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