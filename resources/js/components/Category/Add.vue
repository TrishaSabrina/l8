<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="create">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" :class="{'is-invalid' : !!ValidationError.title}" class="form-control" v-model="category.title" >
                                    
                                </div>
                                <small v-if=" ValidationError.title" class="text-danger">{{ ValidationError.title[0] }}</small>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" :class="{'is-invalid' : !!ValidationError.description}" class="form-control" v-model="category.description" >
                                   
                                </div>
                                
                                <small v-if=" ValidationError.description" class="text-danger">{{ ValidationError.description[0] }}</small>

                            
                   </div>
                             <!--<div class="col-12 mb-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>-->

                        </div>  
                         
                        
       <!--<div class="form-group">
        <label for="">Image</label>
    <input type="file" @change="onFileChange" class="form-control-file" name="image" id="image" placeholder="image" >
       </div>    -->
       

       <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Save Changes</button>

       </div>
       
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import axios from 'axios'
export default{
    name:"add-category",
   
    mounted(){

    },
    data(){
        return{
          
            category:{
                title:"",
                description:"",
            },

            
            ValidationError: {
                title: "",
                description: ""
            },

   
            
        }
    

    },
    methods:{
        async create(){
            this.ValidationError = {
                title: "",
                description: ""
            };
            await axios.post('/api/category', this.category).then(response=>{
                console.log(response)
                this.$router.push({name:"categoryList"})
            }).catch(error=>{
                this.ValidationError.title = error.response?.data?.errors?.title;
                this.ValidationError.description = error?.response?.data?.errors?.description;
            })




            
            
        }
        


    }
}
</script>
