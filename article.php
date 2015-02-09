<nav class="sub-nav clearfix">
  {{breadcrumbs}}
</nav>
<div class="box-section_name"></div>
<div class="left-box">
  <h4 class="box-back-cat"></h4>
</div>
 <div class = "art-body art-custom">
    <article class="main-column">
    <div class="subtle-wrap" >
      <div class="article-body">
    
    <header class="article-header clearfix" style="margin: 0 0 10px -3px;">
      <h1>{{visibility}} {{title}}</h1>
    </header>
    {{body}}
      </div>

      <div class="article-attachments">
        {{attachments}}
      </div>

     <!-- <footer class="article-footer clearfix">
     

   {{vote}}
      </footer>

      <div class="article-more-questions">
        {{more_questions}}
      </div>-->
    </div>
 <script type="text/javascript">
			$(document).ready(function (){
			  $('.breadcrumbs li:last').hide();
			  var _section = $('.breadcrumbs li:last').children().html(); // get the last child which is the link to section
			  var _category = $( ".breadcrumbs li:nth-child(2)").children().attr('href');// get the link to category
			  $('.box-section_name').html('<h2>'+_section+'</h2>');
			  $('.box-back-cat').html('<a href="'+_category+'">Back to Category</a>');
			});
		</script>
 
