<template>
    <app-layout>
        <div class="row justify-content-center my-5">
            <div class="col-md-4">
                <div class="card shadow bg-light">
                    <div
                        class="card-body bg-white px-5 py-3 border-bottom rounded-top"
                    >
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Profesores</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Viterbo
                                        <!-- <Link
                                            :href="
                                                route(
                                                    'teachers.index',
                                                    teacher.id
                                                )
                                            "
                                            class="d-flex text-decoration-none text-reset"
                                            >{{ teacher.nombre }}</Link
                                        > -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow bg-light">
                    <div
                        class="card-body bg-white px-5 py-3 border-bottom rounded-top"
                    >
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Alumno</th>
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Semestre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="alumno in alumnos" :key="alumno.id">
                                    <td>
                                        <Link
                                            :href="
                                                route('alumnos.edit', alumno.id)
                                            "
                                            class="d-flex text-decoration-none text-reset"
                                            >{{ alumno.Nombre }}</Link
                                        >
                                    </td>
                                    <td>
                                        <Link
                                            :href="
                                                route('alumnos.edit', alumno.id)
                                            "
                                            class="d-flex text-decoration-none text-reset"
                                            >{{ alumno.Matr }}</Link
                                        >
                                    </td>
                                    <td>
                                        <Link
                                            :href="
                                                route('alumnos.edit', alumno.id)
                                            "
                                            class="d-flex text-decoration-none text-reset"
                                            >{{ alumno.Sem }}</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

export default defineComponent({
    name: "Historial",
    props: {
        teachers: {
            type: Object,
            default: {},
            required: true,
        },
        teacher: { type: String, required: true },
    },

    props: {
        alumnos: {
            type: Object,
            default: {},
            required: true,
        },
        alumno: { type: String, required: true },
    },

    components: {
        JetApplicationLogo,
        AppLayout,
        Link,
        Inertia,
    },
});
</script>
