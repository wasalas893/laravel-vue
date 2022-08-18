<template>


<div class="container">

    <div class="row">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="text-center">Posts</h4>
                </div>
                <div class="card-body">

                <div class="alert alert-success" role="alert" v-if="success">
                         This is a success !
                        </div>

                        <div class="alert alert-danger" role="alert" v-if="error">
                         This is a danger !
                        </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Posts Name</th>
                                    <th>Posts Description</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(post,key) in posts" :key="key">
                                    <td>{{ post.id }}</td>
                                    <td>{{ post.post_name }}</td>
                                    <td>{{ post.post_description }}</td>
                                    <td>{{ post.created_at }}</td>
                                    <td>
                                        <router-link :to="{name: 'Editposts', params: { id: post.id }}" class="btn btn-success" >Edit</router-link>
                                        <button type="button" @click="deletePosts(post.id)" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>


<script>
    

export default {

    data(){
        return {
            posts:[],
            success:false,
            error:false,
        }
    }, 
    created(){

          this.axios
                .get('http://localhost:8000/api/posts/')
                .then(response => {
                    this.posts = response.data;
                    

                    
                });
        },

        methods: {

            deletePosts(id){
                this.axios.delete(`http://localhost:8000/api/posts/delete/${id}`)
                  .then(response=>{
                    this.onSucess(response.data);
                    location.reload();
                    
                }).catch(error=>{
                    this.onFailure(error.data)
                })
            },
             onSucess(){
                
                    this.success=true
                },
            
                onFailure(){
                    this.error=true
               }


        }
}
</script>


<style>

h4.text-center {
    font-size: 30px !important;
    font-weight: 600  !important;
}



</style>