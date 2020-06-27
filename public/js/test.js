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
      document.getElementById("autoclick").click();
      document.getElementById('exampleModalCenterdd').style.backgroundColor = "#ff4d4d"
      document.getElementById("exampleModalLongTitle").innerHTML = "sai";
      document.getElementById("testview").innerHTML = nameI.chinese.toString();
    }
  }

