<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav id="nav">
        <div class="wrapper">
            <h1>Send Email</h1>
            <div class="hamburger" id="ham">
                <span class="lettuce slice"></span>
                <span class="cheese slice"></span>
                <span class="beef slice"></span>
            </div>
            <div class="linkWrapper">
                <a href="#">Home</a>
                <a href="#">Work</a>
                <a href="#">Blog</a>
                <a href="#" class="active">Contact</a>
            </div>
        </div>
    </nav>

    <div class="map">
        <iframe src="https://snazzymaps.com/embed/2369" width="100%" height="100%" style="border:none;"></iframe>
    </div>

    <div class="content">
        <div class="contact">
            <div class="other">
                <div class="info">
                    <h2>Contact Information </h2>
                    <h3>Email</h3>
                    <div class="svg-wrap">
                        <a href="mailto:{{ config('contact.send_email_to') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.211 485.211">
                                <path d="M485.21 363.906c0 10.637-2.99 20.498-7.784 29.174l-153.2-171.41 151.54-132.584c5.894 9.355 9.445 20.344 9.445 32.22v242.6zM242.607 252.793l210.863-184.5c-8.654-4.737-18.398-7.642-28.91-7.642H60.65c-10.523 0-20.27 2.906-28.888 7.643l210.844 184.5zm58.787-11.162l-48.81 42.735c-2.854 2.487-6.41 3.73-9.977 3.73-3.57 0-7.125-1.243-9.98-3.73l-48.82-42.736-155.14 173.6c9.3 5.834 20.198 9.33 31.984 9.33h363.91c11.785 0 22.688-3.496 31.984-9.33l-155.15-173.6zM9.448 89.086C3.554 98.44 0 109.43 0 121.305v242.602c0 10.637 2.978 20.498 7.79 29.174L160.97 221.64 9.448 89.086z" /></svg>
                            {{ config('contact.send_email_to') }}</a>
                    </div>
                </div>
            </div>
            <div class="form">
                <h1>Get In Touch</h1>
                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    <div class="flex-rev">
                        <input type="text" placeholder="Your Name" required name="name" id="name" />
                        <label for="name">Full Name</label>
                    </div>
                    <div class="flex-rev">
                        <input type="email" placeholder="mail@gmail.com" required name="email" id="email" />
                        <label for="email">Your Email</label>
                    </div>

                    <div class="flex-rev">
                        <textarea placeholder="Write your query here" required name="message" id="message" /></textarea>
                        <label for="message">Message</label>
                    </div>
                    <button>Send Email</button>
                </form>
            </div>
        </div>
    </div>

    <style>
        html,
        body {
            overflow-x: hidden;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: helvetica;
            font-weight: 300;
        }


        a,
        button {
            display: inline-block;
            padding: 14px 30px;
            text-decoration: none;
            color: #243342;
            letter-spacing: 1.2px;
            font-size: 14px;
            border: 1px solid #243342;
            border-radius: 7px;
            margin-right: 20px;
            transition: 0.15s ease-in-out;
        }

        a.focus,
        button {
            color: white;
            background: #243342;
        }

        a.focus:hover,
        button:hover {
            cursor: pointer;
            color: #1bf1dc;
        }

        a:hover {
            background-color: #243342;
            color: #16f1d7;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 2;
            background-color: rgb(36, 51, 66);
        }



        nav .wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 5%;
        }

        nav .hamburger {
            width: 30px;
            height: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            z-index: 3;
            opacity: 0;
            pointer-events: none;
        }

        nav .hamburger:hover {
            cursor: pointer;
        }

        nav .hamburger:hover span.slice {
            background-color: #b9bbbd;
        }

        nav .hamburger span.slice {
            display: block;
            width: 100%;
            height: 2px;
            background-color: white;
            transition: 0.2s ease-in-out;
        }

        nav.open .hamburger span.cheese.slice {
            opacity: 0;
        }

        nav.open .hamburger span.lettuce.slice {
            transform-origin: center left;
            transform: rotate(43deg);
        }

        nav.open .hamburger span.beef.slice {
            transform-origin: center left;
            transform: rotate(-43deg);
        }

        nav.open .linkWrapper {
            opacity: 1;
            display: flex;
            pointer-events: initial;
        }


        nav h1 {
            color: white;
            font-weight: 300;
            font-size: 22px;
            letter-spacing: 1.2px;
        }

        nav a {
            color: white;
            text-decoration: none;
            display: inline-block;
            padding: 5px 15px;
            font-weight: 300;
            letter-spacing: 1.2;
            border: none;
            margin: 0;
        }

        a.active {
            color: #16f1dc;
            font-weight: 500;
        }

        .map {
            position: fixed;
            width: 100vw;
            height: 100vh;
        }

        .map:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(45deg, rgba(7, 45, 72, 0.8), rgba(195, 195, 195, 0.8));
        }




        .content {
            position: fixed;
            top: 60px;
            height: calc(100vh - 60px);
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: auto;
            padding: 20px;
        }


        .contact {
            width: 80%;
            max-width: 1080px;
            display: flex;
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.28);
            border-radius: 5px;
            overflow: hidden;
        }


        .other {
            width: 60%;
            background-image: url(https://images.unsplash.com/photo-1485119584289-30ca2b38c67e?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=);
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }


        .other:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(45deg, rgb(36, 51, 66), rgba(36, 51, 66, 0.81));
        }






        .form {
            width: 40%;
            background-color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;

        }

        .form h1 {
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
        }

        .form form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .flex-rev {
            display: flex;
            flex-direction: column-reverse;
            margin-bottom: 10px;
            width: 100%;
        }

        .flex-rev input,
        .flex-rev textarea {
            border: none;
            background-color: #e6e6e6;
            padding: 12px 10px;
            font-size: 16px;
            resize: none;
            margin-top: 7px;
            margin-bottom: 16px;
            border-radius: 5px;
            color: #243342;
            outline-color: #243342;
            outline-width: thin;
            -webkit-appearance: none;
        }

        .flex-rev textarea {
            height: 150px;
        }

        button {
            -webkit-appearance: none;
            margin-right: 0;
        }


        .info {
            position: relative;
            padding: 20px;
        }

        h2 {}

        .info h2 {
            color: #16f1dc;
            font-size: 34px;
        }

        .info h3 {
            color: white;
            letter-spacing: 1.2px;
            margin-top: 20px;
        }

        .svg-wrap {
            display: flex;
            margin-top: 14px;
        }

        .svg-wrap a {
            border: 0;
            padding: 0;
            display: flex;
            color: #bbbbbb;
            font-size: 16px;
            justify-content: center;
            align-items: center;
            font-style: italic;
        }

        .svg-wrap a svg {
            width: 20px;
            height: 20px;
            fill: white;
            transition: fill 0.2s ease-in-out;
            margin-right: 13px;
        }

        .svg-wrap a:hover svg {
            fill: #16f1dc;
            cursor: pointer;
        }

        .svg-wrap a:hover {
            background-color: transparent;
            color: #16f1dc;
            cursor: pointer;
        }



        @media screen and (max-width: 900px) {
            .content {
                padding: 10px 0 0;
                display: block;
            }

            .map {
                display: none;
            }

            .contact {
                width: 100%;
                flex-direction: column-reverse;
                border-radius: 0;
                box-shadow: 0px 0px 0px 0px;
            }

            .other {
                width: 100%;
                padding: 20px 0;
            }

            .form {
                width: 100%;
            }
        }

        @media screen and (max-height: 660px) {
            .content {
                align-items: flex-start;
            }
        }


        @media screen and (max-width: 660px) {
            nav .hamburger {
                opacity: 1;
                pointer-events: initial;
            }

            nav div.linkWrapper {
                top: 0;
                right: 0;
                position: fixed;
                height: 100vh;
                background-color: rgba(36, 51, 66, 0.9);
                display: flex;
                flex-direction: column;
                padding: 10px 0;
                box-shadow: -10px 0px 20px rgba(0, 0, 0, 0.3);
                width: 100%;
                justify-content: center;
                will-change: transform;
                opacity: 0;
                display: none;
                pointer-events: none;
                transition: opacity 0.3s ease-in-out;
            }

            nav div a {
                color: white;
                text-decoration: none;
                display: inline-block;
                font-weight: 300;
                letter-spacing: 1.5;
                width: 100%;
                margin-bottom: 31px;
                text-align: center;
                font-size: 38px;
            }
        }

        .error {
            border: 1px solid red;
        }
    </style>

</body>

</html>