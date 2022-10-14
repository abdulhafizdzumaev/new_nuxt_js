<!-- Please remove this file from your project -->
<template>
  <div class="container mt-5">
    <form action="" @submit="submit" method="post">
      <label for="">Имя</label>
      <input
        type="text"
        v-model="form.name"
        name="name"
        placeholder="Имя"
        required
        class="form-control"
      />
      <label for="description">Описание</label>
      <input
        type="text"
        v-model="form.description"
        name="description"
        placeholder="Описание"
        required
        class="form-control"
      />
      <label for="price">Цена</label>
      <input
        type="number"
        v-model="form.price"
        name="price"
        placeholder="Цена"
        required
        class="form-control"
      />
      <label for="image">Изображения</label>
      <input
        type="file"
        @change="onFileChange($event)"
        name="image"
        placeholder="Изображения"
        required
        class="form-control"
      />
      <input
        @submit.prevent="someAction"
        type="submit"
        class="btn mt-2 btn-primary"
        placeholder="Оправить"
        @click.prevent="submit"
      />
    </form>
  </div>
</template>

<script>
export default {
  //  middleware: ['guest'],
  data() {
    return {
      form: {
        name: null,
        description: null,
        price: null,
        image: null,
      },
    };
  },
  methods: {
    async submit() {
      let formData = new FormData();
      formData.append("name", this.form.name);
      formData.append("description", this.form.description);
      formData.append("price", this.form.price);
      formData.append("image", this.form.image);

      await this.$axios
        .post("api/users", formData, {
          header: { "Content-type": "multipart/form-data" },
        })
        .then((res) => {
          console.log(res.data);
        })
        .catch((err) => {
          console.log(err);
        });
      console.log(this.form);
    },
    someAction(e) {
      e.preventDefault();
    },

    onFileChange(even) {
      this.form.image = even.target.files[0];
      console.log(even.target.files[0]);
    },
  },
};
</script>
