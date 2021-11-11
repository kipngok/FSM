<template>
    <div>
        <div class="page-header">
        <div class="row">
         

            <div class="col-sm-6 ph">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: 0px;">Create Section</h4>
                </div>
        </div>
    </div>
      
        <div class="row">
            <div class="col-md-8">
         

        <form @submit.prevent="addSection">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="section.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class= "form-control" v-model="section.description"></textarea>
                      
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Create</button> 
          
                      <!--  <router-link :to="{name: 'sections'}" class="btn btn-warning "> Back</router-link>    -->
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
                section: {}
            }
        },
        methods: {
            addSection() {
                this.axios
                    .post('http://localhost:8000/api/section', this.section)
                    .then(response => (
                        this.$router.push({ path: '/ShowSection/${id}' })

                    ))
                     // console.log(response);
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>



