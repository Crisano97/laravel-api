<template>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <div class="posts">
                    <PostCard v-for="post in posts" :key="post.id" :post="post"/>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import PostCard from './PostCard.vue'
import axios from 'axios';

export default {
    components: {
        PostCard,
    },
    data: function(){
        return{
            posts: [],
            categories: [],
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
        },
        
    },

    created(){
        this.getPosts();
    }
}
</script>

<style>

</style>