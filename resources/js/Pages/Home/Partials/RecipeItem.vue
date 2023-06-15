<script setup>
defineProps({
  recipe: {
    type: Object,
    default: () => ({}),
  },
  url: {
    type: String,
    default: "",
  },
})
</script>

<template>
  <div class="w-full bg-white shadow-sm">
    <div class="p-4">
      <p class="font-medium">{{ recipe.title }}</p>

      <p class="mt-4">
        {{ recipe.body }}
      </p>
    </div>
  </div>
</template>
