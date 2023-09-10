"use strict";

// Function to detect mobile device
function isMobileDevice() {
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
