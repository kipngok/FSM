<template>
    <div>
       <div class="page-header">
        <div class="row">
         

            <div class="col-sm-6">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: 0px;"> <i class="fa fa-plus"></i>Edit Category</h4>
                </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateCategory">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="category.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="category.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                category: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/products/${this.$route.params.id}`)
                .then((res) => {
                    this.category = res.data;
                });
        },
        methods: {
            updateProduct() {
                this.axios
                    .patch(`http://localhost:8000/api/category/${this.$route.params.id}`, this.category)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>