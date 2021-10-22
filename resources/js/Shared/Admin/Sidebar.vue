<template>
  <div class="bg-gray-700 p-2 rounded-lg text-gray-200">
    <div class="">
      <h5 class="text-lg bg-gray-900 text-center rounded">Admin Management</h5>
    </div>
    <hr class="my-2" />
    <Link
      v-if="hasAnyPermission(['movie-access'])"
      :href="route('back.movie.index')"
      class="hover:no-underline hover:text-white"
    >
      <div
        class="bg-gray-800 p-1 px-2 rounded mb-1 text-sm flex"
        :class="isUrl('back/movie') ? 'bg-gray-900 text-white' : ''"
      >
        <FilmIcon size="1x" class="my-auto" />
        <div class="ml-2">Movie</div>
      </div>
    </Link>
    <hr class="my-2" />
    <Link
      v-if="hasAnyPermission(['user-access'])"
      :href="route('back.user.index')"
      class="hover:no-underline hover:text-white"
    >
      <div
        class="bg-gray-800 p-1 px-2 rounded mb-1 text-sm flex"
        :class="isUrl('back/user') ? 'bg-gray-900 text-white' : ''"
      >
        <UsersIcon size="1x" class="my-auto" />
        <div class="ml-2">User</div>
      </div>
    </Link>
    <Link
      v-if="hasAnyPermission(['role-access'])"
      :href="route('back.role.index')"
      class="hover:no-underline hover:text-white"
    >
      <div
        class="bg-gray-800 p-1 px-2 rounded mb-1 text-sm flex"
        :class="isUrl('back/role') ? 'bg-gray-900 text-white' : ''"
      >
        <LockIcon size="1x" class="my-auto" />
        <div class="ml-2">Role</div>
      </div>
    </Link>
    <Link
      v-if="hasAnyPermission(['permission-access'])"
      :href="route('back.permission.index')"
      class="hover:no-underline hover:text-white"
    >
      <div
        class="bg-gray-800 p-1 px-2 rounded mb-1 text-sm flex"
        :class="isUrl('back/permission') ? 'bg-gray-900 text-white' : ''"
      >
        <KeyIcon size="1x" class="my-auto" />
        <div class="ml-2">Permission</div>
      </div>
    </Link>
  </div>
</template>

<script>
import { UsersIcon, FilmIcon, KeyIcon, LockIcon } from "vue-feather-icons";

export default {
  components: {
    UsersIcon,
    FilmIcon,
    KeyIcon,
    LockIcon,
  },
};
</script>
