vue.<template>
  <div>
    {{ test }}
  </div>
</template>

<script>
export default {
  name: "test",
  data() {
    return {
      test: [],
    };
  },
  created() {
    axios.get("http://localhost:8000/api/ecommerce/").then((response) => {
      this.test = response.data;
    });
  },
};
</script>
<style>
</style>
