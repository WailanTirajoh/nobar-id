<template>
  <div class="flex align-middle justify-center w-full">
    <div
      class="
        bg-gray-800
        border-gray-800 border-2
        rounded-2xl
        p-3
        shadow-sm
        my-5
      "
    >
      <form @submit.prevent="login">
        <div class="grid grid-cols-12 gap-x-8 gap-y-3">
          <div class="col-span-12">
            <label for="email" class="block text-sm font-medium">Email</label>
            <input
              v-model="form.email"
              type="text"
              name="email"
              id="email"
              class="
                focus:ring-indigo-500
                focus:border-indigo-500
                block
                w-full
                shadow-sm
                sm:text-sm
                border-gray-300
                rounded-md
                text-black
                p-1
                px-2
              "
            />
          </div>
          <div class="col-span-12">
            <label for="password" class="block text-sm font-medium"
              >Password</label
            >
            <input
              v-model="form.password"
              type="password"
              name="password"
              id="password"
              class="
                focus:ring-indigo-500
                focus:border-indigo-500
                block
                w-full
                shadow-sm
                sm:text-sm
                border-gray-300
                rounded-md
                text-black
                p-1
              "
            />
          </div>
          <div class="col-span-12 flex justify-between">
            <Link
              :href="route('register')"
              class="p-2 rounded-xl px-4 font-semibold"
            >
              Register
            </Link>
            <form-button
              type="submit"
              class="p-2 rounded-xl bg-gray-900 font-semibold px-4 flex align-top"
              :loading="form.processing"
            >
              Login
            </form-button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Layout from "@/Shared/Layout";
import FormButton from "@/Components/Form/FormButton";

export default {
  metaInfo: { title: "Login" },
  components: {
    FormButton,
  },
  layout: Layout,
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
