<template>
    <v-app-bar app color="#11223D" dark>
        <v-row no-gutters align="center">
            <v-col cols="auto">
                <a href="/">
                    <v-img
                        class="mx-2"
                        src="/img/nav/lery-logo-web.png"
                        alt="Logo"
                        height="70"
                        contain
                    />
                </a>
            </v-col>
            <v-col cols="auto">
                <a href="/" class="title">
                    <v-toolbar-title>
                        Lery technologies
                    </v-toolbar-title>
                </a>
            </v-col>
            <v-spacer></v-spacer>
            <v-btn icon class="user">
                <img src="/img/nav/user.png" alt="user" style="height: 32px; width: 32px;">
            </v-btn>
        </v-row>
    </v-app-bar>
</template>

<script>
export default {
    name: "Navbar"
}
</script>

<style scoped>

.title {
    color: white;
    font-weight: 800;
    font-size: 23px;
    font-family: "Teko", sans-serif;
    text-decoration: none;
}

.user {
    color: white;
    margin-right: 50px;
}

.v-btn {
    outline: none !important;
    box-shadow: none !important;
}

</style>
