<template>
    <div>
        <ul>
            <li></li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    methods: {
        getPosts(){
            console.warn('hello world');
        }
    },

    created(){
        this.getPosts();
    }
}
</script>

<style>

</style>