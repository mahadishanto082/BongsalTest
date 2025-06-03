

<template>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Changed from offset-3 to col-md-8 -->
          <div class="card shadow">
            <div class="card-header  bg-primary text-white text-center" >Basic login</div>
            <div class="card-body">
              <form @submit.prevent="register">
                <div class="row">
                  <div class="col-md-6 mb-3 text-start">
                    <label for="inputName1"  class="form-label ">First Name</label>
                    <input type="name" class="form-control" v-model="first_name" id="name1" placeholder="First Name">
                  </div>
                  <div class="col-md-6 mb-3 text-start">
                    <label for="inputName2" class="form-label " >Last Name</label>
                    <input type="name" class="form-control" v-model="last_name" id="name2" placeholder="Last Name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3 text-start">
                    <label for="inputEmail4" class="form-label ">Email</label>
                    <input type="email" class="form-control" v-model="email" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="col-md-6 mb-3 text-start">
                    <label for="inputPassword4" class="form-label " >Password</label>
                    <input type="password" class="form-control" v-model="password" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" v-model="Address" id="inputAddress" placeholder="1234 Main St">
                </div>
                
                <div class="row ">
                  <div class="col-md-3 mb-3">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" v-model="City" id="inputCity">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Sign in</button>
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
      Address: '',
      City: '',
      succesmsg:" Registration Successful! Please Login to Continue"
    };
  },
  methods: {
    register() {
      console.log('Registration data:', {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        password: this.password,
        Address: this.Address,
        City: this.City,
        State: this.State,
        Zip: this.Zip
      });

      axios.post('auth/register', {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        password: this.password,
        Address: this.Address,
        City: this.City,
        State: this.State,
        Zip: this.Zip
      })
      .then(response => {
        console.log('Registration successful:', response.data);
        alert(this.successMsg);
        // Optionally reset form fields
        this.resetForm();
      })
      .catch(error => {
        console.error('Registration error:', error);
        alert('Registration failed. Please try again.');
      });
    },
  }
}


</script>
  
  