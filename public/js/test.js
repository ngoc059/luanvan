function onClick(i, value){
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
}

