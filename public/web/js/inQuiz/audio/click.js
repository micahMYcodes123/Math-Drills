<script>

    let play = document.getElementById("play");
        function playMusic()
            let audio = new Audio("web/audio/clickdrop.wav");
            audio.play()
        
        play.addEventListener("click", playMusic);

</script>

