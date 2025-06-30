<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>chart accounts</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>

    <table class="tree-table">
        <tr>
            <td>
                @include('loop', ['accounts' => $chart_accounts])
            </td>
        </tr>
    </table>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>
