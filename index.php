<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/angularjs/angular.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/lang.js"></script>
    <script src="js/myController.js"></script>

</head>
<body ng-app="MyApp" ng-controller="myController">

<button type="submit" class="btn btn-success uppercase" ng-click="languageSelect('ptBr')" >Português</button>
<button type="submit" class="btn btn-success uppercase" ng-click="languageSelect('enUS')" >English</button>

<table class="table" border="0" cellpadding="0" cellspacing="0" align="center" width="400px">

    <tr>

        <td width="25%" style="border: 1px solid gainsboro; padding: 10px;">

            <i>⎨⎨login⎬⎬</i>

        </td>

        <td width="25%"
            style="border-top: 1px solid gainsboro; border-bottom: 1px solid gainsboro; border-right: 1px  solid gainsboro;  padding: 10px;">

            <i>⎨⎨not_found_title⎬⎬</i>

        </td>

        <td width="25%" style="border-top: 1px solid gainsboro; border-bottom: 1px solid gainsboro; padding: 10px;">

            <i>⎨⎨error_default_error⎬⎬</i>

        </td>

        <td width="25%" style="border: 1px solid gainsboro; border-right: 1px  solid gainsboro; padding: 10px;">

            <i>⎨⎨login_success⎬⎬</i>

        </td>

    </tr>

    <tr>

        <td width="25%" style="border: 1px solid gainsboro; border-top: 0px; padding: 10px; ">

            {{login}}

        </td>

        <td width="25%" style="border-bottom: 1px solid gainsboro; border-right: 1px  solid gainsboro; padding: 10px;">

            {{not_found_title}}

        </td>

        <td width="25%" style="border-bottom: 1px solid gainsboro; padding: 10px;">

            {{error_default_error}}

        </td>

        <td width="25%"
            style="border: 1px solid gainsboro; border-top: 0px;  border-right: 1px  solid gainsboro; padding: 10px;">

            {{login_success}}

        </td>

    </tr>
</table>

</body>

</html>