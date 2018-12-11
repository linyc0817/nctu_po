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



})
