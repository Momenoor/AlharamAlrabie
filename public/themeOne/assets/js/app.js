/*
"use strict";

// Function to detect mobile device
function isMobileDevice() {
    return false;
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

if (!isMobileDevice()) {
    const foodIcons = [
        {
            icon: "sandwich-icon-1",
            width: 210,
            height: 210
        }, {
            icon: "sandwich-icon-2",
            width: 300,
            height: 150
        }, {
            icon: "sandwich-icon-3",
            width: 245,
            height: 140
        }, {
            icon: "sandwich-icon-4",
            width: 250,
            height: 145
        }, {
            icon: "chill-icon-1",
            width: 90,
            height: 85
        }, {
            icon: "chill-icon-2",
            width: 390,
            height: 235
        }, {
            icon: "chill-icon-3",
            width: 150,
            height: 160
        }, {
            icon: "chill-icon-4",
            width: 625,
            height: 185
        }, {
            icon: "chill-icon-5",
            width: 150,
            height: 135
        },
    ];

    const positions = [
        {left: '10%', top: '10%'},
        {left: '45%', top: '10%'},
        {left: '70%', top: '10%'},
        {left: '90%', top: '35%'},
        {left: '80%', top: '60%'},
        {left: '40%', top: '75%'},
        {left: '10%', top: '75%'},
        {left: '5%', top: '35%'},
        {left: '30%', top: '50%'},
        {left: '60%', top: '50%'},
    ];

    for (let i = 0; i < 10; i++) {
        const icon = document.createElement('i');
        const randomIcon = foodIcons[Math.floor(Math.random() * foodIcons.length)];
        icon.classList.add(randomIcon.icon, "bg-icons");

        // Calculate the maximum allowable left and top so that the icon doesn't go off screen
        const maxLeft = 98 - (randomIcon.width / window.innerWidth) * 100;  // in vw
        const maxTop = 95 - (randomIcon.height / window.innerHeight) * 100; // in vh

        // Use the minimum of the two: calculated vs from positions array
        const left = Math.min(parseFloat(positions[i].left), maxLeft);
        const top = Math.min(parseFloat(positions[i].top), maxTop);

        icon.style.left = left + '%';
        icon.style.top = top + '%';
        icon.style.transform = 'rotate(' + ((Math.random() * 180) - 90) + 'deg)';

        document.body.appendChild(icon);
    }
}
*/
/*document.addEventListener("DOMContentLoaded", function () {
    let bodyElement = document.body;
    const foodIcons = [
        {
            icon: "sandwich-icon-1",
            width: 210,
            height: 210
        }, {
            icon: "sandwich-icon-2",
            width: 300,
            height: 150
        }, {
            icon: "sandwich-icon-3",
            width: 245,
            height: 140
        }, {
            icon: "sandwich-icon-4",
            width: 250,
            height: 145
        }, {
            icon: "chill-icon-1",
            width: 90,
            height: 85
        }, {
            icon: "chill-icon-2",
            width: 390,
            height: 235
        }, {
            icon: "chill-icon-3",
            width: 150,
            height: 160
        }, {
            icon: "chill-icon-4",
            width: 625,
            height: 185
        }, {
            icon: "chill-icon-5",
            width: 150,
            height: 135
        },
    ];

    // Generate a random percentage between 0 and 100
    function getRandomPercentage() {
        return Math.floor(Math.random() * 100) + '%';
    }

    let backgroundImageString = '';
    let backgroundPositionString = '';
    let backgroundSizeString = ''; // Adjust as per your icon size
    let backgroundRepeatString = 'no-repeat';

    for (let i = 1; i <= 5; i++) {
        let iconIndex = Math.floor(Math.random() * foodIcons.length);
        backgroundImageString += `url("themeOne/assets/media/misc/layout/${foodIcons[iconIndex].icon}.png"), `;
        backgroundPositionString += getRandomPercentage() + ' ' + getRandomPercentage() + ', ';
        backgroundSizeString += foodIcons[iconIndex].width + 'px ' + foodIcons[iconIndex].height + 'px, ';
    }

    // Removing trailing commas
    backgroundImageString = backgroundImageString.slice(0, -2);
    backgroundPositionString = backgroundPositionString.slice(0, -2);
    backgroundSizeString = backgroundSizeString.slice(0, -2);

    bodyElement.style.backgroundImage = backgroundImageString + " ,radial-gradient(circle at center, #c96163, #af0808)";
    bodyElement.style.backgroundPosition = backgroundPositionString + " ,0% 0%";
    bodyElement.style.backgroundSize = backgroundSizeString + " ,100% 100%";
    bodyElement.style.backgroundRepeat = backgroundRepeatString;
});*/

document.addEventListener("DOMContentLoaded", function () {

    const foodIcons = [
        {
            icon: "sandwich-icon-1",
            width: 210,
            height: 210
        }, {
            icon: "sandwich-icon-2",
            width: 300,
            height: 150
        }, {
            icon: "sandwich-icon-3",
            width: 245,
            height: 140
        }, {
            icon: "sandwich-icon-4",
            width: 250,
            height: 145
        }, {
            icon: "chill-icon-1",
            width: 90,
            height: 85
        }, {
            icon: "chill-icon-2",
            width: 390,
            height: 235
        }, {
            icon: "chill-icon-3",
            width: 150,
            height: 160
        }, {
            icon: "chill-icon-4",
            width: 625,
            height: 180
        }, {
            icon: "chill-icon-5",
            width: 150,
            height: 135
        },
    ];

    const numberOfImages = 10;

    for (let i = 0; i < numberOfImages; i++) {
        setTimeout(createFallingImage, Math.random() * 5000);
    }

    function createFallingImage() {
        const imgElement = document.createElement("img");
        let icon = foodIcons[Math.floor(Math.random() * foodIcons.length)];
        let percentage = Math.floor(Math.random() * 100) / 100;
        imgElement.src = "./themeOne/assets/media/misc/layout/" + icon.icon + ".png";
        imgElement.classList.add("falling-image");

        imgElement.width = icon.width * percentage;
        imgElement.height = icon.height * percentage;

        // Adjust the left position calculation to factor in the image's width
        const randomLeftPosition = Math.random() * (window.innerWidth - imgElement.width);
        imgElement.style.left = randomLeftPosition + "px";

        const animationDuration = Math.random() * 5 + 5;

        imgElement.style.animation = `fall ${animationDuration}s linear infinite`;

        document.body.appendChild(imgElement);

        imgElement.addEventListener("animationiteration", () => {
            // Adjust the left position calculation again after each iteration
            imgElement.style.left = Math.random() * (window.innerWidth - imgElement.width) + "px";
            const maxTop = window.innerHeight - imgElement.height;
            if (parseFloat(imgElement.style.top) > maxTop) {
                imgElement.style.top = maxTop + "px";
            } else {
                imgElement.style.top = (-imgElement.height - 20) + "px";
            }
        });
    }


});
