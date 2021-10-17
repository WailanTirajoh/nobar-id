<template>
  <div>
    <label v-if="label" class="block text-sm font-medium" :for="id">{{ label }}</label>
    <input
      :id="id"
      ref="input"
      v-bind="$attrs"
      class="
        block
        w-full
        shadow-sm
        sm:text-sm
        border-gray-300
        rounded-md
        text-black
        p-2
      "
      :type="type"
      :value="value"
      @input="$emit('input', $event.target.value)"
    />
    <div v-if="error" class="mt-2 text-xs flex justify-end">{{ error }}</div>
  </div>
</template>

<script>
export default {
  inheritAttrs: false,
  props: {
    id: {
      type: String,
      default() {
        return `text-input-${this._uid}`;
      },
    },
    type: {
      type: String,
      default: "text",
    },
    value: String,
    label: String,
    error: String,
  },
  methods: {
    focus() {
      this.$refs.input.focus();
    },
    select() {
      this.$refs.input.select();
    },
    setSelectionRange(start, end) {
      this.$refs.input.setSelectionRange(start, end);
    },
  },
};
</script>
