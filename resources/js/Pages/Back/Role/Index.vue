<template>
  <div>
    <h5 class="text-xl font-bold flex justify-end mr-4 mb-2">
      Role Management
    </h5>
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div
            class="
              shadow
              overflow-hidden
              border-b border-gray-900
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
                    Roles
                  </th>
                  <th scope="col" class="relative px-6 py-3 text-right">
                    Edit
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-700 divide-y divide-gray-900">
                <tr v-for="role in roles.data" :key="role.id">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div
                      class="
                        flex
                        items-center
                        text-sm
                        font-medium
                        text-gray-100
                      "
                    >
                      {{ role.name }}
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div
                      class="
                        flex
                        items-center
                        text-sm
                        font-medium
                        text-gray-100
                      "
                    >
                      <ul class="list-disc">
                        <li
                          v-for="permission in role.permissions"
                          :key="permission.id"
                        >
                          {{ permission.name }}
                        </li>
                        <li v-if="role.permissions.length == 0">
                          No Permission
                        </li>
                      </ul>
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
                    <a href="#" class="text-indigo-600 hover:text-indigo-900"
                      >Edit</a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Layout from "@/Shared/Admin/Layout";
export default {
  metaInfo: { title: "Movie Management" },
  layout: Layout,
  props: {
    roles: Object,
  },
};
</script>
