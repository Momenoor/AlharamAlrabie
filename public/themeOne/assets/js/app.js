
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

