
// for the side nav

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

// end side nav

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
                $(".data").append(id);
            });  
           }
       });
    }

}

let a = $(".menu ul li .api");

a.click((e)=>{
    //prevenir l'exception
    e.preventDefault();

    //recuperer la valeur qui se trouve trouve dans l'attribut ID
    var atr = $(e.target).attr("id");

    //mettre en session
     sessionStorage.setItem("val",atr);

     //reload the page
    location.reload();
});

//on reload event
$(document).on('reload',UI.getNews(sessionStorage.getItem("val")));


