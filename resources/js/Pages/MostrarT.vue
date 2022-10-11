<template>
    <app-layout>
        <Link
            :href="route('teachers.create')"
            class="btn btn-outline-primary btn-sm"
        >
            <i class="bi bi-plus"></i>
            Agregar Profesor
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
                                        <th scope="col">Area</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="teacher in teachers"
                                        :key="teacher.id"
                                    >
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'teachers.edit',
                                                        teacher.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ teacher.matr }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'teachers.edit',
                                                        teacher.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ teacher.nombre }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'teachers.edit',
                                                        teacher.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ teacher.apellido }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'teachers.edit',
                                                        teacher.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ teacher.email }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'teachers.edit',
                                                        teacher.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ teacher.carr }}</Link
                                            >
                                        </td>
                                        <td>
                                            <Link
                                                :href="
                                                    route(
                                                        'teachers.edit',
                                                        teacher.id
                                                    )
                                                "
                                                class="d-flex text-decoration-none text-reset"
                                                >{{ teacher.area }}</Link
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
    name: "MostrarT",
    props: {
        teachers: {
            type: Object,
            default: {},
            required: true,
        },
        teacher: { type: String, required: true },
    },
    components: {
        AppLayout,
        Link,
        Inertia,
    },
};
</script>

<style></style>
