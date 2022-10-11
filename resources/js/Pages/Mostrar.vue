<template>
    <app-layout>
        <Link
            :href="route('alumnos.create')"
            class="btn btn-outline-primary btn-sm"
        >
            <i class="bi bi-plus"></i>
            Agregar Alumno
        </Link>
        <div class="card shadow-sm">
            <div class="row">
                <div class="col-md-12 pe-0">
                    <div class="card-body border-right border-bottom p-3 h-100">
                        <div class="d-flex flex-row bd-highlight pt-2">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Matricula</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Carrera</th>
                                        <th scope="col">Semestre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="alumno in alumnos"
                                        :key="alumno.id"
                                    >
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'alumnos.edit',
                                                        alumno.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ alumno.Matr }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'alumnos.edit',
                                                        alumno.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ alumno.Nombre }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'alumnos.edit',
                                                        alumno.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ alumno.Apellido }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'alumnos.edit',
                                                        alumno.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ alumno.Email }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'alumnos.edit',
                                                        alumno.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ alumno.Carr }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'alumnos.edit',
                                                        alumno.id
                                                    )
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
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

export default {
    name: "Mostrar",
    props: {
        alumnos: {
            type: Object,
            default: {},
            required: true,
        },
        alumno: { type: String, required: true },
    },
    components: {
        AppLayout,
        Link,
        Inertia,
    },
};
</script>

<style></style>
