<template>
<div class="sidebar">
    <div class="Logo">
        <h1 id="SDM">SDM</h1>
        <p id="subtitle">система дистанционного мониторинга</p>
    </div>
    <div class="divider div-transparent"></div>
    <div class="roll-up">
        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left fa-lg"></i>Свернуть</a>
    </div>
    <div class="divider div-transparent"></div>
    <div class="first-list" v-for="item in pagesUP">
        <a href="#" class="list-group-item list-group-item-action">
            <i :class="item.icon"></i>
            {{item.text}}
            <span v-if="item.counter===true" class="badge rounded-pill bg-danger" id="custom-badge">9</span>
            <button v-if="item.plus" type="button" class="btn btn-default btn-circle"><i class="fas fa-plus" style="color: #fff" ></i></button>
        </a>
        <div class="divider div-transparent"></div>
    </div>
    <div class="list-wrapper">
        <div id="styled-list-group" v-for="item in pagesDOWN">
            <a href="#" class="list-group-item list-group-item-action">{{item.text}}</a>
        </div>
    </div>

</div>
</template>

<script>
export default {
    data: () => ({
        pagesUP: [{
                text: "Рубежи",
                icon: "fas fa-location-arrow fa-lg",
                counter: false,
                num: 0,
                plus: true,
            },
            {
                text: "Устройства",
                icon: "fas fa-video fa-lg",
                counter: false,
                num: 0,
                plus: true,
            },
            {
                text: "Обращения",
                icon: "fas fa-bookmark fa-lg",
                counter: true,
                color: "error",
                num: 0,
                plus: true
            },
            {
                text: "Отчеты",
                icon: "fas fa-clone fa-lg",
                counter: true,
                color: "success",
                num: 0,
                plus: true,
            },
            {
                text: "Карта",
                icon: "fas fa-map-marker-alt fa-lg",
                counter: false
            },
            {
                text: "Сводка",
                icon: "fas fa-bolt fa-lg",
                counter: false
            },
        ],
        pagesDOWN: [{
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
};
</script>
