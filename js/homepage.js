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
/*
$(document).ready(function () {
    $('div.top').click(function () {
        // 點擊別的不會衝突 
        sibling = $(this).siblings(".click1")
        if (sibling) {
            sibling.find('div[class^="navbox"]').hide();//div classname started with navbox
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
*/

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
        //顯示 {業務訊息} 內容
        if (this.id == "business-msgs") {
            $(".business-msgs").css("display", 'block');
        } else {
            $(".business-msgs").css("display", 'none');
        }
        //顯示 {法規訊息} 內容
        if (this.id == "legislation-msgs") {
            $(".legislation-msgs").css("display", 'block');
        } else {
            $(".legislation-msgs").css("display", 'none');
        }
        //顯示 {友校訊息} 內容
        if (this.id == "friendSchools-msgs") {
            $(".friendSchools-msgs").css("display", 'block');
        } else {
            $(".friendSchools-msgs").css("display", 'none');
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
            //出國申請
            case 'navboxw7_1':
                $('.msg-board-content.abroad').css('display', 'block');
                break;
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

//class mouse-hover change cursor
$(function () {
    $(".mouse-hover").hover(function () {
        $(this).css('cursor', 'pointer');
    })
})

//法令類別
$(function () {
    function showDetails() { //顯示細項
        if (personnel === null || S === null) {
            return;
        }
        $(".decree-details").hide();
        $("." + personnel + "." + S).show();
        $("#decree-left-flexbox").css('display', 'flex');
        $("#decree-right-flexbox").css('display', 'flex');
        //第二層法條顯示
        $('decree-main-container').hide();
        $('.main' + (S.substr(1))).show();
    }
    var personnel = null; //用來判斷現在點選哪個人員
    var S = null; // 用來判斷現在點選哪個類別

    $(".personnels").click((e) => {
        $(".personnels").css('color', '#F4A22C');
        var personnel_type = event.target.id;
        $(event.target).css('color', 'white');
        if (personnel_type < 1 || personnel_type > 3) {
            return;
        }
        personnel = personnel_type;
        showDetails();
    })

    $(".decree-main").click((e) => {
        var sType = event.target.id;
        var re = /S{1}/
        if (re.test(sType))
            S = sType;
        else
            return;
        $(".decree-main").css('color', '#F4A22C');
        $(event.target).css('color', 'white');
        showDetails();
    })

    $(".decree-detail-articles").click((e) => {
        $(".decree-detail-articles").css('color', '#F4A22C');
        $(event.target).css('color', 'white');


    })
})



