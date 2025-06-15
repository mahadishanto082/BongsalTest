<template>
    <div class="container">
        <div class="row">
            <div class="offset-3 mt-2">
                <div class="card">
                    <div class="card-header text-left">Basic login</div>
                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <div class="mb-3 text-left">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" v-model="email" class="form-control" id="email" aria-describedby="emailHelp" required />
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>

                            <div class="mb-3 text-left">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" v-model="password" class="form-control" id="password" required />
                            </div>

                            <div class="mt-3 text-left">
                                <router-link to="/ResetPassword" class="btn btn-link"> Forgot Password? </router-link>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>

                <div class="mt-3 text-left">
                    <router-link to="/Registration" class="btn btn-link"> New User? Register Here </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();
const email = ref('');
const password = ref('');

const submit = async () => {
    try {
        axios.defaults.withCredentials = true;
        axios.defaults.baseURL = 'http://127.0.0.1:8000';

        // Send login request
        const response = await axios.post('/login', {
            email: email.value,
            password: password.value,
        });

        console.log('Login success:', response.data);

        alert('Registration successful!');
        // Optional: Redirect to login page
        this.$router.push('/Cart/Dashboard');
    } catch (error) {
        console.error('Login failed:', error.response?.data || error.message);
        alert('Login failed. Please check your credentials.');
    }
};
</script>
