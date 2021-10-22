<template>
  <div class="container">
    <div class="grid grid-cols-12 gap-4 text-white">
      <div class="col-span-4 bg-gray-800 rounded-lg">
        <div class="text-xl font-medium text-center">{{ user.name }}</div>
        <div class="flex justify-end">
          <Link
            :href="route('logout')"
            method="post"
            as="button"
            class="
              flex
              items-center
              p-2
              transition
              duration-300
              ease-in-out
              hover:bg-gray-900
              rounded-md
              m-2
            "
          >
            <log-out-icon class="w-4 h-4 mr-2" />
            Logout
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Layout from "@/Shared/Layout";
import { LogOutIcon } from "vue-feather-icons";
export default {
  metaInfo: { title: "Profile" },
  layout: Layout,
  components: {
    LogOutIcon,
  },
  props: {
    user: Object,
  },
};
</script>
