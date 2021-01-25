<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer" app class="rounded-card" color="#050c42">
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="title purple--text darken-3--text"><h1>SDM</h1></v-list-item-title>
          <v-list-item-subtitle class="purple--text darken-3--text">Система дистанционного мониторинга</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
      
      <v-list shaped>
        <v-list-item-group v-model="selectedItem" color="text" dark>
          <v-list-item v-for="(item, i) in pagesUP" :key="i" mandatory>
            <v-list-item-icon>
              <v-icon v-text="item.icon"></v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title
                v-text="item.text"
              ></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list-item-group>
      </v-list>

      <br />
      <br />
      <br />
      <br />

      <v-list shaped>
        <v-list-item>
          <v-list-item-group>
            <v-list-item v-for="(item, i) in pagesDOWN" :key="i" mandatory>
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
      <test-table></test-table>
    </v-main>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    drawer: true,
    selectedItem: 1,
    pagesUP: [
      { text: "Свернуть", icon: "mdi-arrow-left-drop-circle-outline" },
      { text: "Обращения", icon: "mdi-bookmark" },
      { text: "Отчеты", icon: "mdi-checkbox-multiple-blank mdi-rotate-180" },
      { text: "Расписание", icon: "mdi-calendar-range" },
      { text: "Карта", icon: "mdi-map-marker mdi-spin" },
      { text: "Сводка", icon: "mdi-flash" },
    ],
    pagesDOWN: [
      { text: "Устройства" },
      { text: "Рубежи" },
      { text: "Пользователи" },
      { text: "Справочники СДМ" },
      { text: "История операций" },
      { text: "Информация о системе" },
    ],
  }),
};
</script>



