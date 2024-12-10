<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/datetime.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2><br><br>
<h2 class="title">ErrorSpecify Delivery Date</h2><br><br>
    <div class="container">
      <h2>- 配達時間を選択 -</h2>
      <div class="dates" id="dates"></div>
      <div class="times">
        <div class="time">午前中</div>
        <div class="time">14:00 ~ 16:00</div>
        <div class="time">16:00 ~ 18:00</div>
        <div class="time">18:00 ~ 20:00</div>
        <div class="time">19:00 ~ 21:00</div>
      </div>
    </div>
  
    <script>
      // 明日から4日間の日付を生成
      const datesContainer = document.getElementById('dates');
      const today = new Date();
  
      for (let i = 1; i <= 4; i++) {
        const date = new Date();
        date.setDate(today.getDate() + i);
  
        const day = date.getDate();
        const weekDay = ['日', '月', '火', '水', '木', '金', '土'][date.getDay()];
  
        const dateElement = document.createElement('div');
        dateElement.classList.add('date');
        dateElement.textContent = `${day} ${weekDay}`;
        datesContainer.appendChild(dateElement);
      }
  
      // クリックで選択状態にする
      document.querySelectorAll('.date').forEach(date => {
        date.addEventListener('click', () => {
          document.querySelectorAll('.date').forEach(d => d.classList.remove('selected'));
          date.classList.add('selected');
        });
      });
  
      document.querySelectorAll('.time').forEach(time => {
        time.addEventListener('click', () => {
          document.querySelectorAll('.time').forEach(t => t.classList.remove('selected'));
          time.classList.add('selected');
        });
      });
    </script>
  </body>