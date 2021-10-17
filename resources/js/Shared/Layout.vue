<template>
  <div class="text-white">
    <the-navbar></the-navbar>
    <div class="container py-20">
      <slot />
    </div>
    <the-footer></the-footer>
    <the-botbar></the-botbar>
  </div>
</template>

<script>
import TheNavbar from "@/Shared/Navbar";
import TheFooter from "@/Shared/Footer";
import TheBotbar from "@/Shared/Botbar";
export default {
  components: {
    TheNavbar,
    TheFooter,
    TheBotbar
  },
};
</script>
