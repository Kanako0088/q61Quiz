

//歯車クリックでオプション表示
$('.gear').on('click', function (e) {
  $(".option_inner").addClass("active");
  $('.gear').css({ 'bottom': '76px', 'box-shadow': '0 0 0 0 rgba(0, 0, 0, 0)' });
});
$('.batsu').on('click', function (e) {
  $(".option_inner").removeClass("active");
  $('.gear').css({ 'bottom': '80px', 'box-shadow': '0px 4px 0px 0px rgba(0, 0, 0, 0.15)' });
});


/*
module.exports = function (module) {
if (!module.webpackPolyfill) {
  module.deprecate = function () { };

  module.paths = []; // module.parent = undefined by default

  if (!module.children) module.children = [];
  Object.defineProperty(module, "loaded", {
    enumerable: true,
    get: function get() {
      return module.l;
    }
  });
  Object.defineProperty(module, "id", {
    enumerable: true,
    get: function get() {
      return module.i;
    }
  });
  module.webpackPolyfill = 1;
}

return module;
};
*/
