<template>
    <div class="card">
        <ul>
            <li>
                {{ post.title }} | {{ post.user.name }} | {{ post.post_date }}
            </li>
        </ul>
        
    </div>
</template>

<script>
export default {
    props: ['post'],
}
</script>

<style>

</style>