<template>
    <div>
          <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: -73px;"> <i class="fa fa-plus"></i>Categories</h4>
                </div>
                <div class="col-sm-4 createbtn">


               <router-link :to="{name: 'createCategory'}" class="btn btn-success "><i class="fa fa-plus"></i> Create Category</router-link>
                </div>
        </div>
    </div>
 
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="category in categories" :key="category.id">
                <td>{{ category.id }}</td>
                <td>{{ category.category_name }}</td>
                <td>{{ category.description }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'showCategory', params: { id: category.id }}" class="btn btn-success">View</router-link>
                      
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
                categories: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/category/')
                .then(response => {
                    this.categories = response.data;
                });
        },
        methods: {
            deleteProduct(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/category/${id}`)
                    .then(response => {
                        let i = this.categories.map(data => data.id).indexOf(id);
                        this.categories.splice(i, 1)
                    });
            }
        }
    }
</script>