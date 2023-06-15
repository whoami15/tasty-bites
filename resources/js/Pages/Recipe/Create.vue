<script setup>
import MainLayout from "@/Layouts/MainLayout.vue"
import RecipeForm from "@/Pages/Recipe/Partials/RecipeForm.vue"
import { Head } from "@inertiajs/vue3"
</script>

<template>
  <MainLayout>
    <Head>
      <title>Create Recipe</title>

      <meta name="description" content="Create recipe" />
    </Head>

    <div class="px-4 py-12 lg:px-0">
      <div class="mx-auto max-w-screen-xl">
        <RecipeForm />
      </div>
    </div>
  </MainLayout>
</template>
