<script setup>
import { useForm } from "@inertiajs/vue3"

const form = useForm({
  title: "",
  body: "",
})
</script>

<template>
  <div class="w-full bg-white shadow-sm">
    <form class="p-6">
      <div>
        <label for="title">Title</label>

        <input
          id="title"
          v-model="form.title"
          type="text"
          name="title"
          class="w-full rounded-md border-gray-300 shadow-sm"
        />
      </div>

      <div class="mt-4">
        <label for="body">Body</label>

        <textarea
          id="body"
          v-model="form.body"
          name="body"
          cols="30"
          rows="5"
          class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        ></textarea>
      </div>

      <div class="mt-4">
        <button type="submit" class="mt-2 rounded-md bg-gray-700 px-4 py-2 font-medium text-white">Post</button>
      </div>
    </form>
  </div>
</template>
