function record() {
    var recognition = new webkitSpeechRecognition();
    recognition.lang = "zh-CN";

    recognition.onresult = function(event) {
        console.log(event);
        document.getElementById('speechToText').value = event.results[0][0].transcript;
    }
    recognition.start();

}

function readOutLoud(value) {
    var speech = new SpeechSynthesisUtterance();
    speech.text = value;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    speech.lang = "zh-CN"
    window.speechSynthesis.speak(speech);
}