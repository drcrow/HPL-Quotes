if("serviceWorker" in navigator){
    navigator.serviceWorker.register("serviceWorker.js").then(registration => {
        console.log('serviceWorker registered!');
        console.log(registration);
    }).catch(error => {
        console.log('serviceWorker registration failed!');
        console.log(error);
    });
}