// @ts-ignore
import { defineStore } from 'pinia';
import { useHead  } from '@vueuse/head'
import {ref} from 'vue'

const isDarkMode = ref(false)

export const useAppStore = defineStore('app', {

    state: () => ({
        isDarkMode: false,
    }),

});
