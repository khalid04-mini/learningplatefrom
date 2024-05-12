<template>
    <div class="d-flex vh-100">
        <div class="flex-shrink-0 p-3 bg-primary" style="width: 280px;">
            <router-link to="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-5 fw-semibold">Learning plateform</span>
            </router-link>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Home
                    </button>
                    <div class="collapse show" id="home-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><router-link to="/" class="link-dark rounded p-3">Dashboard</router-link></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Centres
                    </button>
                    <div class="collapse" id="dashboard-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><router-link to="/centres" class="link-dark rounded p-3">Listes</router-link></li>
                            <li><router-link to="/centres/ajouter" class="link-dark rounded p-3">Ajouter</router-link></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed bg-active" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><router-link to="#" class="link-dark rounded">New...</router-link></li>
                            <li><router-link to="#" class="link-dark rounded">Profile</router-link></li>
                            <li><router-link to="#" class="link-dark rounded">Settings</router-link></li>
                            <li><router-link to="#" class="link-dark rounded">Sign out</router-link></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <router-view/>
    </div>


</template>

<script>

</script>

<style scoped>
/* Add any styling for your form */
</style>
