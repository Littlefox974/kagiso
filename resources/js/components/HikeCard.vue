<template>
     <div class="col-md-4 hike-card" v-on:click="goToHike()">
        <img v-bind:src="imageLink" v-on:click="goToHike" alt="Landscape photo" class="hike-background">
        <h4>{{ title }}</h4>          
        <h1>{{ level }}</h1>
    </div>
</template>

<script>
export default {
    props: ['id', 'title', 'description', 'imageLink', 'level'],
    methods: {
        goToHike() {
            console.log(this)
            console.log('clicked')
            window.location = '/hike/' + this.id
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/app.scss';

    .hike-card {
        padding: 15px !important;
        max-height: 30%;
    }

    h4 {
        position: absolute;
        margin-left: 10%;
        margin-top: 20%;
    }

    h1 {
        position: absolute;
        margin-left: 10%;
        margin-top: 10%;
        font-size: medium;
        font-weight: 300;
        letter-spacing: 0.43px;
        line-height: 20px;
    }

    .hike-background {
        float: left;
        width: 100%;
        border-radius: 6px;
        filter: brightness(70%);
    }

    @media only screen and (max-width: 768px) {
        h1 {
            font-size: medium;
            font-weight: 300;
            letter-spacing: 0.43px;
            line-height: 20px;
        }

        h4 {
            white-space: initial;
            padding-right: 10%;
        }

        .hike-card {
            max-width: 70%;
        }
    }
</style>
