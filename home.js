const firebaseConfig = {
    apiKey: "AIzaSyA6MsgE8JzsNL-S26E401X0Tdnp1v4YoEY",
    authDomain: "pinksurfing-landingpage.firebaseapp.com",
    databaseURL: "https://pinksurfing-landingpage-default-rtdb.firebaseio.com",
    projectId: "pinksurfing-landingpage",
    storageBucket: "pinksurfing-landingpage.appspot.com",
    messagingSenderId: "661346205342",
    appId: "1:661346205342:web:112bed6eeff7291885058f",
    measurementId: "G-FKSDY4CKBS"
  };
      firebase.initializeApp(firebaseConfig);

firebase.auth().onAuthStateChanged((user)=>{
    if(user){
        UnBlur();
    }
})

function BlurPage() {
    let page__body = document.getElementById("body-content");
    page__body.style.filter = "blur(5px)";
}
function UnBlur() {
    let modal = document.getElementById("modal");
    modal.style.display = "none";
    let page__body = document.getElementById("body-content");
    page__body.style.filter = "blur(0px)";
}
