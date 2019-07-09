<template>
    <div>
        <last-hike></last-hike>
        <div class="row">
           <div class="offset-md-1 col-md-10">
                <h2>The most beautiful view of the Pyrénées</h2>
                <h3>Discovers all hikes of Arbizon</h3>
                <div class="row">
                    <hike-card 
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

    h2 {
        padding: 7% 0 3% 0;
    }

</style>

