<template>
    <div id="control">
        <label for="top-title">上段</label><input id="top-title" type="text" :value="title.top"><br>
        <label for="mid-title">中断</label><input id="mid-title" type="text" :value="title.middle"><br>
        <label for="mid-title">下段</label><input id="bot-title" type="text" :value="title.bottom"><br>
    </div>
</template>

<script>
    export default {
        props: ['title', 'titleStyle'],
        data:function() {
            return {};
        },

    }
</script>

<style scoped>

</style>