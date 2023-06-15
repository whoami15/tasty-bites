<script setup>
import MainLayout from "@/Layouts/MainLayout.vue"
import SearchForm from "@/Pages/Home/Partials/SearchForm.vue"
import FeaturedRecipe from "@/Pages/Home/Partials/FeaturedRecipe.vue"
import LatestRecipe from "@/Pages/Home/Partials/LatestRecipe.vue"
import { Head } from "@inertiajs/vue3"

defineProps({
  recipes: {
    type: Array,
    default: () => [],
  },
})
</script>

<template>
  <MainLayout>
    <Head>
      <title>Home</title>

      <meta
        name="description"
        content="TastyBites is a vibrant recipe platform that brings together a diverse community of food lovers. Discover, save, and share an extensive collection of mouthwatering recipes, ranging from comforting classics to adventurous culinary creations." />
    </Head>

    <div class="px-4 py-12 lg:px-0">
      <div class="mx-auto max-w-screen-xl">
        <div class="grid gap-4 md:grid-cols-2">
          <SearchForm />

          <FeaturedRecipe />
        </div>

        <LatestRecipe :recipes="recipes" />
      </div>
    </div>
  </MainLayout>
</template>
