<template>
  <div>
    <h5 class="text-xl mb-2">Create new user</h5>
    <div class="bg-gray-700 p-3 rounded-lg">
      <form @submit.prevent="store" class="grid grid-cols-4 gap-y-1 gap-x-4">
        <div class="col-span-4">
          <div>
            <div class="mt-1 flex flex-col items-center justify-center">
              <span
                class="h-20 w-20 rounded-full overflow-hidden bg-gray-100 mb-2"
              >
                <div>
                  <img
                    class="h-full w-full text-gray-300"
                    v-if="url"
                    :src="url"
                  />
                  <svg
                    v-else
                    class="h-full w-full text-gray-300"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"
                    ></path>
                  </svg>
                </div>
              </span>
              <input
                type="file"
                @change="onFileChange"
                @input="form.avatar = $event.target.files[0]"
                class="
                  ml-5
                  bg-gray-900
                  py-2
                  px-3
                  border border-gray-300
                  rounded-md
                  shadow-sm
                  text-sm
                  leading-4
                  font-medium
                  text-gray-300
                  hover:bg-gray-700
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-indigo-500
                "
              />
            </div>
          </div>
        </div>
        <div class="col-span-4">
          <f-input
            label="Full Name"
            placeholder="Input Full Name"
            v-model="form.name"
            :error="form.errors.name"
            type="text"
            class="mb-2"
            autocomplete="off"
          ></f-input>
        </div>
        <div class="col-span-4">
          <f-input
            label="Email"
            placeholder="Input Email"
            v-model="form.email"
            :error="form.errors.email"
            type="email"
            class="mb-2"
            autocomplete="off"
          ></f-input>
        </div>
        <div class="col-span-2">
          <f-input
            label="Password"
            placeholder="********"
            v-model="form.password"
            :error="form.errors.password"
            type="password"
            autocomplete="new-password"
          ></f-input>
        </div>
        <div class="col-span-2">
          <f-input
            label="Password Confirmation"
            placeholder="********"
            v-model="form.password_confirmation"
            :error="form.errors.password_confirmation"
            type="password"
            class="mb-2"
            autocomplete="off"
          ></f-input>
        </div>
        <div class="col-span-4 mt-2">
          <f-button
            type="submit"
            class="p-2 rounded-lg bg-gray-900 font-semibold px-4 flex align-top"
            :loading="form.processing"
          >
            Submit
          </f-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Layout from "@/Shared/Admin/Layout";
import FInput from "@/Components/Form/FInput";
import FButton from "@/Components/Form/FButton";

export default {
  metaInfo: { title: "Create User" },
  layout: Layout,
  components: {
    FInput,
    FButton,
  },
  data() {
    return {
      form: this.$inertia.form({
        name: null,
        email: null,
        password: null,
        password_confirmation: null,
        avatar: null,
        roles: [],
      }),
      url: null,
    };
  },
  methods: {
    store() {
      this.form.post(this.route("back.user.store"));
    },
    onFileChange(e) {
      const file = e.target.files[0];
      this.url = URL.createObjectURL(file);
    },
  },
};
</script>
