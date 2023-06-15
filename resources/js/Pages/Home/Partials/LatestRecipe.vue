<script setup>
import RecipeItem from "@/Pages/Home/Partials/RecipeItem.vue"

defineProps({
  recipes: {
    type: Array,
    default: () => [],
  },
})
</script>

<template>
  <div class="py-8">
    <h1>Latest Recipes</h1>

    <div v-if="recipes.length" class="mt-4 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
      <RecipeItem v-for="recipe in recipes" :key="recipe.id" :url="route('', recipe)" :recipe="recipe" />
    </div>
  </div>
</template>
