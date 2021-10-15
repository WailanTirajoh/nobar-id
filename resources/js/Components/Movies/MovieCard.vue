<template>
  <floating>
    <div class="cursor-pointer px-2 py-4">
      <div class="group relative">
        <img
          class="object-cover h-48 w-full rounded-xl shadow-md hover:shadow-2xl"
          :src="src"
          :alt="alt"
        />
        <div
          class="
            transform
            duration-500
            absolute
            bottom-0
            right-0
            bg-black bg-opacity-75
            px-3
            py-1
            text-center
            rounded-br-xl rounded-tl-xl
            text-xs
            opacity-0
            group-hover:opacity-100
          "
        >
          {{ length }}
        </div>
      </div>
      <div class="text-center text-white mt-2">
        {{ name }}
      </div>
    </div>
  </floating>
</template>

<script>
import Floating from "@/Components/Floating";
export default {
  props: {
    src: String,
    alt: String,
    name: String,
    length: String,
  },
  components: {
    Floating,
  },
};
</script>
