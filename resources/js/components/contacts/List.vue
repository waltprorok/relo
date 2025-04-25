<template>
    <div class="fa-pull-right mb-2">
        <input v-model="params.search" type="text" class="form-control" placeholder="Search..." @keydown="$event.stopImmediatePropagation()"/>
    </div>

    <vue3-datatable :rows="rows"
                    :columns="cols"
                    :pageSize="params.pageSize"
                    :showPageSize="params.showPageSize"
                    :pageSizeOptions="pageSizeOptions"
                    :sortable="true"
                    :search="params.search"
                    :loading="loading"
                    :class="classStyle"
                    @change="changeServer">
        <template #status="data">
            {{ capitalize(data.value.status) }}
        </template>
        <template #email="data">
            <a :href="`mailto:${data.value.email}?subject=Relo Agent Connect&body=${data.value.message}`" class="text-primary hover:underline" @click.stop>{{ data.value.email }}</a>
        </template>
        <template #replied="data">
            <i v-if="data.value.replied" class="fa fa-check" aria-hidden="true"></i>
            <i v-else class="fa fa-times" aria-hidden="true"></i>
        </template>
        <template #action="data">
            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-envelope"></i>
            </button>
            <a href="#" class="btn btn-sm btn-outline-secondary" role="button" title="edit"><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-sm btn-outline-danger" role="button" title="delete"><i class="fa fa-trash"></i></a>
        </template>
    </vue3-datatable>
</template>


<script setup lang="ts">
// https://github.com/bhaveshpatel200/vue3-datatable-document/blob/main/pages/sorting.vue

import {onMounted, reactive, ref} from 'vue';
import Vue3Datatable from '@bhplugin/vue3-datatable';
import '@bhplugin/vue3-datatable/dist/style.css';

onMounted(() => {
    getContacts();
});

const classStyle = "bh-table bh-table-striped bh-table-responsive bh-table-hover";
const loading: any = ref(true);
const pageSizeOptions = [10, 25, 50, 100];
const params = reactive({
    current_page: 1,
    pageSize: 10,
    search: '',
    showPageSize: true,
    column_filters: [],
});
const rows: any = ref(null);

const cols = ref([
    {field: "name", title: "Name"},
    {field: "status", title: "Status"},
    {field: "email", title: "Email"},
    {field: "phone", title: "Phone"},
    {field: "current_zip_code", title: "Current Zip"},
    {field: "moving_to_city", title: "Moving To City"},
    {field: "replied", title: "Replied", type: "boolean"},
    {field: "action", title: "Action"},
]);

function capitalize(word) {
    if (!word) return '';
    return word.charAt(0).toUpperCase() + word.slice(1);
}

const getContacts = async () => {
    try {
        loading.value = true;

        const response = await fetch('/web/contacts/list', {
            method: 'GET',
            // headers: {'Content-Type': 'application/json'},
            // body: JSON.stringify(toRaw(params)),
        });

        rows.value = await response.json();
        // total_rows.value = data?.meta?.total;
    } catch {
        console.log('error');
    }

    loading.value = false;
};

const changeServer = (data: any) => {
    params.current_page = data.current_page;
    params.pageSize = data.pageSize;
    params.sort_column = data.sort_column;
    params.sort_direction = data.sort_direction;

    getContacts();
};
</script>
