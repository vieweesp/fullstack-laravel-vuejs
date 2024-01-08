import { defineAsyncComponent } from 'vue';

export default function useIconLoader() {
    const getIcon = (iconName) => {
        return defineAsyncComponent({
            loader: () => import('@heroicons/vue/24/outline').then(module => module[iconName]),
        });
    }

    return {
        getIcon,
    }
}
