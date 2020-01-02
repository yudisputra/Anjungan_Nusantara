(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/charts/chartjs', ['jquery', 'Site'], factory);
  } else if (typeof exports !== "undefined") {
    factory(require('jquery'), require('Site'));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery, global.Site);
    global.chartsChartjs = mod.exports;
  }
})(this, function (_jquery, _Site) {
  'use strict';

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  (0, _jquery2.default)(document).ready(function ($$$1) {
    (0, _Site.run)();
  });

  Chart.defaults.global.responsive = true;


  // Example Chartjs Donut
  // ---------------------
  (function () {
    var doughnutData = {
      labels: ["Not Realized Yet", "Realized", "Verified","Unrealized"],
      datasets: [{
        data: [300, 50, 100, 40],
        backgroundColor: [Config.colors("blue", 400), Config.colors("yellow", 400), Config.colors("green", 400), Config.colors("red", 400)],
        hoverBackgroundColor: [Config.colors("blue", 600), Config.colors("yellow", 600), Config.colors("green", 600), Config.colors("red", 400)]
      }]
    };

    var myDoughnut = new Chart(document.getElementById("exampleChartjsDonut").getContext("2d"), {
      type: 'doughnut',
      data: doughnutData,
      options: {
        responsive: true
      }
    });
  })();

    // Example Chartjs Donut
  // ---------------------
  (function () {
    var doughnutData = {
      labels: ["Not Realized Yet", "Realized", "Verified","Unrealized"],
      datasets: [{
        data: [20, 30, 40, 10],
        backgroundColor: [Config.colors("blue", 400), Config.colors("yellow", 400), Config.colors("green", 400), Config.colors("red", 400)],
        hoverBackgroundColor: [Config.colors("blue", 600), Config.colors("yellow", 600), Config.colors("green", 600), Config.colors("red", 400)]
      }]
    };

    var myDoughnut = new Chart(document.getElementById("exampleChartjsDonut2").getContext("2d"), {
      type: 'doughnut',
      data: doughnutData,
      options: {
        responsive: true
      }
    });
  })();
});