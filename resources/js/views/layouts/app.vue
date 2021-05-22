<template>
    <div class="container">
    	<NavigationBar></NavigationBar>
        <router-view> </router-view>
    </div>


</template>
 
<script>
import NavigationBar from "../components/NavigationBar.vue";
    export default {
        name:'NavigationBar',
        components: { NavigationBar
  		},
    };
</script>