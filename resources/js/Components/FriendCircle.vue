<template>
  <div class="px-1">
    <img
      :src="avatar"
      class="object-cover rounded-full h-12 w-h-12"
      :class="{ 'border-green-600 border-4': isOnline }"
    />
  </div>
</template>

<script>
export default {
  props: {
    avatar: String,
    isOnline: Boolean,
  },
};
</script>
