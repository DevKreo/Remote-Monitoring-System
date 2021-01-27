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
            <v-col cols="6" md="4" >
              <v-select
                :items="users"
                item-text="name"
                label="Пользователь"
                dense
                class="pa-1"
                color="purple"
              ></v-select>
            </v-col>
          </v-row>
        </v-card>
      </v-row>
    </template>

    <template>
      <v-card  class="d-flex flex-row justify-end" flat tile elevation="0"> 
            <h2 class="references">Обращения <v-icon color="purple">mdi-information</v-icon></h2>
            <v-btn class="mt-1"><caption class="history_button">История обращений</caption></v-btn>
            <v-btn class="mt-1">Добавить обращение</v-btn>
            <v-btn class="mt-1">Убрать все ошибки</v-btn>
      </v-card>
    </template>
    
    
  </v-container>
</template>
<script>
export default {
  data: () => ({
    dialog: false,
    dialogDelete: false,
    expanded: [],
    singleExpand: false,
    laravelData: [],
    users: [],
    search: "",
    headers: [
      {
        text: "",
        align: "start",
        sortable: false,
        value: "data-table-expand",
      },
      { text: "№", value: "id" },
      { text: "Наименование рубежа", value: "device_bound_neme" },
      { text: "Регион", value: "region_name" },
      { text: "Группы рубежей", value: "group_name" },
      { text: "", value: "actions", sortable: false },
    ],
    desserts: [],
    editedIndex: -1,
    editedItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0,
    },
    defaultItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0,
    },
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
      });
      axios.get("/api/pages/work_space/users_select").then((response) => {
        this.users = response.data;
        console.log(this.users);
      });
    },

    editItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialog = true;
    },

    deleteItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialogDelete = true;
    },

    deleteItemConfirm() {
      this.desserts.splice(this.editedIndex, 1);
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
        Object.assign(this.desserts[this.editedIndex], this.editedItem);
      } else {
        this.desserts.push(this.editedItem);
      }
      this.close();
    },
  },
};
</script>
