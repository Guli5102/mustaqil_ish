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

/*  main start  */

/* .container{
    margin-top: 30px;
} */

.wrapper_title{
    display: flex;
    /* justify-content: center; */
    align-items: center;
    height: 100px;
    text-align: center;
    margin-left: 300px;
}

.wrapper_pow{
    margin-top: 15px;
    /* font-family: Poppins;
font-size: 30px; */
font-weight: 600;
/* line-height: 45px;
text-align: left; */
}

.wrapper_pow1{
    font-family: Poppins;
font-size: 24px;
font-weight: 200;
line-height: 36px;
/* text-align: left; */

}
/*  main and  */


/*  section start */

.text-row{
    display: flex;
    gap: 30px;
}

.text-title{
    margin-top: 20px;
    margin-left: 20px;
}
.text-section{
    font-family: Poppins;
    font-size: 20px;
    font-weight: 400;
    line-height: 27px;
    text-align: left;
    margin-top: 20px;
    margin-left: 20px;
}
/*  section and  */


/*    start  */

.wrapper-title{
    font-family: Poppins;
    font-size: 22px;
    font-weight: 500;
    /* line-height: 33px; */
    text-align: left;
    margin-left: 350px;
    margin-top: 20px;
}

.wrapper-left{
    font-family: Poppins;
    font-size: 19px;
    font-weight: 400;
    line-height: 27px;
    text-align: left;
    margin-top: 20px;
}
/* .wrapper_pow1{
    margin-top: 5px;
} */


/*  header start */
.header-row{
    height: 35px;
    margin-left: 230px;
    margin-top: 30px;
}

.header-p{
    /* margin-top: 20px;
    font-size: 19px; */
    font-family: Poppins;
    font-size: 19px;
    font-weight: 400;
    line-height: 27px;
    text-align: left;
    margin-top: 20px;
}



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
<x-app-layout>
    <div class="container">
        <div class="wrapper_title">
            <div class="wrapper_text">
                <h2 class="wrapper_row">Kutubxona - ma'rifatli dunyoga ochilgan eshik.</h2>
                <p class="wrapper_pow1">Respublika bolalar kutubxonasi faoliyati.</p>
            </div>
        </div>
    </div>
    <!-- main and  -->

    <!--  section start  -->

    <div class="container">
        <div class="text-row">
            <div class="img">
                <img src="/img/about1.svg" alt="">
            </div>
            <div class="text-title">
                <p class="text-section">Respublika bolalar kutubxonasi 1965 yilning yanvar oyida Alisher Navoiy<br>
                    nomidagi Davlat kutubxonasining “O‘smirlarga xizmat ko‘rsatish bo‘limi<br>
                    fondi” ning negizida, O‘zbekiston Respublikasi Vazirlar Mahkamasi<br>
                    qaroriga asosan viloyatlardagi bolalar kutubxonalari uchun ilmiy-uslubiy<br>
                    markaz sifatida tashkil etildi. Kutubxona dastlabki davrda V.Mayakovskiy<br>
                    kutubxona bilan bir binoda joylashtirilgan edi va 1972 yildan esa<br>
                    o‘z binosiga ega bo‘ldi. Kutubxona uchun bino tanlashda uni shaharning<br>
                    markazida, qulay joyda joylashishi, maktablar va bolalar bog‘chalari<br>
                    yaqinligi hisobga olindi. Respublika bolalar kutubxonasi Davlat<br>
                    muhofazasidan me'morchilik yodgorligi bo‘lmish qadimiy binoda<br>
                    Binoni 1907 yilda boy savdogar aka-uka Vodyayevlar o‘zlari<br>
                    uchun qurganlar.</p>
            </div>
        </div>
    </div>
    <!--  section and  -->

    <!--  section 1 start  -->

    <div class="container">
        <div class="main-title">
            <div class="wrapper-title">
                <h2>Bugungi kundagi faoliyati</h2>
            </div>
            <div class="wrapper-left">
                <div class="left-top">
                    <p>Respublika bolalar kutubxonasi yiliga 13 mingdan ziyod kitobxonlarga xizmat ko‘rsatib kelmoqda. Ko‘p sonli kitobxonlarni bog‘cha<br>
                        bolalaridan boshlab, to 1-11 sinf o‘quvchilari tashkil etadi. Shuningdek, Toshkent shahridagi barcha maktab o‘quvchilari va<br>
                        o‘qituvchilariga hamda maktab kutubxonachiilariga kutubxona xizmati ko‘rsatilmoqda. Kutubxona har jihatdan qulay va shinam.<br>
                        Kichkintoylardan tortib to kattalarning ham qiziqishiga javob beradigan kitob zahirasiga ega. Kutubxonaning asosiy vazifasi kitobni<br>
                        e‘ibot qilishdan uni keng kitobxon ommasiga yetkazishdan iboratdir. www.kitob.uz , www.odob.uz, www.taqvim.uz saytlari hamda <br>
                        facebook, intstagram va telegramdagi sahifalari bilan kitobxonlarga online xizmat ko‘rsatadi. Bundan tashqari, yosh<br>
                        qulaylik yaratish maqsadida QR kod yordamida internetda osongina topiladigan elektron kitoblar katalogi ham yo‘lga qo‘yilgan.<br>
                        Buyuk shaxslarning hayot va ijodi haqida ma'lumot beruvchi hujjatli filmlar to‘plami ham bolaning dunyoqarashini
                        ‘stirish, tarix bilan yaqindan tanishtirishga xizmat qiladi.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
