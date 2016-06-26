// Array of images to swap between
var images_wu = [];
var images_lee = [];
var images_tsau = [];
var images_chen = [];
var images_wang = [];
var images_cheng = [];
var images_tai = [];
var images_lung = [];
var images_ko = [];  //先定義老師的照片們
var images_teachers = [];

images_wu = ['./images/wu01.png','./images/wu02.png', './images/wu03.png', './images/wu04.png',
    './images/wu05.png', './images/wu06.png', './images/wu07.png', './images/wu08.png']
images_lee  = ['./images/lee01.png','./images/lee02.png', './images/lee03.png', './images/lee04.png',
    './images/lee05.png', './images/lee06.png', './images/lee07.png', './images/lee08.png'];
images_tsau = ['./images/tsau01.png','./images/tsau02.png', './images/tsau03.png', './images/tsau04.png',
    './images/tsau05.png', './images/tsau06.png', './images/tsau07.png', './images/tsau08.png'];
images_chen = ['./images/chen01.png','./images/chen02.png', './images/chen03.png', './images/chen04.png',
    './images/chen05.png', './images/chen06.png', './images/chen07.png', './images/chen08.png'];
images_wang = ['./images/wang01.png','./images/wang02.png', './images/wang03.png', './images/wang04.png',
    './images/wang05.png', './images/wang06.png', './images/wang07.png', './images/wang08.png'];
images_cheng = ['./images/cheng01.png','./images/cheng02.png', './images/cheng03.png', './images/cheng04.png',
    './images/cheng05.png', './images/cheng06.png', './images/cheng07.png', './images/cheng08.png'];
images_tai = ['./images/tai01.png','./images/tai02.png', './images/tai03.png', './images/tai04.png',
    './images/tai05.png', './images/tai06.png', './images/tai07.png', './images/tai08.png'];
images_lung = ['./images/lung01.png','./images/lung02.png', './images/lung03.png', './images/lung04.png',
    './images/lung05.png', './images/lung06.png', './images/lung07.png', './images/lung08.png'];
images_ko = ['./images/ko01.png','./images/ko02.png', './images/ko03.png', './images/ko04.png',
    './images/ko05.png', './images/ko06.png', './images/ko07.png', './images/ko08.png'];


var j = 0;
function scrollimg() {
            
            if (j < 7) {  //7=imges_wu length
                j = j + 0.25; //use j +number to control the speed .if you want slower, used j+0.1.
                //alert(j);
            }
            else if (j = 7) {
                j = 0;
            }
            $('.wu01').attr('src', images_wu[j]);  //images_wu[j] 要對應到對應的名稱
    //<div class="teacher_detail_img"><img class="wu01" src="../images/Wu01.png"></div>  每個圖片都要給上class
            $('.lee01').attr('src', images_lee[j]);
            $('.tsau01').attr('src', images_tsau[j]);
            $('.chen01').attr('src', images_chen[j]);
            $('.wang01').attr('src', images_wang[j]);
            $('.cheng01').attr('src', images_cheng[j]);
            $('.tai01').attr('src', images_tai[j]);
            $('.lung01').attr('src', images_lung[j]);
            $('.ko01').attr('src', images_ko[j]);

            //alert('j = '+j);
}

//到每個老師裡面打上 <div id="single-post-container" onscroll="scrollimg();">