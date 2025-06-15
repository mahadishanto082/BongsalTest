<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-center text-white">Basic Registration</div>
                    <div class="card-body">
                        <form @submit.prevent="register">
                            <div class="row">
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" v-model="first_name" placeholder="First Name" />
                                </div>
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" v-model="last_name" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" v-model="email" placeholder="Email" />
                                </div>
                                <div class="col-md-6 mb-3 text-start">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" v-model="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" v-model="address" placeholder="1234 Main St" />
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" v-model="city" />
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">State</label>
                                    <select class="form-select" v-model="state">
                                        <option disabled selected>Choose...</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Zip</label>
                                    <input type="text" class="form-control" v-model="zip" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'Registration',
    data() {
        return {
            first_name: '',
            last_name: '',
            email: '',
            password: '',
            address: '',
            city: '',
            state: '',
            zip: '',
        };
    },
    methods: {
        async register() {
            try {
                const response = await axios.post('/register', {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    password: this.password,
                    address: this.address,
                    city: this.city,
                    state: this.state,
                    zip: this.zip,
                });
                console.log('Registration successful:', response.data);
                alert('Registration successful!');
                // Optional: Redirect to login page
                 this.$router.push('/Login');
            } catch (error) {
                console.error('Registration failed:', error.response.data);
                alert(error.response.data.message || 'Registration failed');
            }
        },
    },
};
</script>
