<template>
    <div>
        <h1>Ajouter Centre</h1>
        <form @submit.prevent="submitForm">
            <label for="name">nom:</label>
            <input type="text" id="name" v-model="centre.nom">
            <br>
            <label for="name">adresse:</label>
            <input type="text" id="adresse" v-model="centre.adresse">
            <br>
            <label for="name">telephone:</label>
            <input type="text" id="telephone" v-model="centre.telephone">
            <br>
            <button type="submit">Ajouter</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
import router from "../../router/index.js"; // Import axios
export default {
    data() {
        return {
            centre: {},
        };
    },
    methods: {
        async submitForm() {
            console.log("Submitted data:", this.centre);  // Log to console

            try {
                const response = await axios.post('http://127.0.0.1:8000/api/centres', this.centre);
                console.log("API response:", response.data);
                // Handle successful response (optional)

            } catch (error) {
                console.error("Error:", error);
                // Handle errors (optional)
            }

        },
    },
};
</script>

<style scoped>
/* Add any styling for your form */
</style>
