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
        <button class="time">午前中</button>
        <button class="time">14:00 ~ 16:00</button>
        <button class="time">16:00 ~ 18:00</button>
        <button class="time">18:00 ~ 20:00</button>
        <button class="time">19:00 ~ 21:00</button>
      </div>
      <button><a href="{{ route('payment')}}">完了</a></button>
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
  
        const button = document.createElement('button');
      button.classList.add('date');
      button.textContent = `${day} ${weekDay}`;
      datesContainer.appendChild(button);
    }

    // 選択を保持するための配列
    const selectedDates = new Set();
    const selectedTimes = new Set();

    // 日付ボタンの選択状態管理
    document.querySelectorAll('.date').forEach(dateButton => {
      dateButton.addEventListener('click', () => {
        const dateText = dateButton.textContent;
        if (selectedDates.has(dateText)) {
          selectedDates.delete(dateText);
          dateButton.classList.remove('selected');
        } else {
          selectedDates.add(dateText);
          dateButton.classList.add('selected');
        }
      });
    });

    // 時間ボタンの選択状態管理
    document.querySelectorAll('.time').forEach(timeButton => {
      timeButton.addEventListener('click', () => {
        const timeText = timeButton.textContent;
        if (selectedTimes.has(timeText)) {
          selectedTimes.delete(timeText);
          timeButton.classList.remove('selected');
        } else {
          selectedTimes.add(timeText);
          timeButton.classList.add('selected');
        }
      });
    });

    // 完了ボタンの動作
    document.getElementById('complete').addEventListener('click', () => {
      if (selectedDates.size === 0 && selectedTimes.size === 0) {
        alert("日付と時間を選択してください！");
        return;
      }
      const selectedDatesArray = Array.from(selectedDates).join(', ');
      const selectedTimesArray = Array.from(selectedTimes).join(', ');
      alert(`選択された日付: ${selectedDatesArray}\n選択された時間: ${selectedTimesArray}`);
      });
    </script>
  </body>