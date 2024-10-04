function playsound(audioName,loop)
{
    let audio=new audio(audioName);
    audio.loop=loop;
    audio.play();
}
playsound("project\music.mp3",true);