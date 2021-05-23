<template>
    <div>
        <div class="page-header">
        <div class="row">
         

            <div class="col-sm-6 ">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: 0px;"> Section</h4>
                </div>
        </div>
    </div>
      
        <div class="row">
            <div class="col-md-6">
         
                  <table class="table table-condensed table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Section name</th>
                    <td>{{ section.name }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{section.description}}</td>
                </tr>
            </tbody>
        </table>    
                <div class="btn btn-group">
                    <a href="" class="btn btn-sm btn-warning"> Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                    <router-link :to="{name: 'sections'}" class="btn btn-success">Back</router-link>
               </div>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/section/${this.$route.params.id}`)
                .then((res) => {
                    this.section = res.data;
                });
        },
        methods: {
            updateSection() {
                this.axios
                    .patch(`http://localhost:8000/api/section/${this.$route.params.id}`, this.product)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>



