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
        body {
            padding-top: 0px;
        }
    </style>
    <script type="text/javascript">

    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h2>{{ config('app.name') }}</h2>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center style="font-weight:bold;font-size:18px;">60th Araw ng Lanao del Norte</center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center style="font-weight:bold;font-size:18px;">{{ $data['category'] }}</center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>July 2, 2019 9:00AM | MCC Grandstand, Sagadan, Tubod, Lanao del Norte</center>
                <br>
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
                        <th class="text-center" colspan="3" style="background:#90ee90;">PERFORMANCE</th>
                        <th class="text-center" colspan="2" style="background:#f2476a;">MUSICALITY</th>
                        <th class="text-center" rowspan="2">TOTAL (100%)</th>
                    </tr>
                    <tr>
                        <th class="text-center">Interpretation (30%)</th>
                        <th class="text-center">Choreography (30%)</th>
                        <th class="text-center">Costume (10%)</th>
                        <th class="text-center">Sagayan Beat (20%)</th>
                        <th class="text-center">Rhythm (10%)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['rank'] as $rank)
                    <tr>
                        <th scope="row" class="text-center">{{ $rank->seqno }}</th>
                        <td><b>{{ $rank->Contestants }}</b><br /><sub style="font-size:12px;">({{ $rank->representing }})</sub></td>
                        <td class="text-center">{{ $rank->Interpretation }}</td>
                        <td class="text-center">{{ $rank->Choreography }}</td>
                        <td class="text-center">{{ $rank->Costume }}</td>
                        <td class="text-center">{{ $rank->SagayanBeat }}</td>
                        <td class="text-center">{{ $rank->Rhythm }}</td>
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
