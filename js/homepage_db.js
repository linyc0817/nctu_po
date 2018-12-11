// 訊息公告

function request_msg(msg_data, _type, _page, _data_per_page, _category) {

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
    // 公告頁面主旨 title request
    $.ajax({
        url: 'homepage_db',
        type: "POST",
        data: { type: "msg-title", page: 1, data_per_page: 5, category: "重要訊息" }
    }).done(function (msg) {

        msg_data = [];
        msg = $.parseJSON(msg);
        for (let index = 0; index < msg.length; index++) {
            msg_data.push({ 'id': index, 'title': msg[index].title, 'date': msg[index].date });

        }

        Vue.component('announcement', {
            props: ['item', 'itemTitle', 'itemDate'],
            template: `
            <li> 
                <div :class="itemDate"> {{item.date}} </div>
                <div :class="itemTitle"> {{item.title}} </div>
            </li>`
        })
        var msg_list = new Vue({
            el: ".announcement-container",
            data: {
                items: msg_data
            },
        })

        var msg_page = new Vue({
            el: ".navbox2_2",
            data: {
                page: 0,
                types: ["重要訊息", "業務訊息", "法規訊息", "友校訊息"],
                type_index: 0
            },
            methods: {
                next_page: function (e) {
                    this.page += 1;
                },
            }
        })

    });
})
