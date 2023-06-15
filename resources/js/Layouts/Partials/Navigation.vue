<script setup>
import NavLink from "@/Components/NavLink.vue"
import { usePage } from "@inertiajs/vue3"

const user = usePage().props.auth.user

const items = [
  {
    label: "Browse recipes",
    url: route("home"),
    active: route().current("home"),
    show: true,
  },
  {
    label: "Categories",
    url: route("home"),
    active: route().current("home"),
    show: true,
  },
  {
    label: "Popular recipes",
    url: route("home"),
    active: route().current("home"),
    show: true,
  },
  {
    label: "Courses",
    url: route("home"),
    active: route().current("home"),
    show: true,
  },
  {
    label: "Your recipes",
    url: route("dashboard"),
    active: route().current("dashboard"),
    show: !!user,
  },
  {
    label: "Post a recipe",
    url: route("recipes.create"),
    active: route().current("recipes.create"),
    show: true,
  },
]
</script>

<template>
  <template v-for="item in items" :key="item.url">
    <NavLink v-if="item.show" :href="item.url" :active="item.active">{{ item.label }}</NavLink>
  </template>
</template>
