<template>
    <div>
        <img class="map" src="img/desktop_section1_background.svg" alt="background"/>
        <div class="content" >
            <h2>The Adour of Payolle is born on its northern slope.</h2>
            <h3>The most beautiful view of the Pyrénées.</h3>
            <p>
                The Arbizon (2,831 m) is the highest point of the Arbizon massif in the Hautes-Pyrénées. It is located east of the Néouvielle massif, between the Aure valley to the east, and the Campan valley to the north. <br /><br />
                From a geological point of view, the peak of the Arbizon lies at the contact between the granitic massif of Neouvielle (pluton) and the various shales and marls of the Carboniferous.<br /><br />
                Thus, it is located in the halo of metamorphism caused by the rise of magma within the continental lithosphere, during the various movements of orogenesis that the region has known. Its geological wealth is known to the greatest number: one can find there particular minerals, resulting from the partial recrystallization of the schistose country, such as garnets, axinite, vesuvianite, etc.
            </p>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    @import '~@/app.scss';
    
    .map {
        float: right;
    }

    .content{
       position: absolute;
       padding-left: 8%;
       padding-top: 9%;
    }

    h3 {
        padding: 5% 0 10% 0;
        width: 575px;
    }

    p {
        width: 553px;
    }

    @media only screen and (max-width: 768px) {
        .map {
            float: unset;
            width: 100%;
            margin-top: -60%;
            clip-path: margin-box;
        }

        .content{
            position: unset;
            padding-left: 8%;
            padding-top: 9%;
        }

        h3 {
            font-size: 36px;
            font-weight: 900;
            letter-spacing: 0.91px;
            line-height: 43px;
            width: 90%;
        }

        p {
            width: 90%;
        }
    }
</style>

