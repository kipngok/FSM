<template>
    <div>
        <div class="page-header">
        <div class="row pgh">
         

            <div class="col-sm-6 ">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: 0px;">Create Section</h4>
                </div>
        </div>
    </div>
      <!-- 'name','description','location_id','status' -->
        <div class="row">
            <div class="col-md-6">
         

        <form @submit.prevent="addSection">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="survey.name">
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class= "form-control" v-model="survey.description"></textarea>
                      
                    </div>

                     <div class="form-group">
                         <label>Status</label>
                        <select class="form-control" v-model="survey.status">
                            <option value='0' >Select status</option>
                            <option v-for="item in test" :value="item">{{item}}</option>
                        </select>
                    </div>
                     <div class="form-group">
                            <label>Select Location:</label>
                            <select class='form-control' v-model='location.name'>
                              <option value='0' >Select Location</option>
                              <option v-for='data in locations' :value='data.id'>{{ location.name }}</option>
                            </select>
                        </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Create</button> 
          
                      <!--  <router-link :to="{name: 'surveys'}" class="btn btn-warning "> Back</router-link>    -->
                    </div>
                   
                </form>
                    
               
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                survey: {},
                test: ['Active', 'Inactive'],
                status: null,
                location: 0,
                locations: []
            }
        },
        methods: {
           getLocations: function(){
              axios.get('http://localhost:8000/api/getLocation')
              .then(function (response) {
                 this.locations = response.data;
              }.bind(this));

            },
              
            addSection() {
                this.axios
                    .post('http://localhost:8000/api/survey', this.survey)
                    .then(response => (
                        this.$router.push({ path: '/ShowSurvey/${id}' })

                    ))
                     // console.log(response);
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>




        