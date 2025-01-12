<x-app-layout>

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;800;900&display=swap);

        :root{
            --font-main: 'Montserrat', sans-serif;
            --black-color: #FFFFFF;
            --white-color:#fff;
            --main-color: #1D13A0;
            --link-color: #06042E;
            --link-color: #fafafa;
        }

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html, body,.wrapper{
            width: 100%;
            height: 100%;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        button{
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }
        /* ul,ol,li{
            list-style: none;
        } */
        .wrapper{
            font-family: var(--font-main);
            font-size: 14px;
            font-style: normal;
            font-weight: normal;
            line-height: normal;
        }
        .container{
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* header start */
        /* Navbar styling */
        .container {
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
            padding: 10px 20px;
            background-color: white;
            /* border-bottom: 1px solid #ddd; */
            font-family: Arial, sans-serif;
        }

        /* Logo styling */
        .header-logo {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            gap: 10px;
            color: #2a2a8f;
        }

        .logo {
            width: 89px;
            height: 76px;
            top: 30px;
            margin-right: 10px;
            left: 130px;
        }

        /* Menu styling */
        .header-link {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 40px;
            margin-left: 160px;
        }

        .header-link li {
            position: relative;
            display: inline-block;
            margin-right: 20px;
        }

        .header-link a {
            text-decoration: none;
            /* color: black; */
            font-weight: 550;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            list-style: none;
            padding: 10px 0;
        }
        .span-row{
            gap: 20px;
            width: 84px;
            /* height: 51px; */
            top: 50px;

        }

        .dropdown li a {
            padding: 8px 20px;
            display: block;
            /* white-space: nowrap; */
        }

        .header-link li:hover .dropdown {
            display: block;
        }

        .header-icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-icons a {
            color: #2929cc;
            font-size: 18px;
            text-decoration: none;
        }

        .register-button {
            padding: 13px 30px;
            background-color: #2a2a8f;
            color: white;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;

        }
        /* header and  */


        /*    */
        .upload-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin: 40px auto;
            max-width: 900px;
            height: 100%;
            width: 100%;
        }

        .upload-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            border-radius: 15px;
            /* border: 1px solid #e0e0e0; */
            /* background-color: #ffffff; */
            cursor: pointer;
            text-align: center;
            background: rgba(250, 250, 250, 1);
            box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.15);
        }

        .upload-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
        }

        .upload-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .feedback-form {
            width: 50%;
            margin-top: 100px;
        }

        .btn-end{
            /* display: flex; */
            justify-content: end;
            margin-left: 61px;
            padding: 8px 25px 8px 25px;
        }

        .feedback-form h2 {
            margin-bottom: 10px;
            color: #2e2e8f;
        }

        .input-field, .textarea-field {
            width: 80%;
            padding: 12px;
            margin-bottom: 8px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            outline: none;
        }

        .textarea-field {
            height: 100px;
            resize: none;
        }

        .submit-btn {
            background: linear-gradient(270deg, #140A95 0%, #4138B5 100%);
            color: #ffffff;
            border: none;
            padding: 10px 26px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s;
            /* margin-left: 450px !important; */
            margin-bottom: 50px;
        }

        .submit-btn:hover {
            background: linear-gradient(90deg, #2e2e8f, #3b3bdb);
        }

        .rows{
            margin-left: 100px;
            display: flex;
            align-items: center;
            column-gap: 3rem;
        }

        /*   footer and  */
        .footer-logo{
            margin-top: 10px;
            display: flex;
            gap: 20px;
        }

        .footer-book{
            font-family: Poppins;
            font-size: 15px;
            line-height: 90px;
            color:  #fff;
        }

        .p-title{
            font-family: Poppins;
            font-size: 18px;
            font-weight: 400;
            line-height: 27px;
            text-align: left;
            color: #FFFFFF;
        }

        .footer-link{
            display: flex;
            gap: 150px;
            width: 150%;
            height: 100%;
            margin-left: 30px;
            /* background-image: url(./img/main.html/orqa\ fon.svg); */
        }
        .row-section{
            color: #FFFFFF;
        }
        .row-title{
            color: #FFFFFF;
        }
        .footer-text{
            margin-top: 5px;
        }

        .pow-right{
            font-size: 13px;
            font-weight: 400;
            line-height: 21px;
            text-align: center;
            color: #FFFFFF;
        }

        .pow-left{
            padding: 20px;
        }
    </style>
    <div class="upload-form-container">
        <div class="rows">
            <div class="upload-section">
                <label for="file-upload" class="upload-label">
                    <img src="{{url('img/contact.svg')}}" alt="Upload Icon" class="upload-icon">
                    <p>Kitob yuklash</p>
                </label>
                <input type="file" id="file-upload" style="display: none;">
            </div>
            <div class="feedback-form">
                <h2>Fikr qoldirish</h2>
                <div>
                    <input type="text" placeholder="Kitobni nomi" class="input-field">
                    <textarea placeholder="Kitob haqida" class="textarea-field"></textarea>
                </div>
                <div class="btn-end">
                    <button type="submit" class="submit-btn btn-end">Yuborish</button>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
