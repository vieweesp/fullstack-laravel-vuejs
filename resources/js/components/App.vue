<script>
import {defineAsyncComponent} from "vue";

const BackOfficeLayout = defineAsyncComponent(() => import('@/layouts/BackofficeLayout.vue'));

export default {
    name: 'App',
    components: {
        BackofficeLayout,
    },

    setup() {
        return {

        }
    }
}
</script>
