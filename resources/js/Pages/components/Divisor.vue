<script>
  export default {
    name: 'Divisor',
    props: {
        sectionName: {
            type: String,
        },
    },
  }
</script>

<template>
    <div class="divisor">
        <span>{{ sectionName }}</span>
    </div>
</template>

<style lang='scss' scoped>
    .divisor {
        border-top: 1px solid #ec489a3b;
        border-radius: 2px;
        height: 1px;
        max-width: 80%;
        margin: 0 auto;
        margin-top: 8rem;
        box-shadow: 0 0 10px #ec489a50;
        position: relative;
    }

  .divisor::before {
      content: '';
      width: 50px;
      height: 50px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      border-width: 2px 1px 2px 1px;
      filter: blur(54px);
      border-radius: 50%;
  }

  span {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #ec489a;
    padding: 10px;
    border-radius: 10px;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 20px;
  }
</style>