<template>
  <div class="card">
  <GuestLayout title="Set new password">
    <form class="mt-4" action="#" method="POST">
      <input type="hidden" name="remember" value="true" />

      <!-- New Password -->
      <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input
          type="password"
          name="password"
          id="password"
          autocomplete="new-password"
          required
          class="form-control"
        />
      </div>

      <!-- Go back to login link -->
      <div class="d-flex justify-content-between mb-3">
        <div class="form-text">
          <router-link :to="{ name: 'login' }" class="link-primary">
            Go back to Login
          </router-link>
        </div>
      </div>

      <!-- Submit button -->
      <div>
        <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
          <i class="bi bi-lock-fill me-2"></i> <!-- Use Bootstrap Icons if available -->
          Submit
        </button>
      </div>
    </form>
  </GuestLayout>
</div>
  
</template>

<script>

</script>
