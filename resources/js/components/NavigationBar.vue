 <template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <router-link :to="{ name: 'Dashboard' }" class="navbar-brand"
        >Laravel-Vue SPA</router-link
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

    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {
  watch: {
    $route() {
      $("#navbarCollapse").collapse("hide");
    },
  },
};
</script>
