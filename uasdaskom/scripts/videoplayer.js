const videoComponent = document.querySelector("video")
let playAndPauseBTN = document.getElementById("btn-playPause")


let currentTime = videoComponent.currentTime
let vidDuration = videoComponent.duration

let turn = 1

function playAndPause() {
    if (turn == 1) {
        videoComponent.play()
        playAndPauseBTN.src =  "./assets/icon/pause.png"
        console.log("Playing")
        turn = 0
    
    } else {
        videoComponent.pause()
        playAndPauseBTN.src = "./assets/icon/play.png"
        console.log("Paused")
        turn = 1   
    }

}

function fastForward() {
    videoComponent.currentTime += 5
}

function backForward() {
    videoComponent.currentTime -= 5
}
