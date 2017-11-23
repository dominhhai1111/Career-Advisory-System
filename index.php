<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Career Advisory System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>Hệ thống tư vấn chọn ngành</h2>
    <div class="container">
        <div class="introduce text-center">
            <p>* Điền đầy đủ thông tin sau đây, hệ thống sẽ tư vấn cho bạn ngành nghề phù hợp với bạn!</p>
        </div>
        <div class="content">
            <form action="./execution.php" method="post">
                <div class="info">
                    <p>Sở thích cá nhân:<p>
                    <div class="row">
                        <p class="col-sm-3"><input type="checkbox" name="favorite" value="item 1"> Item 1</p>
                        <p class="col-sm-3"><input type="checkbox" name="favorite" value="item 2"> Item 2</p>
                        <p class="col-sm-3"><input type="checkbox" name="favorite" value="item 1"> Item 1</p>
                        <p class="col-sm-3"><input type="checkbox" name="favorite" value="item 2"> Item 2</p>
                        <p class="col-sm-3"><input type="checkbox" name="favorite" value="item 1"> Item 1</p>
                        <p class="col-sm-3"><input type="checkbox" name="favorite" value="item 2"> Item 2</p>
                    </div>
                </div>
                <div class="info">
                    <p>Năng khiếu:</p>
                </div>
                <div class="info">
                    <p>Điểm thi thử các môn:</p>
                </div>
                <input type="submit" name="submit" value="Gửi" class="center-block">
            </form>
        </div>
    </div>
</body>
</html>