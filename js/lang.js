MyApp
    .service('langService', function() {

        var dictionary;
        var langService = {};

        langService.i18n = function ($scope, $http, $langRequests) {

            $http.post('php/lang.php', {
                    langRequests: $langRequests
                }
            ).then(function (resp) {

                    dictionary = resp.data;

                    for (var k in dictionary){
                        if (dictionary.hasOwnProperty(k)) {
                            $scope[k] = dictionary[k];
                            //console.log(k + " -> " + dictionary[k]);
                        }
                    }

                }, function (err) {
                    console.error('ERR', err);
                })
        };

        return langService;

    });