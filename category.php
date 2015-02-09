<nav class="sub-nav clearfix">
  {{breadcrumbs}}
</nav>

<section class="clearfix">
  <h1>{{title}}</h1>
  <p class="category-description">{{description}}</p>
  <div class = "art-list art-list-l1">
 {{section_list}}
  </div>
  <div class = "art-body art-body-l1">
    {{section_tree_with_article}}
  </div>
</section>

<script>
 $(document).ready(function (){
   app.listener();
   app.toggle_article();
  var queries = "" ;
  $.each(document.location.search.substr(1).split('&'),function(c,q){
    var i = q.split('=');
    queries = i[1].toString();
  });
if(queries === "case"){  
$('.breadcrumbs').find(' > li:first-child').after('<li><a href="/hc/en-us?q=cas"> Case</a></li>');
}
if(queries === "clarity"){ 
  $('.breadcrumbs').find(' > li:first-child').after('<li><a href="/hc/en-us"> Clarity</a></li>');
}
if(queries === "ewarning"){
   $('.breadcrumbs').find(' > li:first-child').after('<li><a href="/hc/en-us?q=ewarn"> Early Warning</a></li>');
}

 
 });
 var app = {
   listener: function(){
      $('.section-tree-with-article').find('ul').find('li').first().addClass('active-list');
 $('.section-list').find('li').first().find('a').addClass('active');
      $( ".section-list li a" ).click(function(e){ 
      $('a').removeClass('active'); // remove current active link
      $(this).addClass('active');
      $('.section').removeClass('active-list');
      var _p = $(this).html();
      $(this).parents('.clearfix').find('.art-body').find('h2').each(function(){
          var _h = $(this).html(); // get article header 
          if(_h == _p){
            // compare header
            $(this).parent().addClass('active-list');
          }
            
        });
        e.preventDefault();
    });   
   }
 }
 
 /* clickable article list bullet */
  
  $("ul.article-list > li a").click(function(){
    $(this).parent().toggleClass('clicked');
  });
  
</script>