<template>
    <app-layout title="Profesores">
        <template #header>
            <h2 class="h4 font-weight-bold">
                <i class="bi bi-bricks"></i>{{ titulo }}
            </h2>
        </template>
        <div class="card shadow-sm">
            <div class="row">
                <div class="col-md-12 pe-0">
                    <div class="card-body border-right border-bottom p-3 h-100">
                        <form
                            class="row g-3 needs-validation"
                            @submit.prevent="guardar"
                        >
                            <div class="col-md-2">
                                <jet-label for="matr" value="Matricula:" />
                                <jet-input
                                    v-model="form.matr"
                                    :class="{
                                        'is-invalid': form.errors.matr,
                                    }"
                                    required
                                    placeholder="Matricula"
                                />
                                <jet-input-error :message="form.errors.matr" />
                            </div>
                            <div class="col-md-3">
                                <jet-label for="nombre" value="Nombre:" />
                                <jet-input
                                    v-model="form.nombre"
                                    :class="{
                                        'is-invalid': form.errors.nombre,
                                    }"
                                    required
                                    placeholder="Nombre"
                                />
                                <jet-input-error
                                    :message="form.errors.nombre"
                                />
                            </div>
                            <div class="col-md-3">
                                <jet-label for="apellido" value="Apellido:" />
                                <jet-input
                                    v-model="form.apellido"
                                    :class="{
                                        'is-invalid': form.errors.apellido,
                                    }"
                                    required
                                    placeholder="Apellido"
                                />
                                <jet-input-error
                                    :message="form.errors.apellido"
                                />
                            </div>
                            <div class="col-md-4">
                                <jet-label for="email" value="Email:" />
                                <jet-input
                                    v-model="form.email"
                                    :class="{
                                        'is-invalid': form.errors.email,
                                    }"
                                    required
                                    placeholder="Email"
                                />
                                <jet-input-error :message="form.errors.email" />
                            </div>
                            <div class="col-md-6">
                                <jet-label for="carr" value="Carrera:" />
                                <jet-input
                                    v-model="form.carr"
                                    :class="{
                                        'is-invalid': form.errors.carr,
                                    }"
                                    required
                                    placeholder="Carrera"
                                />
                                <jet-input-error :message="form.errors.carr" />
                            </div>
                            <div class="col-md-6">
                                <jet-label for="area" value="Area:" />
                                <jet-input
                                    v-model="form.area"
                                    :class="{
                                        'is-invalid': form.errors.area,
                                    }"
                                    required
                                    placeholder="Area"
                                />
                                <jet-input-error :message="form.errors.area" />
                            </div>

                            <div class="px-6 py-4">
                                <Link
                                    :href="route('teachers.index')"
                                    class="btn btn-outline-danger btn-sm me-2"
                                >
                                    <i class="bi bi-chevron-left"></i> Cancelar
                                </Link>
                                <jet-button
                                    @click="guardar"
                                    class="btn btn-outline-success btn-sm me-2"
                                    :class="{
                                        'text-white-50': form.processing,
                                    }"
                                    :disabled="form.processing"
                                >
                                    <i class="bi bi-save"></i> Guardar
                                </jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import JetLabel from "@/Jetstream/Label";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetButton from "@/Jetstream/Button";
import { useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

export default {
    name: "FormCrearT",
    props: {
        teacher: { type: String, required: true },
    },
    components: {
        AppLayout,
        Link,
        JetLabel,
        JetInput,
        JetInputError,
        JetButton,
    },
    setup(props) {
        const form = useForm({
            nombre: "",
            apellido: "",
            email: "",
            matr: "",
            carr: "",
            area: "",
        });
        const guardar = () => {
            form.post(route("teachers.store"));
        };

        return { form, guardar };
    },
};
</script>

<style></style>
