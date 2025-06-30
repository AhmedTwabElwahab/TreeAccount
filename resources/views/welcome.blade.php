<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>chart accounts</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="accordion accordion-flush" id="accordionFlushExample">

                @for($i =0 ; $i < $count; $i++)
                    @if($accounts[$i]->parent_id == 0)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading_{{$accounts[$i]->id}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_{{$accounts[$i]->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                    {{$accounts[$i]->name}}
                                </button>
                            </h2>
                            <div id="flush-collapse_{{$accounts[$i]->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading_{{$accounts[$i]->id}}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    @foreach($accounts[$i]->accounts() as $acc)
                                       <h2>{{$acc->name}}</h2>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
