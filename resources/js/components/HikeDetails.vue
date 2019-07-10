<template>
    <div class="page-header">
        <img class="background" src="img/desktop_hero_background.jpg" alt="background" height="885" width="1440"/>
        <img class="logo" src="img/logo_white.svg" alt="logo"/>
        <div class="title">
            <h2>{{hike.title}}</h2><br />
            <h1>{{hike.description}}</h1><br />
            <span class="underlined-link" id="headerLink">Interested? Let's go</span>
        </div>
        
    </div>
</template>

<script>
export default {
    props: ['hikeId'],
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
        axios.get('http://localhost:8000/api/hike/' + (this.hikeId || 1))
            .then(response => {
                const hike = response.data[Object.keys(response.data)[0]]
                if(!hike) window.location = '/'
                this.hike = hike
            })
    }
}
</script>

