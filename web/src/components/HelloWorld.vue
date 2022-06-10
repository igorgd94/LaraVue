<template>
  <div class="hello">
    <h1>Contact List</h1>
    <div class="flex-container">
      <div class="flex-item" v-for="contact in contacts" :key="contact.id">
        {{contact.name}}
      </div>
    </div>
    <button>Previous</button>
    <button>Next</button>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
  data () {
    return {
      contacts: null
    }
  },
  created () {
    const axios = require('axios')
    axios.get('http://localhost:9000/api/persons').then((response) => {
      this.contacts = response.data.data
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.flex-container {
  display: flex;
  margin: 10px;
  flex-wrap: wrap;
}

.flex-item{
  width: 16vw;
  display: block;
  margin: 10px 10px;
  padding: 5px;
  min-height: 40vh;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
</style>
