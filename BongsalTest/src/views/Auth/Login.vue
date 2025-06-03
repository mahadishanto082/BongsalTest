<template>
    <div class="container">
        <div class="row">
            <div class=" mt-2 offset-3">
                <div class="card">
                    <div class="card-header" align="left">Basic login</div>
                    <div class="card-body">
                        <form @submit="submit">
                            <div class="mb-3" align="left">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label " 
                                    >Email address</label
                                >
                                <input
                                    type="email"
                                    v-model="Email"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                />
                                <div id="emailHelp" class="form-text">
                                    We'll never share your email with anyone
                                    else.
                                </div>
                            </div>
                            <div class="mb-3" align="left">
                                <label
                                    for="exampleInputPassword1"
                                    class="form-label" 
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    v-model="password"
                                    class="form-control"
                                    id="exampleInputPassword1"
                                />
                            </div>
                            <div class="mt-3" align="left">
                      <router-link to="/ResetPassword" class="btn btn-link">
                        Forgot Password?
                      </router-link>
                    </div>
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </form>
                    </div>
                    
                </div>
                <div class="mt-3" align="left">
                      <router-link to="/Registration" class="btn btn-link">
                        New User? Register Here
                      </router-link>
                    </div>
            </div>
        </div>
    </div>
</template>

<script setup>


</script>
