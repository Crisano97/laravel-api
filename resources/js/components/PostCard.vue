<template>
    <div class="card p-4 m-4">
        <div class="card-body">
            <h3 class="card-title m-3 font-weight-bold">
                {{ post.title }}
            </h3>
            <h6 class="card-subtitle m-3 text-secondary">
                {{ post.user.name }} | {{ post.post_date }}
            </h6>
            <span v-if="post.category != null" :style="`background-color:` + post.category.color" class="badge text-white p-2">{{ post.category.name }}</span>
            <p class="card-text m-3">
                {{ post.post_content }}
            </p>
            <img :src="post.post_image" alt="image">
        </div>
    </div>
</template>

<script>
export default {
    props: ['post'],
}
</script>

<style>

</style>