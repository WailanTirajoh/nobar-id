<template>
  <button :disabled="loading">
    <slot />
    <span
      v-if="loading"
      style="border-top-color: transparent"
      class="
        h-3
        w-3
        border-2 border-blue-100 border-solid
        rounded-full
        animate-spin
        ml-2
        mt-1
      "
    ></span>
  </button>
</template>

<script>
export default {
  props: {
    loading: Boolean,
  },
};
</script>
