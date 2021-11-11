
 <template>
  <div>
  	   <div class="page-header">
        <div class="row pgh">
            
            <div class="col-sm-6 ">
               
                </div>
        </div>
    </div>
    <div class="home col-8 mx-auto py-5 mt-5">
        <div class="card">
          <div class="card-header">Welcome ken 

              <div>
             <router-link
              class="btn btn-success"
              data-toggle="collapse"
              :to="{ name: 'takeSurvey' }"
                  >
                  Take survey <i class="fa fa-arrow-right"></i>
            </router-link>

          </div>

          </div>

        
          
        </div>
      </div>
  </div>
</template>

<script>
export default {
    
}
</script>