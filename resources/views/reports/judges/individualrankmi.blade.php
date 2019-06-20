<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <style>
        body{
            padding-top:0px;
        }
    </style>
    <script type="text/javascript">
        
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h2>{{ config('app.name') }}</h2></center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center style="font-weight:bold;font-size:18px;">INTER-LGU BEAUTY PAGEANT</center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center style="font-weight:bold;font-size:18px;">{{ $data['category'] }}</center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>July 2, 2019  8:00PM | MCC Gymnasium, Sagadan, Tubod, Lanao del Norte</center>
            </div>
        </div>
        <div class="row">
            @if(count($data['rank'])>0)
            <br />
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" rowspan="2">Rank</th>
                        <th class="text-center" rowspan="2">Contestant</th>
                        <th class="text-center" colspan="5" style="background:rgba(64, 160, 255,0.5);">CRITERIA</th>
                        <th class="text-center" rowspan="0">TOTAL (100%)</th>
                    </tr>
                    <tr>
                        <th class="text-center">Cultural Relevance (30%)</th>
                        <th class="text-center">Suitability of the wearer (20%)</th>
                        <th class="text-center">Poise and Bearing (20%)</th>
                        <th class="text-center">Elegance (20%)</th>
                        <th class="text-center">Beauty of the face (10%)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['rank'] as $rank)
                        <tr>
                            <th scope="row" class="text-center">{{ $rank->seqno }}</th>
                            <td>{{ $rank->Contestants }}</td>
                            <td class="text-center">{{ $rank->relevance }}</td>
                            <td class="text-center">{{ $rank->wearer }}</td>
                            <td class="text-center">{{ $rank->personality }}</td>
                            <td class="text-center">{{ $rank->elegance }}</td>
                            <td class="text-center">{{ $rank->face }}</td>
                            <td class="text-center">{{ $rank->TOTAL }}%</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div class="row">
            <div class="col-md-3">
                <br /><br />
                <center>
                    <b>{{ $data['judge']->name }}</b>
                    <br />
                    <span style="text-decoration:overline;">
                        Judge's Signature over Printed Name
                    </span>
                </center>
            </div>
        </div>
    </div>
</body>
</html>