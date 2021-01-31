<template>
<v-app id="inspire">
    <v-navigation-drawer v-model="drawer" :mini-variant.sync="mini" width="330"  app class="rounded-card"  color="#050c42">
        <v-list-item two-line class="mb-4">
            <v-list-item-content>
                <v-list-item-title class="ml-6" id="SDM">SDM</v-list-item-title>
                <v-list-item-subtitle class="grey--text lighten-5--text ml-6" id="subtitle">cистема дистанционного мониторинга</v-list-item-subtitle>
            </v-list-item-content>
        </v-list-item>
        <v-list>
            <v-divider class="divider div-transparent"></v-divider>
            <v-list-item-group v-model="selectedItem" dark>
                <v-list-item @click.stop="mini = !mini">
                    <v-list-item-icon v-if="!mini">
                        <v-icon color="#6633ff">mdi-chevron-left</v-icon>
                    </v-list-item-icon>
                    <v-list-item-icon v-else>
                        <v-icon color="#6633ff">mdi-chevron-left</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title class="white--text roll-up">Свернуть</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <div v-for="(item, i) in pagesUP" :key="i" mandatory class="first-list">
                    <div class="divider div-transparent"></div>
                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon v-text="item.icon" color="#333a6d"></v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <div v-if="item.counter" id="color-list">
                                <v-badge :color="item.color" inline>
                                    <v-list-item-title v-text="item.text" depressed>
                                    </v-list-item-title>
                                    <template v-slot:badge>{{ item.num }}</template>
                                </v-badge>
                            </div>
                            <v-list-item-title v-else v-text="item.text" id="color-list" depressed>
                            </v-list-item-title>
                        </v-list-item-content>
                        <v-btn v-if="item.plus" class="button-add" elevation="2" icon small>
                            <v-icon small color="white"> mdi-plus </v-icon>
                        </v-btn>
                    </v-list-item>
                    <div class="divider div-transparent"></div>
                </div>
            </v-list-item-group>
        </v-list>
        <v-list dense v-if="!mini" id="styled-list-group">
            <v-list-item>
                <v-list-item-group>
                    <v-list-item v-for="(item, i) in pagesDOWN" :key="i" mandatory>
                        <v-list-item-content>
                            <v-list-item-subtitle v-text="item.text" class="text-decoration-underline" id="color-list"></v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list-item>
        </v-list>

    </v-navigation-drawer>

    <v-main style="pading: 0px 0px 0px 330px">
        <router-view></router-view>
    </v-main>
</v-app>
</template>

<script>
export default {
    data: () => ({
        mini: false,
        drawer: true,
        selectedItem: 1,
        model: 1,
        pagesUP: [{
                text: "Обращения",
                icon: "mdi-bookmark",
                counter: true,
                color: "error",
                num: 0,
                plus: true,
            },
            {
                text: "Отчеты",
                icon: "mdi-checkbox-multiple-blank mdi-rotate-180",
                counter: true,
                color: "success",
                num: 0,
                plus: true,
            },
            {
                text: "Расписание",
                icon: "mdi-calendar-range",
                counter: false,
                plus: true
            },
            {
                text: "Карта",
                icon: "mdi-map-marker mdi-spin",
                counter: false
            },
            {
                text: "Сводка",
                icon: "mdi-flash",
                counter: false
            },
        ],
        pagesDOWN: [{
                text: "Устройства"
            },
            {
                text: "Рубежи"
            },
            {
                text: "Пользователи"
            },
            {
                text: "Справочники СДМ"
            },
            {
                text: "История операций"
            },
            {
                text: "Информация о системе"
            },
        ],
    }),
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get("/api/pages/work_space/count").then((response) => {
                this.pagesUP[0].num = response.data;
                console.log(this.counter_records);
            });
            axios.get("/api/pages/work_space/report/count").then((response) => {
                this.pagesUP[1].num = response.data;
                console.log(this.counter_records);
            });
        },
    },
};
</script>
