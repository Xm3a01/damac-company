
require('./bootstrap');

import Vuetify from 'vuetify'


Vue.use(Vuetify)

import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'

Vue.use(plugin)

const el = document.getElementById('app')

if(el) {
new Vue({

  vuetify: new Vuetify(),
   render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Views/${name}`).default,
    },
  }),
}).$mount(el)
}
