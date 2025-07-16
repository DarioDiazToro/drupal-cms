(function ($, Drupal) {
  Drupal.behaviors.toggleShareButtons = {
    attach: function (context, settings) {
      $('.share-toggle', context).once('toggleShare').on('click', function () {
        $(this).closest('.views-row').find('.share-icons').toggleClass('hidden');
      });
    }
  };
})(jQuery, Drupal);
