$('#map').usmap({
  // The click action
  click: function(event, data) {
    $('#clicked-state')
      .text('Tu as cliqué sur: '+data.name)
      .parent().effect('highlight', {color: '#C7F464'}, 2000);
  }
});