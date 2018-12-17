// 訊息公告

function request_msg(_type, _page, _data_per_page, _category) {

    $.ajax({
        url: 'homepage_db',
        type: "POST",
        data: { type: _type, page: _page, data_per_page: _data_per_page, category: _category }
    }).done(function (msg) {
        msg = $.parseJSON(msg);
        for (let index = 0; index < msg.length; index++) {
            msg_data.push({ 'id': index, 'title': msg[index].title, 'date': msg[index].date });
        }
    });

}


$(function () {
    Vue.component('announcementTitle', {
        props: ['title'],
        template: '<li><div class="msg-date">{{title.date}}</div> <div class="msg-title">{{title.title}}</div></li>'
    })
    var announcementContainer = new Vue({
        el: '.announcement-container',
        data: {
            msg_titles: [],
            category: "重要訊息",
            page: 1,
            data_per_page: 5
        },
        methods: {
            fetch_data: function (_page, _category) {
                var vm = this;
                $.ajax({
                    url: 'homepage_db',
                    type: "POST",
                    data: { type: "msg-title", page: _page, data_per_page: vm.data_per_page, category: _category }
                }).done(function (msg) {
                    msg = $.parseJSON(msg);
                    msg_titles = []
                    for (let index = 0; index < msg.length; index++) {
                        msg_titles.push({ id: index, title: msg[index].title, date: msg[index].date });
                    }
                    vm.msg_titles = Object.assign({}, msg_titles);
                    this.category = _category;
                    this.page = _page;
                });
            },
            next_page: function () {
                this.page++;
                this.fetch_data(this.page, this.category);

            },
            prev_page: function () {
                this.page--;
                this.page = Math.max(this.page, 1);
                this.fetch_data(this.page, this.category);
            }
        },
        created: function () {
            this.fetch_data(1, this.category);

        }


    })




})
