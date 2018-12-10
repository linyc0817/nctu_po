// 訊息公告

$(function () {

    var msg_data = [];
    // 公告頁面主旨 title request
    $.ajax({
        url: 'homepage_db',
        type: "POST",
        data: { type: "msg-title", page: 1, data_per_page: 5, category: "重要訊息" }

    }).done(function (msg) {
        console.log(msg);
        msg = $.parseJSON(msg);

        for (let index = 0; index < msg.length; index++) {
            const cur = msg[index];
            msg_data.push({ id: (index + 10), title: cur.title, date: cur.date });
        }

    });


    Vue.component('announcement-container', {
        props: ['item', 'titleClass','dateClass'],
        template: `
            <li> 
                <div :class="dateClass"> {{item.date}}</div>
                <div :class="titleClass">{{item.title}}</div>
            </li>`
    })

    var msg_list = new Vue({

        el: ".announcement-container",
        data: {
            items: msg_data
        }
    })
})
