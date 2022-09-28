<template>
    <div class="card p-4 m-4">
        <div clas="card-body">
            <h3 class="card-title m-3 font-weight-bold">
                {{ post.title }}
            </h3>
            <h6 class="card-subtitle m-3 text-secondary">
                {{ post.user.name }} | {{ post.post_date }}
            </h6>
            <div 
                @click="toggle(post.category.id)"
                v-if="post.category != null" 
                :style="`background-color:` + post.category.color" 
                class="badge text-white p-2 m-3 category-hover">
                {{ post.category.name }}

                <div class="relative-posts text-dark" :class="(click === true) ? 'd-block' : 'd-none' " v-if="post.category.id === categoryClicked">
                    <ul class="mr-2 post-continer text-left">
                        <li 
                            v-for="post in post.category.posts" 
                            :key="post.id"> 
                            {{ post.title }} 
                        </li>
                    </ul>
                </div>
            </div>
            <span v-for="tag in post.tags" :key="tag.id" class="d-inline-block mr-2"> #{{ tag.name }}</span>
            <p class="card-text m-3">
                {{ post.post_content }}
            </p>
            <img :src="post.post_image" class="m-3" alt="image">
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            click: false,
            categoryClicked: '',
        } 
    },

    props: ['post'],
    
    methods:{
        toggle(index){
            this.categoryClicked = index;
            if (this.click === false){
                this.click = true;
            } else {
                this.click = false;
            }
        }
    } 
}
</script>

<style lang="scss" scoped>

    
    div.category-hover{
        font-size: 1.5rem;

        // div.relative-posts{
        //     display: none;
        // }

        // &:hover div.relative-posts{
        //     display: block;
        //     width: fit-content;
        //     height: fit-content;
        //     border: 1px solid black;
        //     position: absolute;
        //     background-color: white;
        // }
        div.relative-posts{
            width: fit-content;
            height: fit-content;
            border: 1px solid black;
            position: absolute;
            background-color: white;
        }

    }
    
</style>