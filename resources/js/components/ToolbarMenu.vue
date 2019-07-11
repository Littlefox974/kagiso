<template>
  <div>
    <nav role="navigation" class="hidden-md-up">
      <div id="menuToggle" >
        <input type="checkbox" />
        <span ></span>
        <span ></span>
        <span ></span>
        <ul id="menu" >
          <img class="logo hidden-md-up" src="img/logo_black.svg" alt="logo" />
          <a href="#">
            <li class="home">Home</li>
          </a>
          <a href="#">
            <li>Hike</li>
          </a>
          <p>
            123 rue bidon
            65000 Aulon
            contact@arbizon.fr
            +33 7 12 34 56 78
          </p>
        </ul>
      </div>
    </nav>
    <nav class="menu-lg hidden-sm-down">
      <a href="#" id="home">Home</a>
      <a href="#">Hike</a>
    </nav>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

<style lang="scss" scoped>
@import "~@/app.scss";
.menu-lg{
  position: absolute;
  right: 16%;
  color: white;
  top: 6%;
  
  a:focus{
    border-bottom: solid white;
  }
  #home{
    margin: 0 50px 0 0;
  }
}
@media (max-width: 767px) {
  .hidden-sm-down {
    display: none !important;
  }
}

@media (min-width: 768px) {
  .hidden-md-up {
    display: none !important;
  }
}

@media only screen and (max-width: 768px) {
  p {
    color: #9d9d9d;
    font-weight: 300;
    font-size: x-large;
    letter-spacing: 0.61px;
    white-space: pre-line;
    position: absolute;
    left: 50px;
    bottom: 50px;
  }

  .logo {
    position: absolute;
    top: 50px;
    left: 50px;
  }

  .home {
    color: $rouge_kagiso;
  }

  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  #menuToggle {
    display: block;
    position: absolute;
    top: 50px;
    right: 50px;
    z-index: 1;
    -webkit-user-select: none;
    user-select: none;

    input {
      display: block;
      width: 40px;
      height: 32px;
      position: absolute;
      top: -7px;
      left: -5px;

      cursor: pointer;

      opacity: 0; /* hide this */
      z-index: 2; /* and place it over the hamburger */

      -webkit-touch-callout: none;
    }

    span {
      display: block;
      width: 33px;
      height: 4px;
      margin-bottom: 5px;
      position: relative;

      background: white;
      border-radius: 3px;

      z-index: 1;

      transform-origin: 4px 0px;

      transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1),
        background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1), opacity 0.55s ease;

      &:first-child {
        transform-origin: 0% 0%;
      }

      &:nth-last-child(2) {
        transform-origin: 0% 100%;
      }
    }

    input:checked ~ span {
      opacity: 1;
      transform: rotate(45deg) translate(-2px, -1px);
      background: black;
    }

    input:checked ~ span:nth-last-child(3) {
      opacity: 0;
      transform: rotate(0deg) scale(0.2, 0.2);
    }

    input:checked ~ span:nth-last-child(2) {
      opacity: 1;
      transform: rotate(-45deg) translate(0, -1px);
    }

    input:checked ~ ul {
      transform: scale(1, 1);
      opacity: 1;
    }
  }

  #menu {
    position: absolute;
    width: 100vw;
    height: 100vh;
    margin: -100px 0 0 0;
    padding: 50px;
    padding-top: 125px;
    right: -50px;
    top: 50px;

    background: #ededed;
    list-style-type: none;
    -webkit-font-smoothing: antialiased;
    transform-origin: 0% 0%;
    transform: translate(100%, 0);
    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1);

    li {
      padding: 10px 0;
      font-size: xx-large;
    }
  }
}
</style>

