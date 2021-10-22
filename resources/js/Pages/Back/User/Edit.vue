<template>
  <div>
    <h1>Edit {{ user.name }}</h1>
  </div>
</template>

<script>
import Layout from "@/Shared/Admin/Layout";
export default {
  metaInfo: { title: "Edit User" },
  layout: Layout,
  props: {
    user: Object,
  },
};
</script>
