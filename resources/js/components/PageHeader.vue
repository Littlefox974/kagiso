<template>
    <div class="hero">
        <toolbar-menu></toolbar-menu>
        <!-- <img class="background" src="img/desktop_hero_background.jpg" alt="background"/> -->
        <img class="logo" src="img/logo_white.svg" alt="logo"/>
        <div class="title">
            <h2>Montains worthy of Tolkien's stories</h2>
            <h1>Discover<br />Arbison.</h1>
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

    .hero {
        background-image: url('/img/desktop_hero_background.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
    }

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
        font-size: medium;
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

    
    @media only screen and (max-width: 768px) {
        .logo {
            position: absolute;
            top: 50px;
            left: 50px;
        }
        h1 {
            font-size: 58px;
            font-weight: 900;
            letter-spacing: 0.25px;
            line-height: 54px;
        }

        h2 {
            font-size: medium;
            font-weight: 300;
            letter-spacing: 0.43px;
            line-height: 20px;
        }

        .title {
            position: absolute;
            left: 10%;
            top: 40%;
        }
    }

</style>

