<template>
      <!-- name,description -->
    <div>
        <h3 class="text-center">Edit Section</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateSection">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="section.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="section.description">
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
                section: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/sections/${this.$route.params.id}`)
                .then((res) => {
                    this.section = res.data;
                });
        },
        methods: {
            updateProduct() {
                this.axios
                    .patch(`http://localhost:8000/api/sections/${this.$route.params.id}`, this.section)
                    .then((res) => {
                        this.$router.push({ name: 'section.show' });
                    });
            }
        }
    }
</script>