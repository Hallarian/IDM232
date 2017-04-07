function fade2Content() {
  console.log('fade2Content called');
  document.body.classList.remove("whiteScreen");
}

$('button').click(function() {
  $(this).toggleClass('expanded').siblings('div').slideToggle();
});