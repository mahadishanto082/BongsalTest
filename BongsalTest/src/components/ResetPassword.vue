<template>
    <GuestLayout title="Set new password">
  
  
    <form class="space-y-6" action="#" method="POST">

        <input type="hidden" name="remember" value="true">
        <div>
            <label for="password" class="block text-sm/6 font-medium text-gray-900">New Password</label>
            <div class="mt-2">
                <input type="password" name="password" id="password" autocomplete="new-password" required=""
                       class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
            </div>
        </div>
        <div class="flex items-center justify-between">
        <div class="text-sm">
          <router-link :to="{name: 'login'}" class="font-medium text-indigo-600 hover:text-indigo-500">
            Go back to Login
          </router-link>
        </div>
      </div>

      <div>
        <button type="submit"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true"/>
            </span>
          Submit
        </button>
      </div>
      </form>
    
    </GuestLayout>
  </template>
  
  <script>
  import {LockClosedIcon} from '@heroicons/vue/20/solid'
  import GuestLayout from '../components/GuestLayout.vue';
  export default {
    components: {
      // LockClosedIcon,
      GuestLayout
    },
    name: "ResetPassword"
  
  }
  </script>
  
  <style>
  
  </style>