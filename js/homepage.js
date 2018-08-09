// nav hover 展開2個直角梯形
$(document).ready(function () {
    $('div.top').hover(function () {
        //stupid clock
        if (this.id == 'top_6') {
            return;
        }

        $(this).find('div[class^="navbox"]').show();
        $(this).addClass("hover");


    }, function () {
        //留言板預設行
        $("#navboxrw7_1").css('display', 'inline-block');
        $(".msg-board-content").css('display', 'none');
        if (commentHighlight) {
            commentHighlight.css('color', '#f4a22c');
        }
        //
        $(this).find('div[class^="navbox"]').hide();
        $(this).removeClass("hover");
    });

});



// nav click 展開2個直角梯形
$(document).ready(function () {
    $('div.top').click(function () {
        // 點擊別的不會衝突 
        sibling = $(this).siblings(".click1")
        if (sibling) {
            sibling.find('div[class^="navbox"]').hide();
            sibling.removeClass("click1");
            sibling.find('div[id^="nav"]').removeClass("click1");
        }
        // 點擊show&hide
        if ($(this).hasClass("click1")) {
            $(this).find('div[class^="navbox"]').hide();
            $(this).removeClass("click1");
            $(this).find('div[id^="nav"]').removeClass("click1");
        } else {
            $(this).find('div[class^="navbox"]').show();
            $(this).addClass("click1");
            $(this).find('div[id^="nav"]').addClass("click1");
        }
    });
});

//left-side-bar
$(function () {
    $(".left-side-bar-element").hover(function () {
        $(this).css('cursor', 'pointer');
    })

    let highlight;
    $(".left-side-bar-element").click(function () {
        if (highlight) {
            highlight.css('color', '#f4a22c');
        }

        highlight = $(this);
        $("#close-button").css("display", 'block');
        $(this).css("color", "#FFFFFF");
        $(".right-bg").css("display", "inline");
        //顯示 {重要訊息} 內容
        if (this.id == "important-msgs") {
            $(".important-msgs").css("display", 'block');
        } else {
            $(".important-msgs").css("display", 'none');
        }
    })

    $("#close-button").click(() => {
        highlight.css('color', '#f4a22c');
        $(".right-bg").css("display", "none");
        $("#close-button").css("display", 'none');
    })

})

let commentHighlight;
//留言板
$(function () {
    let highlight;
    $(".navbox7-left").hover(function () {
        $(this).css('cursor', 'pointer');
    })

    $(".navbox7-left").click(function () {
        $("#navboxrw7_1").css('display', 'none');
        if (commentHighlight) {
            commentHighlight.css('color', '#f4a22c');
        }
        switch (this.id) {
            //其他問題
            case 'navboxw7_3':
                $('.msg-board-content.other-questions').css('display', 'block');
                break;
            //約用人員
            case 'navboxw7_5':
                $('.msg-board-content.personnel').css('display', 'block');
                break;
            case 'navboxw7_8':
                $('.msg-board-content.teachers').css('display', 'block');
                break;
            default:
                alert(this.id);
        }

        commentHighlight = $(this);
        $(this).css("color", "#FFFFFF");
    })

});