<template>
  <div>
    <Navbar></Navbar>
    <div class="container py-20">
      <slot />
    </div>
  </div>
</template>

<script>
import Navbar from "@/Shared/Navbar";
export default {
  components: {
    Navbar,
  },
};
</script>
