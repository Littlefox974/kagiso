<template>
    <div>
        <last-hike></last-hike>
        <div class="row-div">
           <div class="offset-md-1 col-md-10">
                <h2 class="col-sm-10">The most beautiful view of the Pyrénées</h2>
                <h3 class="col-sm-10">Discovers all hikes of Arbizon</h3>
                <div class="row-div scrolling-wrapper">
                    <hike-card 
                        class="scroll-card"
                        v-for="hike in hikes"
                        v-bind:key="hike.id"
                        v-bind:id="hike.id"
                        v-bind:title="hike.title"
                        v-bind:description="hike.description"
                        v-bind:level="hike.level"
                        v-bind:imageLink="hike.imageLink"
                    ></hike-card>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
  data () {
    return {
      hikes: []
    }
  },
   mounted() {
        axios.get('http://localhost:8000/api/hike')
            .then(response => {
                this.hikes = response.data
            })
    }
}
</script>
<style lang="scss" scoped>
    @import '~@/app.scss';


    @media only screen and (min-width: 600px) {
        .row-div {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
    }

    h2 {
        padding: 7% 0 3% 0;
    }

    @media only screen and (max-width: 768px) {
        h3 {
            font-size: 36px;
            font-weight: 900;
            letter-spacing: 0.91px;
            line-height: 43px;
        }

        .scrolling-wrapper {
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
            .scroll-card {
                display: inline-block;
            }
        }
    }
</style>

