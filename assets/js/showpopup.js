window.addEventListener('load', function() {
    //Retrieve popup from /popup.html after 10 seconds
    fetch('/popup.html')
        .then(response => response.text())
        .then(data => {
            //Create a div element to hold the popup
            let popup = document.createElement('div');
            popup.innerHTML = data;
            popup.style.position = 'absolute';
            popup.style.top = '0';
            popup.style.left = '0';
            popup.style.display = 'flex';
            popup.style.justifyContent = 'center';
            popup.style.alignItems = 'center';
            popup.style.width = '100vw';
            popup.style.height = '100vh';
            popup.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            //Add the popup to the body
            document.body.appendChild(popup);
            //Show the popup
            /*document.getElementById('popup').style.display = 'block';*/
        })
        .then(() => {
            setTimeout(() => {
                document.getElementById('gotolab').addEventListener('click', function(){
                    window.location.href = "https://labtest1.comp3133.britto.tech/";
                });

                document.getElementById('stayhere').addEventListener('click', function(){
                    console.log('stay here');
                    document.querySelector('.popup-root').parentElement.remove();
                });
            }, 1000);
        });


});