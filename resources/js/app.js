import Vue from 'vue'
import VueMeta from 'vue-meta'
import PortalVue from 'portal-vue'
import { InertiaProgress } from '@inertiajs/progress'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import VueCarousel from 'vue-carousel'
import { Link } from '@inertiajs/inertia-vue'
import VueTailwind from 'vue-tailwind'
import {
  TInput,
  TTextarea,
  TSelect,
  TRadio,
  TCheckbox,
  TButton,
  TInputGroup,
  TCard,
  TAlert,
  TModal,
  TDropdown,
  TRichSelect,
  TPagination,
  TTag,
  TRadioGroup,
  TCheckboxGroup,
  TTable,
  TDatepicker,
  TToggle,
  TDialog,
} from 'vue-tailwind/dist/components';

const settings = {
  't-input': {
    component: TInput,
    props: {
      classes: 'border-2 block w-full rounded text-gray-800'
    }
  },
  't-textarea': {
    component: TTextarea,
    props: {
      classes: 'border-2 block w-full rounded text-gray-800'
    }
  },
  't-dropdown': {
    component: TDropdown,
    props: {
      classes: 'border-2 block w-full rounded text-gray-800'
    }
  },
}

Vue.use(VueTailwind, settings)

Vue.config.productionTip = false
Vue.mixin({
  methods: {
    route: window.route,
    hasAnyPermission: function (permissions) {
      var hasPermission = false;
      if (this.$page.props.auth.user) {
        var allPermissions = this.$page.props.auth.user.can;

        permissions.forEach(function (item) {
          if (allPermissions[item]) hasPermission = true;
        });
        var roles = (this.$page.props.auth.user.role);
        roles.forEach(function (role) {
          if (role.name == 'Super') hasPermission = true;
        });
      }
      return hasPermission;
    },
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1);
      if (urls[0] === "") {
        return currentUrl === "";
      }
      return urls.filter((url) => currentUrl.startsWith(url)).length;
    },
  }
})
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
