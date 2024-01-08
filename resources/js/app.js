import './bootstrap';

import { createApp } from 'vue';
import App from '@/components/App.vue';

import DashboardPage from "@/pages/backoffice/dashboard/DashboardPage.vue";

const app = createApp(App);

app.component('dashboard-page', DashboardPage);
app.mount('#app');
