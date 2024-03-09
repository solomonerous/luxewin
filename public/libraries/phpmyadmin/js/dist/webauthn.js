function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
/**
 * @param {ArrayBuffer} buffer
 *
 * @return {string}
 */
var arrayBufferToBase64 = function arrayBufferToBase64(buffer) {
  var bytes = new Uint8Array(buffer);
  var string = '';
  var _iterator = _createForOfIteratorHelper(bytes),
    _step;
  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var _byte = _step.value;
      string += String.fromCharCode(_byte);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
  return window.btoa(string);
};

/**
 * @param {string} string
 *
 * @return {Uint8Array}
 */
var base64ToUint8Array = function base64ToUint8Array(string) {
  return Uint8Array.from(window.atob(string), function (_char) {
    return _char.charCodeAt(0);
  });
};

/**
 * @param {JQuery<HTMLElement>} $input
 *
 * @return {void}
 */
var handleCreation = function handleCreation($input) {
  var $form = $input.parents('form');
  $form.find('input[type=submit]').hide();
  var creationOptionsJson = $input.attr('data-creation-options');
  var creationOptions = JSON.parse(creationOptionsJson);
  var publicKey = creationOptions;
  publicKey.challenge = base64ToUint8Array(creationOptions.challenge);
  publicKey.user.id = base64ToUint8Array(creationOptions.user.id);
  if (creationOptions.excludeCredentials) {
    var excludedCredentials = [];
    var _iterator2 = _createForOfIteratorHelper(creationOptions.excludeCredentials),
      _step2;
    try {
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        var value = _step2.value;
        var excludedCredential = value;
        excludedCredential.id = base64ToUint8Array(value.id);
        excludedCredentials.push(excludedCredential);
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }
    publicKey.excludeCredentials = excludedCredentials;
  }

  // eslint-disable-next-line compat/compat
  navigator.credentials.create({
    publicKey: publicKey
  }).then(function (credential) {
    var credentialJson = JSON.stringify({
      id: credential.id,
      rawId: arrayBufferToBase64(credential.rawId),
      type: credential.type,
      response: {
        clientDataJSON: arrayBufferToBase64(credential.response.clientDataJSON),
        attestationObject: arrayBufferToBase64(credential.response.attestationObject)
      }
    });
    $input.val(credentialJson);
    $form.trigger('submit');
  })["catch"](function (error) {
    return Functions.ajaxShowMessage(error, false, 'error');
  });
};

/**
 * @param {JQuery<HTMLElement>} $input
 *
 * @return {void}
 */
var handleRequest = function handleRequest($input) {
  var $form = $input.parents('form');
  $form.find('input[type=submit]').hide();
  var requestOptionsJson = $input.attr('data-request-options');
  var requestOptions = JSON.parse(requestOptionsJson);
  var publicKey = requestOptions;
  publicKey.challenge = base64ToUint8Array(requestOptions.challenge);
  if (requestOptions.allowCredentials) {
    var allowedCredentials = [];
    var _iterator3 = _createForOfIteratorHelper(requestOptions.allowCredentials),
      _step3;
    try {
      for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
        var value = _step3.value;
        var allowedCredential = value;
        allowedCredential.id = base64ToUint8Array(value.id);
        allowedCredentials.push(allowedCredential);
      }
    } catch (err) {
      _iterator3.e(err);
    } finally {
      _iterator3.f();
    }
    publicKey.allowCredentials = allowedCredentials;
  }

  // eslint-disable-next-line compat/compat
  navigator.credentials.get({
    publicKey: publicKey
  }).then(function (credential) {
    var credentialJson = JSON.stringify({
      id: credential.id,
      rawId: arrayBufferToBase64(credential.rawId),
      type: credential.type,
      response: {
        authenticatorData: arrayBufferToBase64(credential.response.authenticatorData),
        clientDataJSON: arrayBufferToBase64(credential.response.clientDataJSON),
        signature: arrayBufferToBase64(credential.response.signature),
        userHandle: arrayBufferToBase64(credential.response.userHandle)
      }
    });
    $input.val(credentialJson);
    $form.trigger('submit');
  })["catch"](function (error) {
    return Functions.ajaxShowMessage(error, false, 'error');
  });
};
AJAX.registerOnload('webauthn.js', function () {
  if (!navigator.credentials || !navigator.credentials.create || !navigator.credentials.get || !window.PublicKeyCredential) {
    Functions.ajaxShowMessage(Messages.webAuthnNotSupported, false, 'error');
    return;
  }
  var $creationInput = $('#webauthn_creation_response');
  if ($creationInput.length > 0) {
    handleCreation($creationInput);
  }
  var $requestInput = $('#webauthn_request_response');
  if ($requestInput.length > 0) {
    handleRequest($requestInput);
  }
});