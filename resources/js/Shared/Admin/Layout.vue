<template>
  <layout>
    <div class="grid grid-cols-4 gap-4">
      <div class="col-span-4 sm:col-span-1">
        <sidebar></sidebar>
      </div>
      <div class="col-span-4 sm:col-span-3">
        <slot />
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "@/Shared/Layout";
import Sidebar from "@/Shared/Admin/Sidebar";

export default {
  components: {
    Layout,
    Sidebar,
  },
};
</script>
