<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>STYLICO</h2>
<h2>ErrorSpecify Delivery Date</h2>
<h3>- 配達時間を選択 -</h3><br>

<form method="post" action="#">
    @csrf
    <input type="submit" value="">
    <input type="submit" value="">
    <input type="submit" value="">
    <input type="submit" value=""><br><br>
</form>

<form method="post" action="#">
    @csrf
    <input type="submit" value="午前中">
    <input type="submit" value="14:00~16:00">
    <input type="submit" value="16:00~18:00"><br><br>
    <input type="submit" value="18:00~20:00">
    <input type="submit" value="20:00~22:00">
</form>


<div class="date-container">
        String[] daysOfWeek = {"日", "月", "火", "水", "木", "金", "土"};
        java.util.Calendar calendar = java.util.Calendar.getInstance();
        
        for (int i = 0; i < 4; i++) {
            int day = calendar.get(java.util.Calendar.DAY_OF_MONTH);
            String weekday = daysOfWeek[calendar.get(java.util.Calendar.DAY_OF_WEEK) - 1];
            <div class="date-button">
                <div><%= day %></div>
                <div><%= weekday %></div>
            </div>
            calendar.add(java.util.Calendar.DAY_OF_MONTH, 1);
        }
</div>