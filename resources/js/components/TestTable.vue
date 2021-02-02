<template>
<v-container>
    <template>
        <v-card id="tabs" elevation="0" class="ml-8 mr-9">
            <v-row dense>
                <v-col cols="auto">
                    <v-breadcrumbs :items="path" class="breadcrumbs">
                        <template v-slot:divider>
                            <v-icon class="pb-3">mdi-dots-horizontal</v-icon>
                        </template>
                    </v-breadcrumbs>
                </v-col>
                <v-spacer></v-spacer>
                <v-col cols="auto">
                    <v-select :items="users" item-text="name" label="Пользователь" dense class="pa-1 userSelect" color="#6633ff"></v-select>
                </v-col>
            </v-row>
        </v-card>
    </template>

    <template>
        <v-card class="d-flex flex-row justify-end mt-4 ml-8 mr-9" flat tile elevation="0">
            <h2 class="references">Обращения <v-icon color="#6633ff">mdi-information</v-icon>
            </h2>
            <v-btn text>
                <caption class="history_button">История обращений</caption>
            </v-btn>
            <v-btn class="add_button white--text" text>Добавить обращение</v-btn>
            <v-btn class="del_button white--text" text>Убрать все ошибки</v-btn>
        </v-card>
    </template>

    <template>
        <v-card flat tile elevation="0" class="mt-3">
            <v-row class="ml-5 mr-6 flex-nowrap">
                <v-checkbox
                    class="check--box"
                    v-model="actual"
                    color="#d93030"
                    label="Актуальные"
                    off-icon="far fa-square"
                    on-icon="fas fa-square"
                ></v-checkbox>
                <v-checkbox
                    class="check--box"
                    v-model="inWork"
                    color="#6633ff"
                    label="В работе"
                    off-icon="far fa-square"
                    on-icon="fas fa-square"
                ></v-checkbox>
                <v-checkbox
                    class="check--box"
                    v-model="ready"
                    color="#458e3c"
                    label="В работе"
                    off-icon="far fa-square"
                    on-icon="fas fa-square"
                ></v-checkbox>
                <v-spacer></v-spacer>
                <v-col cols="auto">
                    <v-text-field placeholder="Название рубежа" v-model="search" label="все" outlined dense color="#6633ff"></v-text-field>
                </v-col>
                <v-col cols="auto">
                    <v-select :items="errors" item-text="name" v-model="error_filter" label="проблема" placeholder="Все" dense color="#6633ff" outlined></v-select>
                </v-col>
                <v-col cols="auto">
                    <v-btn outlined class="dotsbutton" color="#7d7e83">
                        <v-icon color="#6633ff">mdi-dots-horizontal</v-icon>
                    </v-btn>
                </v-col>
                <v-col cols="auto">
                    <v-select :items="filters" label="сначала показать" dense color="#6633ff" outlined></v-select>
                </v-col>
                <v-col cols="auto">
                    <v-btn-toggle v-model="toggle_none" color="#6633ff" class="button_togle">
                        <v-btn max-height="40px" @click="format_table= true">
                            <v-icon>mdi-menu</v-icon>
                        </v-btn>
                        <v-btn max-height="40px" @click="format_table= false">
                            <v-icon>mdi-apps</v-icon>
                        </v-btn>
                    </v-btn-toggle>
                </v-col>
            </v-row>
        </v-card>
    </template>

    <template v-if="format_table">
        <v-container id="table">
            <v-row>
                <v-col>
                    <v-data-table :headers="headers" :search="search" :items="laravelData" hide-default-header :loading="myLoadVariable" hide-default-footer disable-pagination loading-text="Loading... Please wait">
                        <template v-slot:item.icon="{ item }" class="columBorder ">
                            <v-icon v-if="item.type_ad === 'error'" color="#d93030" class="columBorder">mdi-bookmark</v-icon>
                            <v-icon v-if="item.type_ad === 'inWork'" color="#6633ff" class="columBorder">mdi-bookmark</v-icon>
                            <v-icon v-if="item.type_ad === 'complete'" color="#458e3c" class="columBorder">mdi-bookmark</v-icon>
                        </template>
                        <template v-slot:item.errors="{ item }">
                            <div class="d-flex justify-center errors-collum">
                                <v-icon color="#d93030">{{item.icon}}</v-icon>{{item.errors}}
                            </div>
                        </template>
                        <template v-slot:item.dateOpen="{ item }">
                            <div v-if="item.type_ad === 'error'">
                                <div class="d-flex  datatable-subheader">дата и время обращения</div>
                                <!--ПЕРЕНОС ТЕКСТА-->
                                <div class="d-flex table-text">{{item.dateOpen}}</div>
                            </div>
                            <div v-if="item.type_ad === 'inWork'">
                                <div class="d-flex  datatable-subheader">дата и время начала работ</div>
                                <!--ПЕРЕНОС ТЕКСТА-->
                                <div class="d-flex table-text">{{item.dateOpen}}</div>
                            </div>
                            <div v-if="item.type_ad === 'complete'">
                                <div class="d-flex  datatable-subheader">дата и время окончания работ</div>
                                <!--ПЕРЕНОС ТЕКСТА-->
                                <div class="d-flex table-text">{{item.data}}</div>
                            </div>
                        </template>
                        <template v-slot:item.serialNumber="{item}">
                            <div class="d-flex  datatable-subheader">серийный номер устройств</div>
                            <!--ПЕРЕНОС ТЕКСТА-->
                            <div class="d-flex table-text">{{item.serialNumber}}</div>
                        </template>
                        <template v-slot:top>
                            <v-dialog v-model="dialog" max-width="30vw">
                                <v-card>
                                    <v-card-title class="justify-center">
                                        <span class="headline">{{ formTitle }}</span>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-container>
                                            <h1>Подробная информация об обращении</h1>
                                            <!-- <v-row>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.device_bound_neme" label="Имя группы"></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.region_name" label="Имя региона"></v-text-field>
                                                </v-col>
                                                <v-col cols="12" sm="6" md="4">
                                                    <v-text-field v-model="editedItem.group_name" label="Имя устройства"></v-text-field>
                                                </v-col>
                                            </v-row> -->
                                        </v-container>
                                    </v-card-text>

                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn color="blue darken-1" text @click="close"> Назад </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                            <v-dialog v-model="dialogDelete" max-width="40vw">
                                <v-card>
                                    <v-card-title class="headline justify-center ">Вы действительно хотите удалить запись?</v-card-title>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn color="blue darken-1" text @click="closeDelete">Отмена</v-btn>
                                        <v-btn color="blue darken-1" text @click="deleteItemConfirm">Да</v-btn>
                                        <v-spacer></v-spacer>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                        </template>

                        <template v-slot:item.actions="{ item }">
                            <div style="display: flex">
                                <v-btn class="mr-6 mt-1 border-copy-button" v-if="item.type_ad === 'complete'" elevation="0" small text>
                                    Отчет
                                </v-btn>
                                <v-btn class="mr-6 mt-1 disable-button" elevation="0" v-if="item.type_ad !== 'complete'" disabled text icon small>
                                    <v-icon></v-icon>
                                </v-btn>
                                <v-btn elevation="0" class="mr-2 more white--text" @click="editItem(item)" color="#6633ff">
                                    <v-icon>mdi-chevron-right</v-icon>
                                </v-btn>
                                <v-btn elevation="0" v-if="item.type_ad === 'complete'" class="white--text" style="width: 36px; min-width: 36px;" @click="deleteItem(item)" color="#458e3c">
                                    <v-icon small>mdi-close</v-icon>
                                </v-btn>
                                <v-btn elevation="0" v-else style="width: 36px; min-width: 36px;" disabled>

                                    <v-icon small>mdi-close</v-icon>
                                </v-btn>
                            </div>
                        </template>
                        <template v-slot:no-data>
                            <v-btn color="primary" icon @click="initialize"></v-btn>
                        </template>
                    </v-data-table>
                </v-col>
            </v-row>
        </v-container>
    </template>
    <!--КАРТОЧКИ ТУТ -->
    <template v-else="format_table">
        <v-row dense class="ml-7 mr-8">
            <v-col cols="3" v-for="item in laravelData" :key="item.key" class="content-between">
                <v-card class="styled_card" outlined>
                    <v-card-text class="d-flex">
                        {{item.evice_bound_neme}}
                        <v-icon v-if="item.type_ad === 'error'" style="margin-left: auto" color="#d93030">mdi-bookmark</v-icon>
                        <v-icon v-if="item.type_ad === 'inWork'" color="#6633ff">mdi-bookmark</v-icon>
                        <v-icon v-if="item.type_ad === 'complete'" color="#458e3c">mdi-bookmark</v-icon>
                    </v-card-text>
                    <v-card-text v-card-text class="d-flex justify-center">
                        <div class="d-flex justify-center errors-collum" style="width: 360px!important; ">
                            <v-icon color="#d93030">{{item.icon}}</v-icon>{{item.errors}}
                        </div>
                    </v-card-text>
                    <v-card-text>
                        <div v-if="item.type_ad === 'error'">
                            <div class="d-flex  datatable-subheader">дата и время обращения</div>
                            <!--ПЕРЕНОС ТЕКСТА-->
                            <div class="d-flex table-text">{{item.dateOpen}}</div>
                        </div>
                        <div v-if="item.type_ad === 'inWork'">
                            <div class="d-flex  datatable-subheader">дата и время начала работ</div>
                            <!--ПЕРЕНОС ТЕКСТА-->
                            <div class="d-flex table-text">{{item.dateOpen}}</div>
                        </div>
                        <div v-if="item.type_ad === 'complete'">
                            <v-row>
                                <div class="ml-3">
                                    <div class="d-flex datatable-subheader">дата и время окончания работ</div>
                                    <!--ПЕРЕНОС ТЕКСТА-->
                                    <div class="d-flex table-text">{{item.data}}</div>
                                </div>
                                <v-btn class="ml-auto mt-3 mr-3 border-copy-button" v-if="item.type_ad === 'complete'" elevation="0" small text>
                                    Отчет
                                </v-btn>
                            </v-row>
                        </div>
                    </v-card-text>
                    <v-card-text class="d-flex">
                        <v-row>
                            <div class="ml-3">
                                <div class="d-flex datatable-subheader">серийный номер устройств</div>
                                <!--ПЕРЕНОС ТЕКСТА-->
                                <div class="d-flex table-text">{{item.serialNumber}}</div>
                            </div>
                            <div class="ml-auto mr-3">
                                <v-btn elevation="0" class="add_button white--text" color="#6633ff">
                                    <v-icon>mdi-chevron-right</v-icon>
                                </v-btn>

                                <v-btn elevation="0" v-if="item.type_ad === 'complete'" class="del_button white--text" color="#458e3c">
                                    <v-icon>mdi-close</v-icon>
                                </v-btn>
                            </div>
                        </v-row>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </template>

</v-container>
</template>

<script>
export default {
    data: () => ({
        // checkbox
        actual: true,
        inWork: true,
        ready: true,
        //checkbox
        myLoadVariable: true,
        toggle_none: 0,
        dialog: false,
        dialogDelete: false,
        format_table: true,
        expanded: [],
        error_filter: "",
        errors: [],
        filters: ['актуальные', 'за неделю', 'за месяц', 'за квартал', 'за год'],
        singleExpand: false,
        laravelData: [{
                key: 1,
                evice_bound_neme: "г. Пенза, ул. Ленина, 541-1а",
                errors: "Низкий заряд аккумулятора",
                dateOpen: "12 августа 2020 в 15:58",
                data: "",
                serialNumber: "MD4578 KD1405",
                type_ad: "error",
                icon: "mdi-battery-10",
                color: "#d93030",
            },
            {
                key: 2,
                evice_bound_neme: "г. Пенза, ул. Стасова, 14",
                errors: "Нет ответа от камеры",
                dateOpen: "12 августа 2020 в 14:05",
                data: "",
                serialNumber: "MD0051 KD17568",
                type_ad: "error",
                icon: "mdi-block-helper",
                color: "#d93030",
            },
            {
                key: 3,
                evice_bound_neme: "г. Пенза, ул. Павлушкина, 964а",
                errors: "Камера загрязнена",
                dateOpen: "12 августа 2020 в 13:58",
                data: "",
                serialNumber: "MD0051 KD17568",
                type_ad: "error",
                icon: "mdi-broom",
                color: "#d93030",
            },
            {
                key: 4,
                evice_bound_neme: "г. Пенза, ул. Ленина, 541-1а",
                errors: "Низкий заряд аккумулятора",
                dateOpen: "12 августа 2020 в 15:58",
                data: "",
                serialNumber: "MD4578 KD0505",
                type_ad: "error",
                icon: "mdi-battery-10",
                color: "#d93030",
            },
            {
                key: 5,
                evice_bound_neme: "г. Пенза, ул. Стасова, 14",
                errors: "Нет ответа от камеры",
                dateOpen: "12 августа 2020 в 14:05",
                data: "",
                serialNumber: "MD4578 KD1405",
                type_ad: "error",
                icon: "mdi-block-helper",
                color: "#d93030",
            },
            {
                key: 6,
                evice_bound_neme: "г. Пенза, ул. Стасова, 15",
                errors: "Низкий заряд аккумулятора",
                dateOpen: "12 августа 2020 в 15:47",
                data: "",
                serialNumber: "MD0051 KD17568",
                type_ad: "inWork",
                icon: "mdi-battery-10",
                color: "#6633ff",
            },
            {
                key: 7,
                evice_bound_neme: "г. Пенза, ул. Ленина, 541-1а",
                errors: "Низкий заряд аккумулятора",
                dateOpen: "12 августа 2020 в 15:47",
                data: "13 августа 2020 в 09:01",
                serialNumber: "MD4578 KD1405",
                type_ad: "complete",
                icon: "mdi-battery-10",
                color: "#458e3c",
            },
            {
                key: 8,
                evice_bound_neme: "г. Пенза, ул. Ленина, 4",
                errors: "Низкий заряд аккумулятора",
                dateOpen: "12 августа 2020 в 15:47",
                data: "13 августа 2020 в 09:01",
                serialNumber: "MD4578 KD1405",
                type_ad: "complete",
                icon: "mdi-battery-10",
                color: "#458e3c",
            },
        ],
        users: [],
        headers: [{
                text: "",
                value: "icon"
            },
            {
                text: "",
                value: "evice_bound_neme"
            },
            {
                text: "",
                value: "region_name"
            },
            {
                text: "",
                value: "errors",
            },
            {
                text: "",
                value: "dateOpen",
            },
            {
                text: "",
                value: "serialNumber",
            },
            {
                text: "",
                value: "actions",
            }
        ],
        search: "",
        path: [{
                text: 'Кабинет',
                disabled: false,
                href: 'breadcrumbs_dashboard',
            },
            {
                text: 'Панель управления',
                disabled: false,
                href: 'breadcrumbs_link_1',
            },
            {
                text: 'Обращения',
                disabled: true,
                href: 'breadcrumbs_link_2',
            }
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
            return this.editedIndex === -1 ? "New Item" : "Подробная информация";
        },
        // headers() {
        //     return [{
        //             text: "",
        //             value: "icon"
        //         },
        //         {
        //             text: "",
        //             value: "device_bound_neme"
        //         },
        //         {
        //             text: "",
        //             value: "region_name"
        //         },
        //         {
        //             text: "",
        //             value: "group_name",
        //             filter: value => {
        //                 if (!this.group_name) return true

        //                 return value === this.group_name
        //             },
        //         },
        //         {
        //             text: "",
        //             value: "actions",
        //             sortable: false
        //         },
        //     ]
        // },
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
            // axios.get("/api/pages/work_space").then((response) => {
            //     this.laravelData = response.data;

            // });
            axios.get("/api/pages/work_space/users_select").then((response) => {
                this.users = response.data;

            });
            axios.get("/api/pages/work_space/errors").then((response) => {
                this.errors = response.data;
            });
            this.myLoadVariable = false;
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

<style scoped>
.check--box /deep/ label {
    font-family: 'Montserrat',  sans-serif;
    font-size: 12px!important;
    font-weight: 500;
    font-style: normal;
    margin-bottom: 0;
}
</style>
