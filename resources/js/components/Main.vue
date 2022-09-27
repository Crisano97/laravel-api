<template>
    <div>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{ post.title }} | {{ post.user.name }} | {{ post.post_date }}
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    posts: ['posts'],
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