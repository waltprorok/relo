<template>
    <div v-if="showModal" class="modal-overlay">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Contact Message</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  @click="showModal=false">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Name: {{ row.name }}<br>
                        Status: {{ capitalize(row.status) }}</p>
                        <p>Email: {{ capitalize(row.email) }}<br>
                        Phone: {{ capitalize(row.phone) }}</p>
                        <p>Current Zip Code: {{ capitalize(row.current_zip_code) }}<br>
                        Moving To City: {{ capitalize(row.moving_to_city) }}</p>
                        <p>Message:</p>
                        {{ row.message }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="showModal=false">Close</button>
<!--                        <button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal -->
    </div>

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
            <i v-if="data.value.replied" class="fa fa-check btn-outline-success" aria-hidden="true"></i>
            <i v-else class="fa fa-times btn-outline-danger" aria-hidden="true"></i>
        </template>
        <template #action="data">
            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal" @click="openModal(data.value)">
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

const classStyle: string = "bh-table bh-table-striped bh-table-responsive bh-table-hover";
const loading: boolean = ref(true);
const pageSizeOptions = [10, 25, 50, 100];
const params = reactive({
    current_page: 1,
    pageSize: 10,
    search: '',
    showPageSize: true,
    column_filters: [],
});
const rows: any = ref(null);
const showModal = ref(false);
const row = ref({});

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

function openModal(data) {
    showModal.value = true;
    row.value = data;
}

function capitalize(word) {
    if (! word) return '';
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
