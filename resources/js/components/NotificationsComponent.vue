<template>
    <li class="nav-item dropdown">
        <a
            class="nav-link dropdown-toggle notifications"
            href="#"
            data-toggle="dropdown"
        >
            <i class="fas fa-bell"></i>
            <span class="badge badge-danger" v-if="notifications.length">{{
                notifications.length
            }}</span>
        </a>
        <div
            class="dropdown-menu dropdown-menu-right"
            aria-haspopup="false"
            v-if="notifications.length"
        >
            <h6 class="dropdown-header">Tus Notificaciones recientes</h6>
            <div v-for="(notification, index) in notifications" :key="index">
                <a
                    @click="markAsRead(notification)"
                    :href="notification.data.link"
                    class="dropdown-item"
                >
                    {{ notification.data.text }}
                </a>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/notifications"
                >Ver todos las notificaciones</a
            >
        </div>
    </li>
</template>

<script>
export default {
    data() {
        return {
            notifications: []
        };
    },
    mounted() {
        console.log("Component mounted.");
        this.getAllNotifications();
        // setInterval(() => {
        //     this.getAllNotifications();
        // }, 36000);
    },
    methods: {
        getAllNotifications() {
            axios.get("/notifications").then(res => {
                this.notifications = res.data;
            });
        },
        markAsRead(notification) {
            axios.patch("/notifications/" + notification.id).then(resp => {
                this.notifications = res.data;
            });
        }
    }
};
</script>
