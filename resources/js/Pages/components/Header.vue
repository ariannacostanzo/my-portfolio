<script>
  
export default {
    name: 'Header',
  data() {
    return {
      scrolled: false
    };
    
  },
  methods: {
    handleScroll() {
      this.scrolled = window.scrollY > 70;
    }
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll)
  },
}
</script>

<template>
  <header :class="{ 'header-scrolled': scrolled }">
    <div class="container flex justify-between">
      <div class="logo color-green">
        &lt;/arianna &gt;
        <!-- fare qualche effetto che se ci passo sopra si colora a pezzo -->
      </div>
      <div>
        <ul class="flex gap-7 nav-links">
          <!-- fare effetti on hover  -->
          <li>About me</li>
          <li>Abilità</li>
          <li>Progetti</li>
        </ul>
      </div>
    </div>
  </header>
</template>

<style lang='scss' scoped>
  header {
    position: sticky;
    left: 0;
    top: 0;
    right: 0;
    background-color: transparent;
    transition: background-color 0.3s ease;
    z-index: 1000;
    width: 100%;
    font-weight: bold;
    text-transform: uppercase;
    
  }

  .container {
    align-items: center;
    padding: 15px;
    font-size: 25px;
    margin: 0 auto;
    
  }

  .header-scrolled {
    background-color: black;
  }



  .nav-links {
    font-size: 16px;
    

    li {
      transition: .3s ease;

      &:hover {
        color: #ec4899;
        cursor: pointer;
      }
    }
  }

 
</style>