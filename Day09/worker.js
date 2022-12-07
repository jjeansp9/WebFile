var n=0;

// 반복문은 속도가 너무 빨라서 값을 그려낼 시간조차 없음

function show(){
    n++;
    //document.getElementById('hh').innerHTML= n; // 화면변경 작업
    // 별도의 워커는 UI변경작업 불가능함
    // 그래서 보여주고자 하는 데이터(n값)를 main thread쪽으로 보내기
    postMessage(n);
}

setInterval(show, 1);