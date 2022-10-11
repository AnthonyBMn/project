<template>
    <div class="row justify-content-center my-5">
        <div class="col-md-4">
            <div class="card shadow bg-light">
                <div
                    class="card-body bg-white px-5 py-3 border-bottom rounded-top"
                ></div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow bg-light">
                <div
                    class="card-body bg-white px-5 py-3 border-bottom rounded-top"
                ></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div
                    class="card-body bg-white px-5 py-3 border-bottom rounded-top"
                ></div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

export default defineComponent({
    name: "Welcome",
    components: {
        JetApplicationLogo,
        AppLayout,
        Link,
        Inertia,
    },
});
</script>
