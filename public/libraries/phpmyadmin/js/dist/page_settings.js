function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : String(i); }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
/**
 * @fileoverview    function used for page-related settings
 * @name            Page-related settings
 *
 * @requires    jQuery
 * @requires    jQueryUI
 * @required    js/functions.js
 */

function showSettings(selector) {
  var buttons = _defineProperty(_defineProperty({}, Messages.strApply, {
    text: Messages.strApply,
    "class": 'btn btn-primary'
  }), Messages.strCancel, {
    text: Messages.strCancel,
    "class": 'btn btn-secondary'
  });
  buttons[Messages.strApply].click = function () {
    $('.config-form').trigger('submit');
  };
  buttons[Messages.strCancel].click = function () {
    $(this).dialog('close');
  };

  // Keeping a clone to restore in case the user cancels the operation
  var $clone = $(selector + ' .page_settings').clone(true);
  $(selector).dialog({
    classes: {
      'ui-dialog-titlebar-close': 'btn-close'
    },
    title: Messages.strPageSettings,
    width: 700,
    minHeight: 250,
    modal: true,
    open: function open() {
      $(this).dialog('option', 'maxHeight', $(window).height() - $(this).offset().top);
    },
    close: function close() {
      $(selector + ' .page_settings').replaceWith($clone);
    },
    buttons: buttons
  });
}
function showPageSettings() {
  showSettings('#page_settings_modal');
}
function showNaviSettings() {
  showSettings('#pma_navigation_settings');
}
AJAX.registerTeardown('page_settings.js', function () {
  $('#page_settings_icon').css('display', 'none');
  $('#page_settings_icon').off('click');
  $('#pma_navigation_settings_icon').off('click');
});
AJAX.registerOnload('page_settings.js', function () {
  if ($('#page_settings_modal').length) {
    $('#page_settings_icon').css('display', 'inline');
    $('#page_settings_icon').on('click', showPageSettings);
  }
  $('#pma_navigation_settings_icon').on('click', showNaviSettings);
});