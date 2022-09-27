<template>
    <div>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{ post.title }}
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data: function(){
        return{
            posts: [],
        }
    },
    methods: {
        getPosts(postPage = 1){
            axios.get('/api/posts/', {
                page: postPage
            }).then((response) =>{
                console.log(response.data.results.data);
                this.posts = response.data.results.data;
            }).catch((error) =>{
                console.error(error.message);
            })
        }
    },

    created(){
        this.getPosts();
    }
}
</script>

<style>

</style>