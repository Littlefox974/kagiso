<template>
    <div>
        <img class="header-img" src="img/desktop_parallax_background.jpg"/>
        <div class="row">
            <div class="offset-md-1 col-md-4">
                <img class="hike-image" v-bind:src="hike.imageLink"/>
            </div>
            <div class="col-md-6">
                <h2>A {{ hike.level }} hike</h2>
                <h3>{{ hike.title }}</h3>
                <p v-html="hike.description"></p>
                <p class="underlined-link"><a :href="'/hike/' + hike.id">Discover this hike !</a></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['id', 'level', 'title', 'description'],
    data() {
        return {
            hike: {
                id: NaN,
                title: '',
                description: '',
                imageLink: '',
                level: ''
            }
        }
    },
    mounted() {
        axios.get('http://localhost:8000/api/hike/last')
            .then(response => {
                console.log(response.data)
                this.hike = response.data
            })
    }
}
</script>
<style lang="scss" scoped>

    @import '~@/app.scss';

    .row {
        display: flex;
        align-items: center;
    }

    .header-img {
        width:100%;
        clip-path: polygon(0px 30%, 100% 30%, 100% 83%, 0 83%);
        margin: -10% 0 -7% 0;
    }
    
    .hike-image {
        width: 100%;
        float: right;
    }

    h3 {
        padding: 5% 0 3% 0;
        width: 575px;
    }

    p {
        width: 553px;
    }

    .underlined-link {
        color: black;
    }

    
</style>
