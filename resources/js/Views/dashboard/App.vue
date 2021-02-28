<template>
    <v-app id="inspire">
        <v-navigation-drawer v-model="drawer" app clipped>
            <app-sidebar />
        </v-navigation-drawer>

        <v-app-bar app clipped-left>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>

        <v-main>
            <v-container>
                <slot></slot>
            </v-container>
        </v-main>

        <v-footer app>
            <span>© {{ new Date().getFullYear() }}</span>
        </v-footer>
    </v-app>
</template>

<script>
import appSidebar from '../layout/sidebar'
    export default {
        props: {
            source: String,
        },
        components:{
            appSidebar
        },
        data: () => ({
            drawer: null,
        }),
        created () {
            this.$vuetify.theme.dark = true
        },
    }
</script>