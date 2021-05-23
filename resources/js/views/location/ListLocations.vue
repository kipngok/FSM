<template>
    <div>
          <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: 0px;"> <i class="fa fa-plus"></i>Locations</h4>
                </div>
              
        </div>
    </div>
 
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="location in locations" :key="location.id">
                <td>{{ location.id }}</td>
                <td>{{ location.name }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'showLocation', params: { id: location.id }}" class="btn btn-success">View</router-link>
                      
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                locations: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/location/')
                .then(response => {
                    this.locations = response.data;
                });
        },
        methods: {
            deleteProduct(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/location/${id}`)
                    .then(response => {
                        let i = this.locations.map(data => data.id).indexOf(id);
                        this.locations.splice(i, 1)
                    });
            }
        }
    }
</script>