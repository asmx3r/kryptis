/*
$(document).ready(function) {
   $('tr').hide().filter(function() {
      return $(this).find('td.atviras').length;
   }).addClass('atidarytas').css('display', 'table-row').click(function() {
      $(this).nextUntil('tr.atidarytas').css('display', function(i, v) {
         return this.style.display === 'table-row' ? 'none' : 'table-row';
      });
   });
}
*/
$(document).ready(function() {
   $('[data-toggle="toggle"]').change(function() {
      $(this).parents().next('.atviras').toggle();
   });
});
