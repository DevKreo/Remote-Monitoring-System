<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            app
            class="rounded-card"
            color="#050c42"
        >
            <v-list-item two-line>
                <v-list-item-content>
                    <v-list-item-title
                        class="purple--text darken-3--text ml-6"
                        id="SDM"
                        >SDM</v-list-item-title
                    >
                    <v-list-item-subtitle
                        class="grey--text lighten-5--text ml-6"
                        id="subtitle"
                        >Система дистанционного
                        мониторинга</v-list-item-subtitle
                    >
                </v-list-item-content>
            </v-list-item>

            <v-list dense>
                <v-list-item-group v-model="selectedItem" color="text" dark>
                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon>mdi-arrow-left-drop-circle-outline</v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title class="white--text"
                                >Свернуть</v-list-item-title
                            >
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item
                        v-for="(item, i) in pagesUP"
                        :key="i"
                        mandatory
                    >
                        <v-list-item-icon>
                            <v-icon v-text="item.icon"></v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <div v-if="item.counter">
                                <v-badge color="error" inline>
                                    <v-list-item-title
                                        v-text="item.text"
                                        class="white--text"
                                        depressed
                                    >
                                    </v-list-item-title>
                                    <template v-slot:badge>{{
                                        counter_records
                                    }}</template>
                                </v-badge>
                            </div>
                            <v-list-item-title
                                v-else
                                v-text="item.text"
                                class="white--text"
                                depressed
                            >
                            </v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>

            <v-list dense>
                <v-list-item>
                    <v-list-item-group>
                        <v-list-item
                            v-for="(item, i) in pagesDOWN"
                            :key="i"
                            mandatory
                        >
                            <v-list-item-content>
                                <v-list-item-subtitle
                                    v-text="item.text"
                                    class="white--text text-decoration-underline"
                                ></v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list-item-group>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        counter_records: 0,
        drawer: true,
        selectedItem: 1,
        pagesUP: [
            { text: "Обращения", icon: "mdi-bookmark", counter: true },
            {
                text: "Отчеты",
                icon: "mdi-checkbox-multiple-blank mdi-rotate-180",
                counter: true
            },
            { text: "Расписание", icon: "mdi-calendar-range", counter: false },
            { text: "Карта", icon: "mdi-map-marker mdi-spin", counter: false },
            { text: "Сводка", icon: "mdi-flash", counter: false }
        ],
        pagesDOWN: [
            { text: "Устройства" },
            { text: "Рубежи" },
            { text: "Пользователи" },
            { text: "Справочники СДМ" },
            { text: "История операций" },
            { text: "Информация о системе" }
        ],
        colors: [
          {color: "success"},
          {color: "error"},
        ]
    }),
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get("/api/pages/work_space/count").then(response => {
                this.counter_records = response.data;
            });
        }
    }
};
</script>
