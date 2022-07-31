<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('file/css/login.css')}}">
</head>
<body>
<div class="add">
    <div class="container mt-3">
        <h2 style="text-align: center">Add form</h2>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="" class="label">ガソリンスタンド名 :</label>
                <input type="text" name="name">
            </div>
            <div class="mb-3 mt-3">
                    <label for="" class="label1">種類:</label>
                    <input type="radio"  name="type"> <label> 92</label> <br>
                    <input type="radio"  name="type"> <label> 95</label>
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="label">Longitude :</label>
                <input type="text" name="longitude">
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="label">Latitude:</label>
                <input type="text" name="latitude">
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="label">地区:</label>
                <input type="text" name="district">
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="label">住所:</label>
                <input type="text" name="address">
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="label">開館時間:</label>
                <input type="text" name="openhours">
            </div>
            <div class="mb-3 mt-3">
                <div>
                    <label for="" class="label">評価:</label>
                    <input type="radio" name="evaluation" value="good">
                    <label for="html" class="radio">Good</label>
                    <input type="radio" name="evaluation" value="mid">
                    <label for="css" class="radio">Mid</label>
                    <input type="radio" name="evaluation" value="bad">
                    <label for="javascript" class="radio">Bad</label>
                </div>
            </div>
            <div class="mb-3 mt-3" style="margin-left: 230px">
                <button type="submit" class="btn btn-primary" name="register">登録:</button>
                <button type="button" class="btn btn-primary" name="return" >戻る:</button>
            </div>


        </form>
    </div>
</div>
</body>
</html>


