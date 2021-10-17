<template>
  <div class="flex align-middle justify-center w-full">
    <div class="bg-gray-800 border-gray-800 border-2 rounded-2xl p-3 shadow-sm my-5">
      <div class="grid grid-cols-12 gap-x-8 gap-y-3">
        <div class="col-span-12">
          <label for="username" class="block text-sm font-medium"
            >Username</label
          >
          <input
            type="text"
            name="username"
            id="username"
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
          <label for="email" class="block text-sm font-medium"
            >Email</label
          >
          <input
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
        <div class="col-span-12 flex justify-end">
          <button class="p-2 rounded-xl bg-gray-900 px-4 font-semibold">
            Create
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Layout from "@/Shared/Layout";
export default {
  metaInfo: { title: "Register" },
  layout: Layout,
};
</script>
