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
      <form @submit.prevent="register">
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
              v-model="form.name"
              :error="form.errors.name"
              type="text"
              name="name"
              id="name"
              label="name"
              placeholder="********"
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
              placeholder="********"
            />
          </div>
          <div class="col-span-full mt-2">
            <f-input
              v-model="form.password_confirmation"
              :error="form.errors.password_confirmation"
              type="password"
              name="password_confirmation"
              id="password_confirmation"
              label="Password Confirmation"
              placeholder="********"
            />
          </div>
          <div class="col-span-full mt-2 flex justify-end">
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
              Register
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
  metaInfo: { title: "Register" },
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
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
      }),
    };
  },
  methods: {
    register() {
      this.form.post(this.route("register"));
    },
  },
};
</script>
