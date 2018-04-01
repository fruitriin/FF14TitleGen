<template>
    <div id="preview">
        <div><p :title="title.top" class="header gradation eng">{{title.top}}</p>
            <div class="hr"></div>
        </div>
        <p :title="title.middle" class="main gradation eng">{{title.middle}}</p>
        <p class="footer jpn">{{title.bottom}}</p></div>
</template>

<script>
    export default {
        props: ['title', 'titleStyle'],
        data:function(){
            return {}
        },

    }
</script>

<style scoped>
    p {
        margin: 0 auto;
        display: inline-block
    }

    #preview {
        font-size: 16px;
        width: 1200px;
        max-width: 100%;
        height: 600px;
        line-height: 1;
        background-color: #ccc;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    #preview div {
        margin: 0 auto
    }

    .eng {
        font-family: EoFont;
        color: #d9d4b5;
        text-shadow: 1px 1px .3em #5a484b, -1px -1px .2em #5a484b
    }

    .eng:after {
        color: #c6b646
    }

    .gradation {
        position: relative
    }

    .gradation:after, .gradation:before {
        position: absolute;
        top: 0;
        left: 0
    }

    .gradation:after {
        content: attr(title);
        -webkit-mask-image: -webkit-linear-gradient(top, transparent, #000)
    }

    .header {
        font-size: 1.6em;
        letter-spacing: .3em
    }

    .hr {
        height: 2px;
        width: 100%;
        background-color: #b4a99b;
        box-shadow: 1px 1px 0 #716556
    }

    .main {
        margin: .2em auto .3em;
        font-size: 4em
    }

    .footer {
        font-size: 1.7em;
        letter-spacing: .3em
    }

    .jpn {
        font-family: Koku-Mincho;
        color: #fff5e3;
        text-shadow: 1px 1px .3em #927026, -1px -1px .3em #927026;
        font-weight: 700
    }
</style>