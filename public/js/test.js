function onClick(i, value, d){
    // alert(1);
    console.log(i, value);
    
    document.getElementById(i).style.visibility = "visible";
    var speech = new SpeechSynthesisUtterance();
    speech.text = value;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    speech.lang = "zh-CN"
    window.speechSynthesis.speak(speech);
    localStorage.setItem('testImg', d);
}

function clickTN (r, listAnswer) {
    const data = JSON.parse(localStorage.getItem('testImg'));
    isAns = JSON.parse(r)
    const nameI = JSON.parse(listAnswer);    
    if (data.id == isAns.vocabularyId) {
      document.getElementById("autoclick").click();
      document.getElementById('exampleModalCenterdd').style.backgroundColor = "#66ff66"
      document.getElementById("testview").innerHTML = nameI.chinese.toString();
      document.getElementById("exampleModalLongTitle").innerHTML = "chính xác";
    } else {
      let isWrong = Number(localStorage.getItem('countWrong'));
      if(isWrong) {
        localStorage.setItem('countWrong', Number(isWrong) + 1);
        if((Number(isWrong)+ 1) >= 5) {
          localStorage.clear();
          document.getElementById("autoclick").click();
          document.getElementById('exampleModalCenterdd').style.backgroundColor = "#ffdddd"
          document.getElementById("exampleModalLongTitle").innerHTML = "Đã sai hơn 5 câu";
          document.getElementById("testview").innerHTML = "Vui Lòng Làm Lại Bài Học";
          document.getElementById("ahref").href="/lesson/lesson-list"; 
          return;
        }
      } else {
        localStorage.setItem('countWrong', 1);
      } 
      document.getElementById("autoclick").click();
      document.getElementById('exampleModalCenterdd').style.backgroundColor = "#ffdddd"
      document.getElementById("exampleModalLongTitle").innerHTML = "sai";
      document.getElementById("testview").innerHTML = nameI.chinese.toString();
    }
  }

  function voidSpeech(value){
    // alert(1);
    var speech = new SpeechSynthesisUtterance();
    speech.text = value;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    speech.lang = "zh-CN"
    window.speechSynthesis.speak(speech);
    localStorage.setItem('testImg', d);
}

