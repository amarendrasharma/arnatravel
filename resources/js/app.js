require("./bootstrap");

import Vue from "vue";
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "package-create-form",
    require("./components/admin/package/PackageCreateForm").default
);
Vue.component(
    "timeline-component",
    require("./components/TimelineComponent").default
);

const app = new Vue({
    el: "#app"
});
