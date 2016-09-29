/**
 * Created by hugb on 16/4/26.
 */
function displayDate()
{
    //document.getElementById("demo").innerHTML = Date();
    //x=document.getElementById("demo")  //查找元素
    //x.innerHTML="Hello JavaScript";    //改变内容
    //x.style.color="#3ba924"
    //a = 5;
    //b = 6;
    //c = a + b;
    //console.log(c);
    //document.write("<h1>这是一个标题</h1>");
    // document.write("<p>这是一个段落。</p>");
    console.log('gtttr4ty');
    var  s='false';
    var w=!!s;
    alert(w);
    console.log(w);
}

function changeImage()
{
  var   element=document.getElementById('myimage')

    console.log(element.src);

    if (element.src.match('images/8.jpg'))
    {
        element.src="images/9.jpg";
    }
    else
    {
        element.src="images/8.jpg";
    }
    //$("myimage").css("background-size", "100% 100%");
    $('button').css({"color":"red","background-color":"bule"});
}
//$(window).onload = function(){
//
//    alert('load');
//}

window.onload = function(){

   // alert('load');

    $('.btn').on("click",function(){
        alert('malgei');
    });
}
// $(window).on('load', function () {
//
//    alert('load');
//});



