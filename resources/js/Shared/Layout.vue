<template>
  <div class="text-white relative">
    <the-navbar></the-navbar>
    <!-- <chat /> -->
    <div class="container py-20">
      <slot />
    </div>
    <!-- <the-footer></the-footer> -->
    <the-botbar></the-botbar>
  </div>
</template>

<script>
import TheNavbar from "@/Shared/Navbar";
import TheFooter from "@/Shared/Footer";
import TheBotbar from "@/Shared/Botbar";
import Chat from "@/Shared/Chat";
export default {
  components: {
    TheNavbar,
    TheFooter,
    TheBotbar,
    Chat,
  },
};
</script>
