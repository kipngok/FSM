<template>
    <div>
          <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: 0px;">Sections</h4>
                </div>
            
        </div>
    </div>
 
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Descriptions</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="section in sections" :key="section.id">
                <td>{{ counter }}</td>
                <td>{{ section.name }}</td>
                <td>{{ section.description }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'showSection', params: { id: section.id }}" class="btn btn-success">View</router-link>
                      
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
                sections: [],
                counter: 0
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/section/')
                .then(response => {
                    this.sections = response.data;
                });
        },
        methods: {
            deleteSection(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/section/${id}`)
                    .then(response => {
                        let i = this.sections.map(data => data.id).indexOf(id);
                        this.sections.splice(i, 1)
                    });
            },
             increment() { 
                this.counter++;
      }
        }
    }
</script>