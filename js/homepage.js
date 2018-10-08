// nav hover 展開2個直角梯形
$(document).ready(function () {
    $('div.top').hover(function () {
        //clock
        if (this.id == 'top_6') {
            return;
        }

        $(this).find('div[class^="navbox"]').show();
        $(this).addClass("hover");
        $(".left-side-bar-bg").hide();


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
        $(".left-side-bar-bg").show();
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
        if (this.id == "calendar-msgs") {
            $("#msg-calender").css("display", 'block');
        } else {
            $("#msg-calender").css("display", 'none');
        }
    })

    $("#close-button").click(() => {
        highlight.css('color', '#f4a22c');
        $(".right-bg").css("display", "none");
        $("#close-button").css("display", 'none');
    })

    //行事曆

})

let commentHighlight;
//留言板
$(function () {
    let highlight;
    $(".navbox7-left").hover(function () {
        $(this).css('cursor', 'pointer');
    })
    function comments_hide() {
        $('.msg-board-content.abroad').hide();
        $('.msg-board-content.other-questions').hide();
        $('.msg-board-content.personnel').hide();
        $('.msg-board-content.teachers').hide();
        $('.msg-board-content.part-time').hide();
        $('.msg-board-content.AMS').hide();
        $('.msg-board-content.errand').hide();
        $('.msg-board-content.specialist').hide();
        $('.msg-board-content.postdoctoral').hide();
        $('.msg-board-content.resignation').hide();
    }
    $(".navbox7-left").click(function () {
        $("#navboxrw7_1").css('display', 'none');
        if (commentHighlight) {
            commentHighlight.css('color', '#f4a22c');
        }
        comments_hide();
        switch (this.id) {
            //出國申請
            case 'navboxw7_1':
                $('.msg-board-content.abroad').css('display', 'block');
                break;
            //全時工讀生
            case 'navboxw7_2':
                $('.msg-board-content.part-time').css('display', 'block');
                break;
            //其他問題
            case 'navboxw7_3':
                $('.msg-board-content.other-questions').css('display', 'block');
                break;
            //研發替代役
            case 'navboxw7_4':
                $('.msg-board-content.AMS').css('display', 'block');
                break;
            //約用人員
            case 'navboxw7_5':
                $('.msg-board-content.personnel').css('display', 'block');
                break;
            //差勤
            case 'navboxw7_6':
                $('.msg-board-content.errand').css('display', 'block');
                break;
            //專兼任計畫人員
            case 'navboxw7_7':
                $('.msg-board-content.specialist').css('display', 'block');
                break;
            //專兼任教師
            case 'navboxw7_8':
                $('.msg-board-content.teachers').css('display', 'block');
                break;
            //博士後研究員
            case 'navboxw7_9':
                $('.msg-board-content.postdoctoral').css('display', 'block');
                break;
            //離職問題
            case 'navboxw7_10':
                $('.msg-board-content.resignation').css('display', 'block');
                break;
            default:
            //alert(this.id);
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
    $("#prev-page").click((e) => {
        $('decree-main-container').show();
        $("#decree-left-flexbox").hide();
        $("#decree-right-details-container").hide();
        $(".decree-item").css("color", "#F4A22C");
    })


    function showDetails() { //顯示細項
        if (personnel === null || S === null) {
            return;
        }
        $(".decree-details").hide();
        $("." + personnel + "." + S).show();
        $("#decree-left-flexbox").css('display', 'flex');
        //$("#decree-right-flexbox").css('display', 'flex');
        $("#decree-right-details-container").css('display', 'flex');
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

    //法條點選後 右邊decree-right顯示
    $(".decree-detail-articles").click((e) => {
        $(".decree-detail-articles").css('color', '#F4A22C');
        $(event.target).css('color', 'white');
        let all_classes = $(event.target).attr("class");
        let clicked_postid = all_classes.match(/post_\w+/)[0];
        //console.log(clicked_postid);
        $('.decree-right-item-container').hide();
        $('.decree-right-item-container' + ('.' + clicked_postid)).first().show();

    })

})

//關於本室右邊選項click
$(function () {
    $("div[id^='navboxw1_2_']").click((e) => {
        //$("#navboxw1").hide();
        //$("#navboxw1_2").hide();
    });
})

// 本室介紹下各頁面
$(function () {
    function change_css(DOMstring, css) {
        $(DOMstring).css(css);
    }
    function intro_hide_others() {
        $("#intro_page").hide();
        $("#vision_page").hide();
        $("#intro_position").hide();
    }
    let new_css = { "position": "fixed", "top": "40%" }; // 移動簡介選單
    $("#navboxw1_2_1").click(() => {
        intro_hide_others();
        $("#intro_page").show();
        change_css("#navboxw1_2", new_css);
    })
    $("#navboxw1_2_4").click(() => {
        intro_hide_others();
        $("#vision_page").show();
        change_css("#navboxw1_2", new_css);
    })
    $("#navboxw1_2_2").click(() => {
        intro_hide_others();
        $("#intro_position").show();
        change_css("#navboxw1_2", new_css);
    })

})

//簡介區的圓圈
$(document).ready(function () {
    $('div.h1').hover(function () {
        $('.cb1').show();
    }, function () {
        $('.cb1').hide();
    });
});

$(document).ready(function () {
    $('div.h2').hover(function () {
        $('.cb2').show();
    }, function () {
        $('.cb2').hide();
    });
});

$(document).ready(function () {
    $('div.h3').hover(function () {
        $('.core-value-context').show();
        $('.cb3').show();
        $(".cb3-title").show();
    }, function () {
        $('.core-value-context').hide();
        $('.cb3').hide();
        $(".cb3-title").hide();
    });

});

$(document).ready(function () {
    $('div.h4').hover(function () {
        $('.cb4').show();
    }, function () {
        $('.cb4').hide();
    });
});
//本事位置 slider bar control
$(function () {
    $("#school_map_circle").click(() => {
        $(".position_page").hide();
        $(".position_page.pp1").show();
    })
    $("#google_map_circle").click(() => {
        $(".position_page").hide();
        $(".position_page.pp2").show();
    })
    $("#transport_circle").click(() => {
        $(".position_page").hide();
        $(".position_page.pp3").show();
    })
})

