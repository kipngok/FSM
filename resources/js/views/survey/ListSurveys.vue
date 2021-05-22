<template>
    <div>
          <div class="page-header">
        <div class="row pgh">
            <div class="col-sm-6">
                    <h4 style="font-weight:bold;  font-size: 25px; color: rgb(25 26 27);margin-top: -73px;">Surveys</h4>
                </div>
                <div class="col-sm-4 createbtn">


               <router-link :to="{name: 'createSurvey'}" class="btn btn-success "><i class="fa fa-plus"></i> Create Survey</router-link>
                </div>
        </div>
    </div>
 
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Status</th>
                <th>Descriptions</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="survey in surveys" :key="survey.id">
                <td>{{ counter }}</td>
                <td>{{ survey.name }}</td>
                <td>{{ survey.status }}</td>
                <td>{{ survey.description }}</td>
                <td>

                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'showSection', params: { id: survey.id }}" class="btn btn-success">View</router-link>
                      
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
                surveys: [],
                counter: 0
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/survey/')
                .then(response => {
                    this.surveys = response.data;
                });
        },
        methods: {
            deleteSection(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/survey/${id}`)
                    .then(response => {
                        let i = this.surveys.map(data => data.id).indexOf(id);
                        this.surveys.splice(i, 1)
                    });
            },
             increment() { 
                this.counter++;
      }
        }
    }
</script>