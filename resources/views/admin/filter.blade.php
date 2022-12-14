<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gas Station</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('file/css/login.css')}}">
</head>
<body>
<div class="add" style="width: 950px !important;" >
    <div class="container mt-3">
        <div style="">
            <div style="display:inline; margin-left: 200px; font-weight: bold; text-align: center">Gas Station</div>
            <button type="submit" class="btn btn-primary" style="margin-left: 80px !important; text-align: right" name="map">マップ :</button>
        </div>
        <form action="{{route("admin.home.filter")}}" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="" class="label">ガソリンスタンド名 :</label>
                <input type="text" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="label1">種類:</label>
                <input type="checkbox" name="a92" value="00001"> <label>92</label> <br>
                <input type="checkbox" name="a95" value="00002"> <label>95</label>
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="label">　地区:</label>
                <select name="district">
                    <option value="">地区</option>
                    @foreach($districtName as $key)
                        <option value="{{$key->DistrictId}}">{{$key->DistrictName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 mt-3" style="margin-left: 160px">
                <button type="submit" class="btn btn-primary" name="search">検索:</button>
            </div>
            <button class="btn btn-primary" name="register">登録:</button>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ガソリンスタンド名</th>
                    <th scope="col">　種類</th>
                    <th scope="col">地区</th>
                    <th scope="col">Longitude, Latitude</th>
                    <th scope="col">　評価</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($gas as $key)
                    <tr>
                        <td>{{$key->GasStationName}}</td>
                        <td>
                                @if (!empty($value->TypeText))
                                    {{$value->TypeText}}
                                @endif
                        </td>
                        <td>
                            @if(!empty($key->DistrictName))
                            {{$key->DistrictName}}
                            @endif
                        </td>
                        <td>
                            @if(!empty($key->Longitude) && !empty($key->Latitude))
                                {{$key->Longitude}}, {{$key->Latitude}}
                            @endif
                        </td>
                        <td>
                            @if(!empty($key->Rating))
                                {{$key->Rating}}
                            @endif
                        </td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>

