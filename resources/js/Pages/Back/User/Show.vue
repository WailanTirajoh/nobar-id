<template>
  <div>
    {{ user.name }}
  </div>
</template>

<script>
import Layout from "@/Shared/Admin/Layout";
export default {
  metaInfo: { title: "User Detail" },
  layout: Layout,
  props: {
    user: Object,
  },
};
</script>
