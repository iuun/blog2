<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table; /*此元素会作为块级表格来显示（类似 <table>），表格前后带有换行符。*/
            font-weight: 100; /* 字体粗细 */
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;    /* 此元素会作为一个表格单元格显示（类似 <td> 和 <th>） */
            vertical-align: middle; /* 垂直对其 */
        }

        .content {
            text-align: center;
            display: inline-block; /* 行内块元素 */
        }

        .title {
            font-size: 66px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title"> Hello Laravel -- by Liujun </div>
        </div>
    </div>
</body>
</html>