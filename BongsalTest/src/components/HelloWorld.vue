<template>
  <h1>Hello World</h1>
  <p>This is a simple Vue component.</p>
  <p>Welcome to the BongsalTest application!</p>
  <button @click="goToLogin">Go to Login</button>
</template>

<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()

function goToLogin() {
  router.push('/login')
}
</script>

<style>
/* your styles here */
</style>
