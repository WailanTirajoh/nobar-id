<template>
  <div class="text-white">
    <the-navbar></the-navbar>
    <div class="container py-20">
      <slot />
    </div>
    <the-footer></the-footer>
  </div>
</template>

<script>
import TheNavbar from "@/Shared/Navbar";
import TheFooter from "@/Shared/Footer";
export default {
  components: {
    TheNavbar,
    TheFooter
  },
};
</script>
