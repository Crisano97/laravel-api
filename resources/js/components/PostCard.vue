<template>
    <div class="card p-4 m-4">
        <div class="card-body">
            <h3 class="card-title m-3">
                {{ post.title }}
            </h3>
            <h6 class="card-subtitle m-3">
                {{ post.user.name }}
            </h6>
            <p class="card-text m-3">
                {{ post.post_content }}
            </p>
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