<template>
    <div>
        <div class="page-header">
        <div class="row">
         

            <div class="col-sm-6  ">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: 0px;"> <i class="fa fa-plus"></i>Create Category</h4>
                </div>
        </div>
    </div>
      
        <div class="row">
            <div class="col-md-6">
         

        <form @submit.prevent="addCategory">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="category.category_name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class= "form-control" v-model="category.description"></textarea>
                      
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
                category: {}
            }
        },
        methods: {
            addCategory() {
                this.axios
                    .post('http://localhost:8000/api/categories', this.category)
                    .then(response => (
                        this.$router.push({ name: 'category' })

                    ))
                     // console.log(response);
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>



