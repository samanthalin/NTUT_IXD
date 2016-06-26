//------------------- Window size -------------------------//
var outWindowWidth = window.outerWidth;
var outWindowHeight = window.outerHeight;
//alert(outWindowWidth + " x " + outWindowHeight);
//------------------- Window size End-------------------------//

//------------------- Hover affect -------------------------//
function ChangeColWidth_1() {
    if (outWindowWidth <= 767 && outWindowHeight <= 767) {
        document.getElementById("Col1").style.zIndex = "10";
        document.getElementById("col_row_text_1").style.background = "#2c2c2c";
        document.getElementById("col_row_text_1").style.color = "#ffffff";
        document.getElementById("col_row_text_1").style.top = "20vw";
    }
    else {
        document.getElementById("Col1").style.zIndex = "10";
        document.getElementById("Col1").style.width = "26.5%";
        document.getElementById("col_row_text_1").style.background = "#2c2c2c";
        document.getElementById("col_row_text_1").style.color = "#ffffff";
        document.getElementById("col_row_text_1").style.top = "78%";
    }
}
function ChangeColWidth_2() {
    if (outWindowWidth <= 767 && outWindowHeight <= 767) {
        document.getElementById("Col2").style.zIndex = "10";
        document.getElementById("col_row_text_2").style.background = "#2c2c2c";
        document.getElementById("col_row_text_2").style.color = "#ffffff";
        document.getElementById("col_row_text_2").style.top = "40%";
    }
    else {
        document.getElementById("Col2").style.zIndex = "10";
        document.getElementById("Col2").style.width = "28%";
        document.getElementById("Col2").style.left = "23.5%";
        document.getElementById("col_row_text_2").style.background = "#2c2c2c";
        document.getElementById("col_row_text_2").style.color = "#ffffff";
        document.getElementById("col_row_text_2").style.top = "78%";
    }
}
function ChangeColWidth_3() {
    if (outWindowWidth <= 767 && outWindowHeight <= 767) {
        document.getElementById("Col3").style.zIndex = "10";
        document.getElementById("col_row_text_3").style.background = "#2c2c2c";
        document.getElementById("col_row_text_3").style.color = "#ffffff";
        document.getElementById("col_row_text_3").style.top = "40%";
    }
    else {
        document.getElementById("Col3").style.zIndex = "10";
        document.getElementById("Col3").style.width = "28%";
        document.getElementById("Col3").style.left = "48.5%";
        document.getElementById("col_row_text_3").style.background = "#2c2c2c";
        document.getElementById("col_row_text_3").style.color = "#ffffff";
        document.getElementById("col_row_text_3").style.top = "78%";
    }
}
function ChangeColWidth_4() {
    if (outWindowWidth <= 767 && outWindowHeight <= 767) {
        document.getElementById("Col4").style.zIndex = "10";
        document.getElementById("col_row_text_4").style.background = "#2c2c2c";
        document.getElementById("col_row_text_4").style.color = "#ffffff";
        document.getElementById("col_row_text_4").style.top = "40%";
    }
    else {
        document.getElementById("Col4").style.zIndex = "10";
        document.getElementById("Col4").style.width = "28%";
        document.getElementById("Col4").style.left = "73.5%";
        document.getElementById("col_row_text_4").style.background = "#2c2c2c";
        document.getElementById("col_row_text_4").style.color = "#ffffff";
        document.getElementById("col_row_text_4").style.top = "78%";
    }
}
function ChangeColWidthBack() {
    if (outWindowWidth <= 767 && outWindowHeight <= 767) {
        document.getElementById("Col1").style.zIndex = "1";
        document.getElementById("Col2").style.zIndex = "1";
        document.getElementById("Col3").style.zIndex = "1";
        document.getElementById("Col4").style.zIndex = "1";
        document.getElementById("Col1").style.width = "50%";
        document.getElementById("Col2").style.width = "50%";
        document.getElementById("Col3").style.width = "50%";
        document.getElementById("Col4").style.width = "50%";
        document.getElementById("col_row_text_1").style.background = "#ffffff";
        document.getElementById("col_row_text_1").style.color = "#2c2c2c";
        document.getElementById("col_row_text_2").style.background = "#ffffff";
        document.getElementById("col_row_text_2").style.color = "#2c2c2c";
        document.getElementById("col_row_text_3").style.background = "#ffffff";
        document.getElementById("col_row_text_3").style.color = "#2c2c2c";
        document.getElementById("col_row_text_4").style.background = "#ffffff";
        document.getElementById("col_row_text_4").style.color = "#2c2c2c";
        document.getElementById("col_row_text_1").style.top = "45%";
        document.getElementById("col_row_text_2").style.top = "45%";
        document.getElementById("col_row_text_3").style.top = "45%";
        document.getElementById("col_row_text_4").style.top = "45%";
    }
    else {
        document.getElementById("Col1").style.zIndex = "1";
        document.getElementById("Col2").style.zIndex = "1";
        document.getElementById("Col3").style.zIndex = "1";
        document.getElementById("Col4").style.zIndex = "1";
        document.getElementById("Col1").style.width = "25%";
        document.getElementById("Col2").style.width = "25%";
        document.getElementById("Col3").style.width = "25%";
        document.getElementById("Col4").style.width = "25%";
        document.getElementById("Col1").style.left = "0%";
        document.getElementById("Col2").style.left = "25%";
        document.getElementById("Col3").style.left = "50%";
        document.getElementById("Col4").style.left = "75%";
        document.getElementById("col_row_text_1").style.background = "#ffffff";
        document.getElementById("col_row_text_1").style.color = "#2c2c2c";
        document.getElementById("col_row_text_2").style.background = "#ffffff";
        document.getElementById("col_row_text_2").style.color = "#2c2c2c";
        document.getElementById("col_row_text_3").style.background = "#ffffff";
        document.getElementById("col_row_text_3").style.color = "#2c2c2c";
        document.getElementById("col_row_text_4").style.background = "#ffffff";
        document.getElementById("col_row_text_4").style.color = "#2c2c2c";
        document.getElementById("col_row_text_1").style.top = "80%";
        document.getElementById("col_row_text_2").style.top = "80%";
        document.getElementById("col_row_text_3").style.top = "80%";
        document.getElementById("col_row_text_4").style.top = "80%";
    }
}
//------------------- Hover affect End-------------------------//
