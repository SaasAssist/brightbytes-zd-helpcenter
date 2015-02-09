/*
 * jQuery v1.9.1 included
 */

$(document).ready(function() {
   $(window).resize(function(){
        $('.box-l1').outerHeight($('.box-l1').outerWidth());
    }).resize();

  // social share popups
  $(".share a").click(function(e) {
    e.preventDefault();
    window.open(this.href, "", "height = 500, width = 500");
  });

  // toggle the share dropdown in communities
  $(".share-label").on("click", function(e) {
    e.stopPropagation();
    var isSelected = this.getAttribute("aria-selected") == "true";
    this.setAttribute("aria-selected", !isSelected);
    $(".share-label").not(this).attr("aria-selected", "false");
  });

  $(document).on("click", function() {
    $(".share-label").attr("aria-selected", "false");
  });

  // show form controls when the textarea receives focus or backbutton is used and value exists
  var $answerbodyTextarea = $(".answer-body textarea"),
  $answerFormControls = $(".answer-form-controls"),
  $commentContainerTextarea = $(".comment-container textarea"),
  $commentContainerFormControls = $(".comment-form-controls");

  $answerbodyTextarea.one("focus", function() {
    $answerFormControls.show();
  });

  $commentContainerTextarea.one("focus", function() {
    $commentContainerFormControls.show();
  });

  if($commentContainerTextarea.val() !== "") {
    $commentContainerFormControls.show();
  }

  if($answerbodyTextarea.val() !== "") {
    $answerFormControls.show();
  }

$(".section-tree-with-article li a").removeAttr("aria-selected").removeAttr("data-asynchtml-ressource");

});


