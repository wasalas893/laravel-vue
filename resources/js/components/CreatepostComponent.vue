<template>
    <div class="container">
        
    
         <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="text-center">Posts Add</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                     
                        <div class="alert alert-success" role="alert" v-if="success">
                         This is a success alert—check it out!
                        </div>

                        <div class="alert alert-danger" role="alert" v-if="error">
                         This is a danger alert—check it out!
                        </div>

                <form @submit.prevent="addPost">
                    <div class="form-group">
                        <label>Posts name</label>
                        <input type="text" class="form-control" v-model="post.post_name">
                    </div>
                    <div class="form-group">
                        <label>Post Description</label>
                        <input type="text" class="form-control" v-model="post.post_description">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Post</button>
                </form>
                {{message}}
            </div>
        </div>
                    
                </div>
            </div>
        </div>



    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                post: {},
                success:false,
                error:false,
                message:null,
               
            }
        },
        methods: {
            addPost() {

                this.axios
                    .post('http://localhost:8000/api/posts/add', this.post)
                    .then(response => {

                        this.onSucess(response.data);
                        location.reload();
                        
                     })
                    .catch(error => {
                        this.onFailure(error.data)

                    })
                    
            },

            onSucess(){
                
                this.success=true
            }
            ,
            onFailure(){
                this.error=true
            }



        }
    }
</script>