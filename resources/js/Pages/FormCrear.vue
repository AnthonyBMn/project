<template>
    <app-layout title="Alumnos">
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
                                <jet-label for="Matr" value="Matricula:" />
                                <jet-input
                                    v-model="form.Matr"
                                    :class="{
                                        'is-invalid': form.errors.Matr,
                                    }"
                                    required
                                    placeholder="Matricula"
                                />
                                <jet-input-error :message="form.errors.Matr" />
                            </div>
                            <div class="col-md-3">
                                <jet-label for="Nombre" value="Nombre:" />
                                <jet-input
                                    v-model="form.Nombre"
                                    :class="{
                                        'is-invalid': form.errors.Nombre,
                                    }"
                                    required
                                    placeholder="Nombre"
                                />
                                <jet-input-error
                                    :message="form.errors.Nombre"
                                />
                            </div>
                            <div class="col-md-3">
                                <jet-label for="Apellido" value="Apellido:" />
                                <jet-input
                                    v-model="form.Apellido"
                                    :class="{
                                        'is-invalid': form.errors.Apellido,
                                    }"
                                    required
                                    placeholder="Apellido"
                                />
                                <jet-input-error
                                    :message="form.errors.Apellido"
                                />
                            </div>
                            <div class="col-md-4">
                                <jet-label for="Email" value="Email:" />
                                <jet-input
                                    v-model="form.Email"
                                    :class="{
                                        'is-invalid': form.errors.Email,
                                    }"
                                    required
                                    placeholder="Email"
                                />
                                <jet-input-error :message="form.errors.Email" />
                            </div>
                            <div class="col-md-6">
                                <jet-label for="Carr" value="Carrera:" />
                                <jet-input
                                    v-model="form.Carr"
                                    :class="{
                                        'is-invalid': form.errors.Carr,
                                    }"
                                    required
                                    placeholder="Carrera"
                                />
                                <jet-input-error :message="form.errors.Carr" />
                            </div>
                            <div class="col-md-6">
                                <jet-label for="Sem" value="Semestre:" />
                                <jet-input
                                    v-model="form.Sem"
                                    :class="{
                                        'is-invalid': form.errors.Sem,
                                    }"
                                    required
                                    placeholder="Semestre"
                                />
                                <jet-input-error :message="form.errors.Sem" />
                            </div>
                            <div class="px-6 py-4">
                                <Link
                                    :href="route('alumnos.index')"
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
    name: "FormCrear",
    props: {
        alumno: { type: String, required: true },
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
            Nombre: "",
            Apellido: "",
            Email: "",
            Matr: "",
            Sem: "",
            Carr: "",
        });
        const guardar = () => {
            form.post(route("alumnos.store"));
        };

        return { form, guardar };
    },
};
</script>

<style></style>
