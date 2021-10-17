import Vue from 'vue'
import VueMeta from 'vue-meta'
import PortalVue from 'portal-vue'
import { InertiaProgress } from '@inertiajs/progress'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import VueCarousel from 'vue-carousel';
import { Link } from '@inertiajs/inertia-vue'

Vue.config.productionTip = false
Vue.mixin({ methods: { route: window.route } })
Vue.use(PortalVue)
Vue.use(VueMeta)
Vue.use(VueCarousel);
Vue.component('Link', Link);

InertiaProgress.init({
  delay: 250,
  color: '#cbd5e0',
  includeCSS: true,
  showSpinner: true,
})

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, app, props }) {
        new Vue({
            metaInfo: {
                titleTemplate: title => (title ? `${title} - WT` : 'WT'),
            },
            render: h => h(app, props),
        }).$mount(el)
    },
})

require('./bootstrap');
