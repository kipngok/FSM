<template>
    <div>
        <div class="page-header">
        <div class="row">
         

            <div class="col-sm-6 ">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: -73px;"> Category</h4>
                </div>
        </div>
    </div>
      
        <div class="row">
            <div class="col-md-6">
         
                  <table class="table table-condensed table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Category name</th>
                    <td>{{ location.name }}</td>
                </tr>          
            </tbody>
        </table>    
                <div class="btn btn-group">
                    <a href="" class="btn btn-sm btn-warning"> Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                  
                    <router-link :to="{name: 'locations'}" class="btn btn-success">Back</router-link>
               </div>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/location/${this.$route.params.id}`)
                .then((res) => {
                    this.location = res.data;
                });
        },
        methods: {
            updateLocation() {
                this.axios
                    .patch(`http://localhost:8000/api/location/${this.$route.params.id}`, this.location)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>



