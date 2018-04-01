<template>
    <div>
        <preview :title="title" :title-style="titleStle"></preview>
        <control  :title="title" :title-style="titleStle"></control>
    </div>
</template>

<script>
    import preview from './preview';
    import control from './control';
    export default {
        components: {
            preview, control
        },
        data:function(){
            const data = {};
            data.title = {};
            data.title.top = "Riin's W*rkspace";
            data.title.middle = 'EoLike TitleGenerator';
            data.title.bottom = "雰囲気重視　コンテンツタイトルジェネレータ";
            data.titleStle = {};
          return data;
        },
        name: 'title-gen',
        mounted(){
            console.log(this.title);
        }
    }
</script>

<style scoped>

</style>