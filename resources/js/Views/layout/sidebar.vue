<template>
    <span>
        <v-list dense>
            <v-list-item link to="/dashboard">
            <v-list-item-action>
                <v-icon>mdi-view-dashboard</v-icon>
            </v-list-item-action>
            <v-list-item-content>
                <v-list-item-title>Home</v-list-item-title>
            </v-list-item-content>
        </v-list-item>
        <v-list-item link to="/dashboard/profile">
            <v-list-item-action>
                <v-icon>mdi-buffer</v-icon>
            </v-list-item-action>
            <v-list-item-content>
                <v-list-item-title>Profile</v-list-item-title>
            </v-list-item-content>
        </v-list-item>
        </v-list>
    </span>
</template>

<script>
export default {
    
}
</script>