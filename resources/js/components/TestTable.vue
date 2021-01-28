<template>
<v-container>
    <template>
        <v-card id="tabs" elevation="0">
            <v-row dense>
                <v-col cols="12" sm="6" md="8">
                    <v-tabs color="purple">
                        <v-tabs-slider></v-tabs-slider>
                        <v-tab id="tabs-text">One </v-tab>
                        <v-icon small>mdi-dots-horizontal</v-icon>
                        <v-tab id="tabs-text">Two</v-tab>
                    </v-tabs>
                </v-col>
                <v-col cols="6" md="4">
                    <v-select :items="users" item-text="name" label="Пользователь" dense class="pa-1" color="purple"></v-select>
                </v-col>
            </v-row>
        </v-card>
        </v-row>
    </template>

    <template>
        <v-card class="d-flex flex-row justify-end mt-4" flat tile elevation="0">
            <h2 class="references">Обращения <v-icon color="purple">mdi-information</v-icon>
            </h2>
            <v-btn text>
                <caption class="history_button">История обращений</caption>
            </v-btn>
            <v-btn class="add_button white--text" text>Добавить обращение</v-btn>
            <v-btn class="del_button white--text" text>Убрать все ошибки</v-btn>
        </v-card>
    </template>

    <template>
        <v-card flat tile elevation="0">
            <v-row class="ml-5">
                <v-col class="mt-2">
                    <p class="legend">
                        <v-icon color="red">mdi-radiobox-marked</v-icon>Актуальные
                    </p>
                </v-col>
                <v-col class="mt-2">
                    <p class="legend">
                        <v-icon color="purple">mdi-radiobox-marked</v-icon>В работе
                    </p>
                </v-col>
                <v-col class="mt-2">
                    <p class="legend">
                        <v-icon color="success">mdi-radiobox-marked</v-icon>Готово
                    </p>
                </v-col>
                <v-col>
                    <v-text-field placeholder="Название рубежа" label="все" outlined dense color="purple"></v-text-field>
                </v-col>
                <v-col>
                    <v-select :items="errors" item-text="name" label="проблема" placeholder="Все" dense color="purple" outlined></v-select>
                </v-col>
                <v-col>
                    <v-select :items="filters" label="сначала показать" dense color="purple" outlined></v-select>
                </v-col>
                <v-col>
                    <v-btn-toggle v-model="toggle_none" >
                        <v-btn class="swich_page">
                            <v-icon>mdi-menu</v-icon>
                        </v-btn>
                        <v-btn class="swich_page">
                            <v-icon>mdi-apps</v-icon>
                        </v-btn>
                    </v-btn-toggle>
                </v-col>
            </v-row>
        </v-card>
    </template>

    <template>
        <v-container id="table">
            <v-row no-gutters>
                <v-col>
                    <v-data-table :headers="headers" :items="laravelData" hide-default-header :loading="myLoadVariable" hide-default-footer disable-pagination loading-text="Loading... Please wait">
                        <template v-slot:top>
                            <v-dialog v-model="dialog" max-width="500px">
                                <v-card>
                                    <v-card-title>
                                        <span class="headline">{{ formTitle }}</span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-container>
                                            <v-row>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.device_bound_neme" label="Имя группы"></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.region_name" label="Имя региона"></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.group_name" label="Имя устройства"></v-text-field>
                                                </v-col>
                                            </v-row>
                                        </v-container>
                                    </v-card-text>

                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn color="blue darken-1" text @click="close"> Cancel </v-btn>
                                        <v-btn color="blue darken-1" text @click="save"> Save </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                            <v-dialog v-model="dialogDelete" max-width="500px">
                                <v-card>
                                    <v-card-title class="headline">Are you sure you want to delete this item?</v-card-title>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
                                        <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
                                        <v-spacer></v-spacer>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                        </template>

                        <template v-slot:item.actions="{ item }">
                            <v-icon small class="mr-2" @click="editItem(item)">mdi-pencil </v-icon>
                            <v-icon small @click="deleteItem(item)">mdi-delete </v-icon>
                        </template>
                        <template v-slot:no-data>
                            <v-btn color="primary" @click="initialize">Reset</v-btn>
                        </template>
                    </v-data-table>
                </v-col>
            </v-row>
        </v-container>
    </template>

</v-container>
</template>

<script>
export default {
    data: () => ({
        myLoadVariable: true,
        dialog: false,
        dialogDelete: false,
        expanded: [],
        errors: [],
        filters: ['актуальные', 'за неделю', 'за месяц', 'за квартал', 'за год'],
        singleExpand: false,
        laravelData: [],
        users: [],
        search: "",
        headers: [{
                text: "",
                value: "icon"
            },
            {
                text: "",
                value: "device_bound_neme"
            },
            {
                text: "",
                value: "region_name"
            },
            {
                text: "",
                value: "group_name"
            },
            {
                text: "",
                value: "actions",
                sortable: false
            },
        ],
        desserts: [],
        editedIndex: -1,
        editedItem: {
            device_bound_neme: "",
            region_name: "",
            group_name: "",
        }
    }),

    computed: {
        formTitle() {
            return this.editedIndex === -1 ? "New Item" : "Edit Item";
        },
    },

    watch: {
        dialog(val) {
            val || this.close();
        },
        dialogDelete(val) {
            val || this.closeDelete();
        },
    },

    created() {
        this.getData();
    },

    methods: {
        getData() {
            axios.get("/api/pages/work_space").then((response) => {
                this.laravelData = response.data;
                this.myLoadVariable = false;
            });
            axios.get("/api/pages/work_space/users_select").then((response) => {
                this.users = response.data;
                console.log(this.users);
            });
            axios.get("/api/pages/work_space/errors").then((response) => {
                this.errors = response.data;
                console.log(this.errors);
            });
        },

        editItem(item) {
            this.editedIndex = this.laravelData.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialog = true;
        },

        deleteItem(item) {
            this.editedIndex = this.laravelData.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialogDelete = true;
        },

        deleteItemConfirm() {
            this.laravelData.splice(this.editedIndex, 1);
            this.closeDelete();
        },

        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        closeDelete() {
            this.dialogDelete = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        save() {
            if (this.editedIndex > -1) {
                Object.assign(this.laravelData[this.editedIndex], this.editedItem);
            } else {
                this.laravelData.push(this.editedItem);
            }
            this.close();
        },
    },
};
</script>
