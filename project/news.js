
let btn = $(".btn");

let menu =$(".menu");

$(btn).click((e)=>{
    e.preventDefault();
    let val = $(menu).css("display");
    if(val ==="none"){
        $(menu).css("display","block");
    }else{
        $(menu).css("display","none");
    }
});


class UI{
    static getNews(atr){
        var urlT ='http://newsapi.org/v2/top-headlines?'+'country='+atr+'&' +
          'apiKey=3327ffba79e345aba967fa7a6ca9a88f';
       $.ajax({
           type:'GET',
           data: { get_param: 'value' }, 
           url:urlT,
           dataType:'json',
           success:function(data){
           //var all = data.articles;
               //console.log(data.articles);
            $.each(data.articles,function(index,el){
                //console.log(el);
                
                var id = $('<div class="div"></div>')
                .html(
            `<a href="${el.url}" target="_blank"><img src="${el.urlToImage}" alt=""></a><br>
            <p>${ el.content }</p>`);
                //$(id).show(2000);
                $('body').append(id);
            });  
           }
       });
    }
}

let a = $(".menu ul li .api");

a.click((e)=>{
    sessionStorage.clear();
    e.preventDefault();
    var atr = $(e.target).attr("id");
    console.log(atr);
     sessionStorage.setItem("val",atr);
    location.reload();
    console.log(sessionStorage.getItem("val"));
});
$(document).on('reload',UI.getNews(sessionStorage.getItem("val")));

//sessionStorage.clear();

