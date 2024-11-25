<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 50px 0;
        }
        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 50px;
        }
        .testimonials {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }
        .testimonial {
            padding: 20px;
            border-radius: 8px;
            display: flex; 
            align-items: center;
            gap: 20px; 
        }
        .testimonial img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .testimonial p {
            font-size: 14px;
            color: #000000;
            margin-bottom: 15px;
        }
        .testimonial strong {
            font-size: 16px;
            color: #000000;
        }
        .logos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px ;
            background-color: #f1f1f1;
            margin-top: 120px;
        }
        .logos div {
            width: 100px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logos div img {
            max-width: 100px; 
            max-height: 60px;
            object-fit: contain; 
        }

        @media (max-width: 768px) {
            .testimonials {
                grid-template-columns: 1fr;
            }
            .testimonial {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="title">Players Testimonies</h2>
        <div class="testimonials">
            <div class="testimonial">
                <img src="https://assets.goal.com/images/v3/blt6d3f2d1df69d8dc7/Antoine-Griezmann.jpeg?auto=webp&format=pjpg&width=3840&quality=60" alt="Client">
                <div>
                    <p>"I am back to my best because of them"</p>
                    <strong>Antoine Griezmann</strong>
                    <p>Atletico Madrid</p>
                </div>
            </div>
            <div class="testimonial">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw227ufuhT8Vm7Arj7jdaSVKobtrN93rTMDA&s" alt="Client">
                <div>
                    <p>"They helped me become the person i am right now"</p>
                    <strong>Antony Santos</strong>
                    <p>Manchester United</p>
                </div>
            </div>
            <div class="testimonial">
                <img src="https://tmssl.akamaized.net//images/foto/galerie/endrick-real-madrid-2024-1726785981-148585.jpg?lm=1726786003" alt="Client">
                <div>
                    <p>"They helped me achieve my dream to play for Real Madrid"</p>
                    <strong>Endrick</strong>
                    <p>Real Madrid</p>
                </div>
            </div>

            <div class="testimonial">
                <img src="https://assets.goal.com/images/v3/blt4fee4343957d1f14/GOAL_-_Blank_WEB_-_Facebook_-_2024-02-04T182043.089.png?auto=webp&format=pjpg&width=3840&quality=60" alt="Client">
                <div>
                    <p>"My games improves a     lot due to their help"</p>
                    <strong>Mykhailo Mudryk</strong>
                    <p>Chelsea</p>
                </div>
            </div>
        </div>
    </div>

    <div class="logos">
        <div><img src="https://tmssl.akamaized.net//images/wappen/head/131.png?lm=1406739548" alt="Logo 1"></div>
        <div><img src="https://tmssl.akamaized.net//images/wappen/head/418.png?lm=1697726166" alt="Logo 2"></div>
        <div><img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/f4/Atletico_Madrid_2017_logo.svg/255px-Atletico_Madrid_2017_logo.svg.png" alt="Logo 3"></div>
        <div><img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_City_FC_badge.svg/285px-Manchester_City_FC_badge.svg.png" alt="Logo 4"></div>
        <div><img src="https://upload.wikimedia.org/wikipedia/hif/f/ff/Manchester_United_FC_crest.png?20150523185345" alt="Logo 5"></div>
    </div>

</body>
</html>

