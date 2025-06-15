<template>
  <GuestLayout title="Sign in to your account">


  <form class="space-y-6" action="#" method="POST">
    <input type="hidden" name="remember" value="true">
    <div>
      <label for="email" class="block text-sm/6 font-medium text-white flex items-center justify-between">Email address</label>
      <div class="mt-2">
        <input type="email" name="email" id="email" autocomplete="email" required=""
               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
      </div>

    </div>
    <div class="flex items-center justify-between">
        <div class="text-sm">
          <router-link to='/ResetPassword' class="font-medium text-indigo-600 hover:text-indigo-500"> Remember your
            password?
          </router-link>
        </div>
      </div>
    </form>
  
  </GuestLayout>
</template>

<script>

import { LockClosedIcon } from '@heroicons/vue/20/solid';
import GuestLayout from './GuestLayout.vue';
export default {
  components: {
    // LockClosedIcon,
    GuestLayout
  }

}
</script>

<style>

</style>