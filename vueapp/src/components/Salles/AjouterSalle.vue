<template>
    <div>
        <h1>Add New Item</h1>
        <form @submit.prevent="submitForm">
            <label for="name">nom:</label>
            <input type="text" id="name" v-model="salle.nom">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            salle: {},
        };
    },
    methods: {
        submitForm() {
            console.log("Submitted data:", this.salle);  // Log to console
            const { nom } = this.salle;
            console.log(nom);
        },
    },
};
</script>

<style scoped>
/* Add any styling for your form */
</style>
