/**
 * sidenav.controller
 * Created by anonymous on 28/02/16 11:21.
 */

(function() {
    'use strict';

    angular
        .module('quetzalcoatl')
        .controller('SidenavController', SidenavController);

    SidenavController.$inject = ['$timeout', '$mdSidenav', '$log'];

    /* @ngInject */
    function SidenavController($timeout, $mdSidenav, $log) {

        var vm   = this;
        vm.close = function() {
            $mdSidenav('left').close().then(function() {
                // $log.debug("close LEFT is done");
            });
        };


        activate();

        ////////////////

        function activate() {
            //
        }
    }

})();

