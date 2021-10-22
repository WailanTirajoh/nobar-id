<template>
  <layout>
    <div class="flex justify-between">
      <Link
        :href="route('back.user.create')"
        class="hover:no-underline hover:text-white font-medium"
      >
        <div class="bg-gray-700 p-2 shadow-md rounded-lg flex mb-2">
          <PlusIcon size="1.5x" />
          Create
        </div>
      </Link>
      <h5 class="text-xl font-bold flex justify-end mr-4 mb-2"></h5>
    </div>
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div
            class="
              shadow
              overflow-hidden
              border-b border-gray-700
              sm:rounded-lg
            "
          >
            <table class="min-w-full divide-y divide-gray-900">
              <thead class="bg-gray-800">
                <tr>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-200
                      uppercase
                      tracking-wider
                    "
                  >
                    Name
                  </th>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-200
                      uppercase
                      tracking-wider
                    "
                  >
                    Title
                  </th>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-left text-xs
                      font-medium
                      text-gray-200
                      uppercase
                      tracking-wider
                    "
                  >
                    Role
                  </th>
                  <th
                    scope="col"
                    class="
                      px-6
                      py-3
                      text-xs
                      font-medium
                      text-gray-200
                      uppercase
                      tracking-wider
                      text-right
                    "
                  >
                    Action
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-700 divide-y divide-gray-900">
                <tr v-for="user in users.data" :key="user.id">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img
                          class="h-10 w-10 rounded-full"
                          src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                          alt=""
                        />
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-100">
                          <Link
                            :href="route('back.user.show', { user: user.id })"
                          >
                            {{ user.name }}
                          </Link>
                        </div>
                        <div class="text-sm text-gray-200">
                          {{ user.email }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span
                      class="
                        px-2
                        inline-flex
                        text-xs
                        leading-5
                        font-semibold
                        rounded-full
                        bg-green-100
                        text-green-800
                      "
                    >
                      Active
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200">
                    <div class="" v-for="role in user.roles" :key="role.id">
                      {{ role.name }}
                    </div>
                  </td>
                  <td
                    class="
                      px-6
                      py-4
                      whitespace-nowrap
                      text-right text-sm
                      font-medium
                    "
                  >
                    <Link
                      :href="route('back.user.edit', { user: user.id })"
                      class=""
                      >Edit</Link
                    >
                  </td>
                </tr>

                <!-- More people... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import { PlusIcon } from "vue-feather-icons";
import Floating from "@/Components/Floating";
import Layout from "@/Shared/Admin/Layout";

export default {
  metaInfo: { title: "User Management" },
  components: {
    PlusIcon,
    Floating,
    Layout,
  },
  props: {
    filters: Object,
    users: Object,
  },
};
</script>
