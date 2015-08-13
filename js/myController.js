MyApp
    .controller('myController', ['$scope', '$http', 'langService',
        function ($scope, $http, langService) {

            // select which messages group you want
            var $langRequests = ["login", "notFound", "error", "success"];

            langService.i18n($scope, $http, $langRequests);


            $scope.languageSelect = function (lang) {
                $http.post('php/changeLanguage.php', {
                        lang: lang
                    }
                ).then(function () {
                        window.location = window.location;
                    })
            }


        }

    ]);