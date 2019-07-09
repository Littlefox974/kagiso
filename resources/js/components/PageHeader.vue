<template>
    <div class="page-header">
        <img class="background" src="img/desktop_hero_background.jpg" alt="background" height="885" width="1440"/>
        <img class="logo" src="img/logo_white.svg" alt="logo"/>
        <div class="title">
            <h2>Montains worthy of Tolkien's stories</h2><br />
            <h1>Discover<br />Arbison.</h1><br />
            <span class="underlined-link" id="headerLink">Interested? Let's go</span>
        </div>
        
    </div>
</template>

<script>
export default {
    mounted() {
        const link = document.getElementById('headerLink')
        const destination = document.getElementById('section1')

        link.addEventListener('click', function () {
            destination.scrollIntoView({behavior: "smooth"})
        })
    }
}
</script>


<style lang="scss" scoped>

    @import '~@/app.scss';

    span {
        display:inline-block;
    }

    .title {
        position: absolute;
        left: 23%;
        top: 200px;
    }
    
    .logo{
        position: absolute;
        left: 16%;
        top: 6%;
    }

    .background {
        height: 100%;
        z-index: -1;
    }

    h2 {
        color: #FFFFFF;
        font-size: 17px;
        font-weight: 300;
        line-height: 20px
    }

    h1 {
        font-size: 98px;
        font-weight: 900;
        line-height: 94px;
        margin: 18% 0 18% 0
    }

    .underlined-link {
        color: #FFFFFF;
    }
</style>

