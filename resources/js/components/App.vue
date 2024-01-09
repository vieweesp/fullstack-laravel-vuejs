<script>
import {defineAsyncComponent} from "vue";

const BackOfficeLayout = defineAsyncComponent(() => import('@/layouts/BackOfficeLayout.vue'));

export default {
    name: 'App',
    components: {

        BackOfficeLayout,
    },

    setup() {
        return {

        }
    }
}
</script>
