<template>
  <div>
    <div v-for="(i,index) in array" :key="index">
        {{i.name}} <br>
        {{i.description}} <br>
        {{i.price}} <br>
        {{i.image}} 

    </div>
  </div>
</template>
<script>
import axios from 'axios'
export default {
  data() {
    return {
      array: [],
    };
  },

  methods: {
    async h() {
      await axios
        .get("http://127.0.0.1:8000/form")
        .then((res) => {
          this.array = res;
          console.log(res.data);
        })
        .catch((err) => {
          console.log(err);
        });
   
    },
  },
};
</script>
