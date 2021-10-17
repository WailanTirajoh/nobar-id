<template>
  <div class="grid grid-cols-12">
    <div class="sm:col-span-4"></div>
    <div
      class="
        col-span-12
        sm:col-span-4
        bg-gray-800
        border-gray-800 border-2
        rounded-2xl
        p-3
        shadow-sm
        my-5
      "
    >
      <form @submit.prevent="login">
        <div class="grid grid-cols-12">
          <div class="col-span-full">
            <f-input
              v-model="form.email"
              :error="form.errors.email"
              type="email"
              name="email"
              id="email"
              label="Email"
              placeholder="example@app.com"
            />
          </div>
          <div class="col-span-full mt-2">
            <f-input
              v-model="form.password"
              :error="form.errors.password"
              type="password"
              name="password"
              id="password"
              label="Password"
              placeholder="**********"
            />
          </div>
          <div class="col-span-full mt-2 flex justify-between">
            <Link
              :href="route('register')"
              class="p-2 rounded-xl px-4 font-semibold"
            >
              Register
            </Link>
            <f-button
              type="submit"
              class="
                p-2
                rounded-xl
                bg-gray-900
                font-semibold
                px-4
                flex
                align-top
              "
              :loading="form.processing"
            >
              Login
            </f-button>
          </div>
        </div>
      </form>
    </div>
    <div class="sm:col-span-4"></div>
  </div>
</template>

<script>
import Layout from "@/Shared/Layout";
import FButton from "@/Components/Form/FButton";
import FInput from "@/Components/Form/FInput";

export default {
  metaInfo: { title: "Login" },
  components: {
    FButton,
    FInput,
  },
  layout: Layout,
  props: {
    errors: Object,
  },
  data() {
    return {
      form: this.$inertia.form({
        email: null,
        password: null,
      }),
    };
  },
  methods: {
    login() {
      this.form.post(this.route("login.store"));
    },
  },
};
</script>
