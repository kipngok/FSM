<template>
    <div>
        <div class="page-header">
        <div class="row">
            <div class="col-sm-6 ">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: -73px;"> <i class="fa fa-plus"></i>Create Category</h4>
                </div>
        </div>
    </div>
      
        <div class="row">
            <div class="col-md-6">
         

        <form @submit.prevent="addLocation">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="location.name">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Create</button>   
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
                location: {}
            }
        },
        methods: {
            addLocation() {
                this.axios
                    .post('http://localhost:8000/api/location', this.location)
                    .then(response => (
                        this.$router.push({ name: '/ShowLocation/${id}' })

                    ))
                     // console.log(response);
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>



